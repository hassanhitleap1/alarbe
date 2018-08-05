<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
 use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Contact;
use app\models\Pages;
use app\models\SignupForm;
use app\models\Posts;
use app\models\Areas;
use app\models\Countries;
use app\models\Categories;
use app\models\SubCategories;
use app\models\FilterPosts;
use yii\data\Pagination;

class SiteController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = '//home';
        $areas = Areas::find()->all();
        $countries = Countries::find()->all();
        $categoris = Categories::find()->all();
        $subCategories = SubCategories::find()->all();
        $posts=Posts::find()->limit(5)->orderBy(['create_at' => SORT_DESC])->all();;
        return $this->render('index',[
            'posts'=>$posts,
            'areas' => $areas,
            'countries' => $countries,
            'categoris' => $categoris,
            'subCategories' => $subCategories,
            ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            $modelConnect=NEW Contact();
            $modelConnect->name=$model->name;
            $modelConnect->email=$model->email;
            $modelConnect->subject=$model->subject;
            $modelConnect->body=$model->body;
            $modelConnect->save();
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $page=Pages::find()->where(['name'=>'about'])->one();
     
        return $this->render('about',['page'=>$page]);
    }

        /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }


    public function actionFilter(){
        $areas = Areas::find()->all();
        $countries =Countries::find()->all();
        $categoris=Categories::find()->all();
        $subCategories=SubCategories::find()->all();
        $model= new FilterPosts();
        $request = Yii::$app->request;
        $query = Posts::find();
        $countQuery = clone $query;
        if(! empty( $request->get('area')) ){
            $query->where(['area_id'=> $request->get('area')]);
        }
        if (!empty($request->get('subCategory'))) {
            $query->where(['sub_category_id' => $request->get('subCategory')]);
        }
        if (!empty($request->get('country'))) {
            // $request->get('country');
            // $country = Categories::findOne(1);
            // var_dump($country->areas);
            // $query->where(['country' => $ides]);
            // exit;
        }
        if (!empty($request->get('sell'))) {
            $query->where(['for_what' => Posts::SELL]);
        }
        if (!empty($request->get('rent'))) {
            $query->where(['for_what' => Posts::RENT]);
        }
        if (!empty($request->get('search'))) {
            $search =$request->get('search');
            $query->orWhere(['like', 'title', $search]);
            $query->orWhere(['description', 'title', $search]);
        }
        $pagination = new Pagination([
            'defaultPageSize'=>4,
            'totalCount' => $countQuery->count()]);
        $models = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
       return $this->render('filter',[
            'areas'=> $areas,
            'countries'=> $countries,
            'categoris'=> $categoris,
            'subCategories'=> $subCategories,
            'model' => $model,
            'models' => $models,
            'pagination' => $pagination,
        ]); 
    }

    public function actionShowPost($id){
        return $this->render('show-post', [
            'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Posts::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

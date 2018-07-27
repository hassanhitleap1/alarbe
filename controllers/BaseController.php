<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
 use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class BaseController extends Controller
{
    public function beforeAction($action)
    {
        \Yii::$app->language = 'ar';
        if(isset($_GET['lang'])){

          }
        // $cookies = Yii::$app->request->cookies;
        // if ($cookies->has('lang')) {
        //     Yii::$app->language = $cookies->getValue('lang');
        // } else {
        //     Yii::$app->language = 'en';
        // }
        return parent::beforeAction($action);
    }

}
?>
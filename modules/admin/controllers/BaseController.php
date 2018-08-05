<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;


/**
 * Default controller for the `admin` module
 */
class BaseController extends Controller
{
 

    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest) {
            return Yii::$app->response->redirect(Url::to(['/admin/main/login']));
        } 
        return parent::beforeAction($action);
    }
}

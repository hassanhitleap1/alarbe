<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
 use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class BaseController extends Controller
{

    function init()
    {
        parent::init();
        $cookies = Yii::$app->request->cookies;
        if (isset($_GET['lang'])) 
        {
            Yii::$app->language = $_GET['lang'];
            $cookie = new Yii\web\cookie([
                'name' => 'lang',
                'value' => $_GET['lang']
            ]);
            Yii::$app->getResponse()->getCookies()->add($cookie);
        }
        else if ($cookies->has('lang')) {
            Yii::$app->language = $cookies->getValue('lang');
        } else {
            Yii::$app->language = 'ar';
        }
    
    }

}
?>
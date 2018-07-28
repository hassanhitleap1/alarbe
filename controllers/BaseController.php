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
        $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
        $escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        if(isset($_GET['lang'])){
            Yii::$app->language=$_GET['lang'];
            header('location:'. $escaped_url);
          }
        return parent::beforeAction($action);
    }

}
?>
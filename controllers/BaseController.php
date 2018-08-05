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
        $cookies = Yii::$app->response->cookies;

        if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
            if ($lang == 'ar') {
                $cookies->add(new \yii\web\Cookie([
                    'name' => 'lang',
                    'value' => 'ar',
                    'expire' => time() + 86400 * 365,
                ]));
                Yii::$app->language = $cookies->getValue('lang');
            } else {
                $cookies->add(new \yii\web\Cookie([
                    'name' => 'lang',
                    'value' => 'en',
                    'expire' => time() + 86400 * 365,
                ]));
                Yii::$app->language = $cookies->getValue('lang');
            }
        } elseif (($cookie = $cookies->get('lang')) !== null) {
            Yii::$app->language = $cookies->getValue('lang');
        } else {
            Yii::$app->language = 'ar';
        }
        return parent::beforeAction($action);
    }

    // function init()
    // {
    //     parent::init();
    //     $cookies = Yii::$app->response->cookies;

    //     if (isset($_GET['lang'])) {
    //         $lang = $_GET['lang'];
    //         if ($lang == 'ar') {
    //             $cookies->add(new \yii\web\Cookie([
    //                 'name' => 'lang',
    //                 'value' => 'ar',
    //                 'expire' => time() + 86400 * 365,
    //             ]));
    //             Yii::$app->language = $cookies->getValue('lang');
    //         } else {
    //             $cookies->add(new \yii\web\Cookie([
    //                 'name' => 'lang',
    //                 'value' => 'en',
    //                 'expire' => time() + 86400 * 365,
    //             ]));
    //             Yii::$app->language = $cookies->getValue('lang');
    //         }
    //     } elseif (($cookie = $cookies->get('lang')) !== null) {
    //         Yii::$app->language = $cookies->getValue('lang');
    //     } else {
    //         Yii::$app->language = 'ar';
    //     }

    // }

}
?>
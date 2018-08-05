<?php
namespace app\components;


use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;



 
class ComponentLang extends Component
{
    public function setLang($lang)
    {
        $cookies = Yii::$app->response->cookies;
        if ($cookies->has('lang')) {
            Yii::$app->language = $cookies->getValue('lang');
        } else {
            if ($lang == 'ar') {
                $cookies->add(new \yii\web\Cookie([
                    'name' => 'lang',
                    'value' => 'ar',
                    'expire' => time() + 86400 * 365,
                ]));
                Yii::$app->language = $cookies->getValue('lang');
            }else{
                $cookies->add(new \yii\web\Cookie([
                    'name' => 'lang',
                    'value' => 'en',
                    'expire' => time() + 86400 * 365,
                ]));
                Yii::$app->language = $cookies->getValue('lang');
            }
        }

     

    }
 
}
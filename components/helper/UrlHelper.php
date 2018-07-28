<?php
namespace app\components\helper;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class UrlHelper extends Component
{
    public function urlHere($lang)
    {
        $url = "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
        $escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        return $escaped_url;
    }

}
<?php
namespace app\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\helpers\VarDumper;

class UrlHelper extends Component
{
    public function urlHere()
    {
        $url = "{$_SERVER['REQUEST_URI']}";
        $escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        return $escaped_url;
    }

}
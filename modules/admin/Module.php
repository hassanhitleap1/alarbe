<?php

namespace app\modules\admin;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layouts='@app/modules/admin/views/layouts/main';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->layout=$this->layouts;
        parent::init();

        // custom initialization code goes here
    }
}

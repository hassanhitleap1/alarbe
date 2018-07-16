<?php

namespace app\modules\admin;

use app\models\User;


/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    // public function behaviors()
    // {
    //     return [
    //         'basicAuth' => [
    //             'class' => \yii\filters\auth\HttpBasicAuth::className(),
    //             'auth'=>function($username,$password){
    //                 $user = User::find()->where(['username' => $username])->one();
    //                 if(!empty( $user )){
    //                     if ($user->verifyPassword($password)) {
    //                         return $user;
    //                     }
    //                 }
    //                 return null;
    //             },
    //         ],
    //     ];
    // }
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

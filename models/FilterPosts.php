<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class FilterPosts extends Model
{
    public $category;
    public $area;
    public $subCtegory ;


  
    public function rules()
    {
        return [
      
        ];
    }


}

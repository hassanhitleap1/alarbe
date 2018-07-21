<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use kartik\select2\Select2;


$this->title = 'filter';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="row container">
        <div class="panel panel-default">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">
                    <div class="row">
                        <div class="container">
                            <div class="form-inline">
                                <div class="form-group has-feedback col-md-2">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                                        <select id="myselect" class="form-control col-md-3 input-lg">
                                            <option selected disabled>---</option>
                                            <?php foreach ($areas as $area) : ?>
                                                <option><?= $area->name_en ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group has-feedback col-md-2">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                                        <select id="myselect" class="form-control col-md-3 input-lg">
                                            <option selected disabled>---</option>
                                           <?php foreach ($categoris as $category) : ?>
                                                <option><?= $category->name_en ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group has-feedback col-md-2">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                                        <select id="myselect" class="form-control col-md-3 input-lg">
                                            <option selected disabled>---</option>
                                            <?php foreach ($subCategories as $subCategory) : ?>
                                                <option><?= $subCategory->name_en ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div> 
                                <div class="form-group has-feedback col-md-2">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                                        <select id="myselect" class="form-control col-md-3 input-lg">
                                            <option selected disabled>---</option>
                                            <?php foreach ($countries as $country) : ?>
                                                <option><?= $country->name_en ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>                                                                 
                                <div class="form-group col-md-3">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">find</button>
                                </div> 
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row clear">
                            <div class="col-md-12">
                                <label class="checkbox-inline input-lg"><input type="checkbox" value="">Option 1</label>
                                <label class="checkbox-inline input-lg"><input type="checkbox" value="">Option 2</label>
                                <label class="checkbox-inline input-lg"><input type="checkbox" value="">Option 3</label>
                                <label class="checkbox-inline input-lg"><input type="checkbox" value="">Option 1</label>
                                <label class="checkbox-inline input-lg"><input type="checkbox" value="">Option 2</label>
                                <label class="checkbox-inline input-lg"><input type="checkbox" value="">Option 3</label>
                            </div>
                    </div>
                    </div>
                    
            </div>
        </div>
    </div>

</div>
<div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <?= Html::img('images\slider\1.jpg', ['alt' => 'sds', 'class' => 'card-img-top', 'style' => 'width: 100%;']); ?>
                </div>
                <div class="panel-body">
                    aspojdopajs daskpo askapsd ]as[lpf[ ]]
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <?= Html::img('images\slider\1.jpg', ['alt' => 'sds', 'class' => 'card-img-top', 'style' => 'width: 100%;']); ?>
                </div>
                <div class="panel-body">
                    aspojdopajs daskpo askapsd ]as[lpf[ ]]
                </div>
            </div>
        </div>
                <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <?= Html::img('images\slider\1.jpg', ['alt' => 'sds', 'class' => 'card-img-top', 'style' => 'width: 100%;']); ?>
                </div>
                <div class="panel-body">
                    aspojdopajs daskpo askapsd ]as[lpf[ ]]
                </div>
            </div>
        </div>
    </div>
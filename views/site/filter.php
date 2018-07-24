<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use kartik\select2\Select2;
use yii\widgets\LinkPager;


$this->title = 'filter';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="row container">
        <div class="panel panel-primary ">
            <div class="panel-heading ">search box</div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin(['action' => '?r=site%2Ffilter','method'=>'GET']) ?>
                    <div class="row">

                        <div class="container">
                            <div class="form-inline">
                                <div class="form-group has-feedback col-md-2">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span> Country</div>
                                        <select id="myselect" class="form-control col-md-3 input-lg" name="country">
                                            <option selected disabled>Select Country</option>
                                            <?php foreach ($countries as $country) : ?>
                                                <option value="<?= $country->id ?>"><?= $country->name_en ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>                             
                                <div class="form-group has-feedback col-md-2">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span> Area</div>
                                            <select id="myselect" class="form-control col-md-3 input-lg" name="area">
                                                <option selected disabled>Select Area</option>
                                                <?php foreach ($areas as $area) : ?>
                                                    <option value="<?= $area->id ?>"><?= $area->name_en ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                </div>
                    
                                <div class="form-group has-feedback col-md-2">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span> Sub Category</div>
                                        <select id="myselect" class="form-control col-md-3 input-lg " name="subCategory">
                                            <option selected disabled>Select Sub Category</option>
                                            <?php foreach ($subCategories as $subCategory) : ?>
                                                <option value="<?= $subCategory->id ?>"><?= $subCategory->name_en ?></option>
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
                                    <label class="checkbox-inline input-lg" ><input type="checkbox" value="1" name="for_what">Sale</label>
                                    <label class="checkbox-inline input-lg"><input type="checkbox" value="2" name="for_what">rent</label>
                                </div>
                        </div>
                    </div>
                <?php ActiveForm::end() ?>   
            </div>
        </div>
    </div>

</div>
<div class="row">    
        <?php foreach ($models as $model) :?>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?= Html::img($model->imagePosts['image_path'], [ 'class' => 'card-img-top', 'style' => 'width: 100%;height: 332px;']); ?>
                    </div>
                    <div class="panel-body">
                        <?= Html::a('<h3>'.$model->title. '</h3>', ['/site/show-post', 'id' => $model->id]) ?>
                        <h3><?= $model->title ?></h3>
                        <?= $model->description ?>

                    </div>
                </div>
            </div>
        
        <?php endforeach;?>
    </div>
     <div class="row">
             <?= LinkPager::widget([
                'pagination' => $pagination,
            ]); ?>
        </div>
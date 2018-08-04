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
            <div class="panel-heading "><?= Yii::t('app', 'Searchbox') ?></div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin(['action' => '/site/filter','method'=>'GET']) ?>
                    <div class="row">

                        <div class="container">
                            <div class="form-inline">
                                <div class="form-group has-feedback col-md-4">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span> <?= Yii::t('app', 'Country') ?></div>
                                        <select id="myselect" class="form-control col-md-3 " name="country">
                                            <option selected disabled><?= Yii::t('app', 'Select') ?> <?= Yii::t('app', 'Country') ?></option>
                                            <?php foreach ($countries as $country) : ?>
                                                <?php if(isset($_GET['country'])):?>
                                                <?php if ($_GET['country']== $country->id):?>
                                                    <option value="<?= $country->id ?>" selected><?= $country['name_' . Yii::$app->language] ?></option>
                                                    <?php else : ?>
                                                    <option value="<?= $country->id ?>"><?= $country['name_' . Yii::$app->language] ?></option>
                                                    <?php endif; ?>
                                                <?php else : ?>
                                                    <option value="<?= $country->id ?>"><?= $country['name_' . Yii::$app->language] ?></option>
                                                <?php endif; ?>
                                                
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>                             
                                <div class="form-group has-feedback col-md-4">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span> <?= Yii::t('app', 'Area') ?></div>
                                            <select id="myselect" class="form-control col-md-3 " name="area">
                                                <option selected disabled><?= Yii::t('app', 'Select') ?> <?= Yii::t('app', 'Area') ?></option>
                                                <?php foreach ($areas as $area) : ?>
                                                    <?php if (isset($_GET['area'])) : ?>
                                                        <?php if ($_GET['area'] == $area->id) : ?>
                                                            <option value="<?= $area->id ?>" selected><?= $area['name_' . Yii::$app->language] ?></option>
                                                            <?php else : ?>
                                                            <option value="<?= $area->id ?>"><?= $area['name_' . Yii::$app->language] ?></option>
                                                            <?php endif; ?>
                                                        <?php else : ?>
                                                        <option value="<?= $area->id ?>"><?= $area['name_' . Yii::$app->language] ?></option>
                                                        <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                </div>
                    
                                <div class="form-group has-feedback col-md-4">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span> <?= Yii::t('app', 'Category') ?></div>
                                        <select id="myselect" class="form-control col-md-3" name="subCategory">
                                            <option selected disabled><?= Yii::t('app', 'Select') ?> <?= Yii::t('app', 'Category') ?>  </option>
                                            <?php foreach ($subCategories as $subCategory) : ?>
                                                    <?php if (isset($_GET['subCategory'])) : ?>
                                                        <?php if ($_GET['subCategory'] == $subCategory->id) : ?>
                                                             <option value="<?= $subCategory->id ?>" selected><?= $subCategory['name_' . Yii::$app->language] ?></option>
                                                            <?php else : ?>
                                                            <option value="<?= $subCategory->id ?>"><?= $subCategory['name_' . Yii::$app->language] ?></option>
                                                            <?php endif; ?>
                                                        <?php else : ?>
                                                         <option value="<?= $subCategory->id ?>"><?= $subCategory['name_' . Yii::$app->language] ?></option>
                                                        <?php endif; ?>                                            
                                               
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row clear">
                                <div class="col-md-2 ">
                                    <label class="checkbox-inline input-lg" ><input type="checkbox" value="1" name="sell"><?= Yii::t('app', 'Sale') ?></label>
                                    <label class="checkbox-inline input-lg"><input type="checkbox" value="1" name="rent"><?= Yii::t('app', 'Rent') ?></label>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                    <input type="text" class="form-control " id="search" placeholder="<?= Yii::t('app', 'Search') ?>">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                            <button type="submit" class="btn btn-primary btn-block "><?= Yii::t('app', 'Find') ?></button>
                                    </div>
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
                    <?= Html::a(Html::img('@web/'.$model->imagePosts['image_path'], ['class' => 'card-img-top', 'style' => 'width: 100%;height: 332px;']), ['/site/show-post', 'id' => $model->id]) ?>
                    </div>
                    <div class="panel-body">
                        <?= Html::a('<h3>'.$model->title. '</h3>', ['/site/show-post', 'id' => $model->id]) ?>
                        <?= substr($model->description,40 ); ?>
                        <?= Html::a("read more", ['/site/show-post', 'id' => $model->id]) ?>
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
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'filter';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="row container">
        <div class="panel panel-default">
            <div class="panel-heading">Panel Heading</div>
            <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-inline">
                                <div class="form-group">
                                        <select id="" class="form-control">
                                            <option selected disabled>---</option>
                                            <?php foreach ($areas as $area) : ?>
                                                <option><?= $area->name_en ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <select id="" class="form-control">
                                            <option selected disabled>---</option>
                                            <?php foreach ($categoris as $category) : ?>
                                                <option><?= $category->name_en ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <select id="" class="form-control">
                                            <option selected disabled>---</option>
                                            <?php foreach ($countries as $country) : ?>
                                                <option><?= $country->name_en ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                        <select id="" class="form-control">
                                            <option selected disabled>---</option>
                                            <?php foreach ($subCategories as $subCategory) : ?>
                                                <option><?= $subCategory->name_en ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                </div>
                                
                                <div class="form-group has-success has-feedback">
                                    <label class="control-label" for="inputSuccess4"></label>
                                    <input type="text" class="form-control" id="inputSuccess4">
                                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                                <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Option 1</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Option 2</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">Option 3</label>
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
</div>
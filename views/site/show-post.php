<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;


$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <h1><?= $model->title?> </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?= Html::img($model->imagePosts['image_path'], ['class' => 'card-img-top', 'style' => '']); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?= $model->description ?>
    </div>
</div>
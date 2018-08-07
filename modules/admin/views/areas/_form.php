<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Countries;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Areas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="areas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_country')->dropDownList(ArrayHelper::map(Countries::find()->all(), 'id', 'name_'. Yii::$app->language),
    ['prompt'=> Yii::t('app', 'Select') .  Yii::t('app', 'Country') ]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

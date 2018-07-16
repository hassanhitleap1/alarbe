<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Categories;

/* @var $this yii\web\View */
/* @var $model app\models\SubCategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sub-categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ar')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'category_id')->dropDownList(
        ArrayHelper::map(Categories::find()->all(), 'id', 'name_en'),
        ['prompt' => 'please select country ']
     ) ;?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

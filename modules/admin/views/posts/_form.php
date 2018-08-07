<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\SubCategories;
use dosamigos\ckeditor\CKEditor;
use app\models\Areas;


/* @var $this yii\web\View */
/* @var $model app\models\Posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

   <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic'
    ]) ?>
  
       <?= $form->field($model, 'sub_category_id')->dropDownList(
            ArrayHelper::map(SubCategories::find()->all(), 'id', 'name_'.Yii::$app->language),
            ['prompt' => Yii::t('app', 'Select') . Yii::t('app', 'Country') ]
        ); ?>
    <?= $form->field($model, 'area_id')->dropDownList(
        ArrayHelper::map(Areas::find()->all(), 'id', 'name_'.Yii::$app->language),
        ['prompt' => Yii::t('app', 'Select') . Yii::t('app', 'Area') ]
    ); ?>

    <?= $form->field($model, 'for_what')->dropDownList(
        ['1'=>Yii::t('app', 'Rent'),'2'=> Yii::t('app', 'sell') ],
        ['prompt'=> Yii::t('app', 'Select') .  Yii::t('app', 'For_What') ]
    ) ?>

    <?= $form->field($model, 'files[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

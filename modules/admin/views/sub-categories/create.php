<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SubCategories */

$this->title = Yii::t('app', 'Create Sub Categories');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sub Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sub-categories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

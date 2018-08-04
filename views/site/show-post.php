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
        <?= $model->description ?>
    </div>
</div>
<style>

    /* Main carousel style */
.carousel {
    width: 600px;
}

/* Indicators list style */
.article-slide .carousel-indicators {
    bottom: 0;
    left: 0;
    margin-left: 5px;
    width: 100%;
}
/* Indicators list style */
.article-slide .carousel-indicators li {
    border: medium none;
    border-radius: 0;
    float: left;
    height: 54px;
    margin-bottom: 5px;
    margin-left: 0;
    margin-right: 5px !important;
    margin-top: 0;
    width: 100px;
}
/* Indicators images style */
.article-slide .carousel-indicators img {
    border: 2px solid #FFFFFF;
    float: left;
    height: 54px;
    left: 0;
    width: 100px;
}
/* Indicators active image style */
.article-slide .carousel-indicators .active img {
    border: 2px solid #428BCA;
    opacity: 0.7;
}
</style>


<div class="carousel slide article-slide" id="article-photo-carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner cont-slider">

    <div class="item active">
     <?= Html::img('@web/' . $model->ImagePosts['image_path'], ['class' => '','title'=>'', 'style' => '']); ?>
    </div>
    <?php foreach ($model->imagesPosts as $image) : ?>
    <div class="item">
        <?= Html::img('@web/' . $image->image_path, ['class' => '', 'title' => '', 'style' => '']); ?>
    </div>
    <?php endforeach; ?>

    <div class="item">
      <img alt="" title="" src="http://placehold.it/600x400">
    </div>
    <div class="item">
      <img alt="" title="" src="http://placehold.it/600x400">
    </div>
  </div>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
      <?= Html::img('@web/' . $model->ImagePosts['image_path'], ['class' => '', 'title' => '', 'style' => '']); ?>
    </li>
    <?php $i=0;?>
    <?php foreach ($model->imagesPosts as $image) : ?>
    <li class="" data-slide-to="<?= ++$i?>" data-target="#article-photo-carousel">
      <?= Html::img('@web/' . $image->image_path, ['class' => '', 'title' => '', 'style' => '']); ?>
    </li>
    <?php endforeach; ?>
  </ol>
</div>
<script>
// Stop carousel
$('.carousel').carousel({
  interval: false
});
</script>

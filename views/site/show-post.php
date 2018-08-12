<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;


$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
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
    /* pading-top: 133px; */
}
/* Indicators active image style */
.article-slide .carousel-indicators .active img {
    border: 2px solid #428BCA;
    opacity: 0.7;
}
@media (min-width: @screen-sm-min) { 
    .article-slide .carousel-indicators img {
        display: none;
    }
    .article-slide .carousel-indicators li {
        display: none;
    }
}

</style>

<div class="row">
    <div class="col-md-7">
        <div class="carousel slide article-slide" id="article-photo-carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner cont-slider">

            <div class="item active">
            <?= Html::img('@web/' . $model->ImagePosts['image_path'], ['class' => '', 'title' => '', 'style' => '']); ?>
            </div>
            <?php foreach ($model->imagesPosts as $image) : ?>
            <div class="item">
                <?= Html::img('@web/' . $image->image_path, ['class' => '', 'title' => '', 'style' => '']); ?>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
            <?= Html::img('@web/' . $model->ImagePosts['image_path'], ['class' => '', 'title' => '', 'style' => '']); ?>
            </li>
            <?php $i = 0; ?>
            <?php foreach ($model->imagesPosts as $image) : ?>
            <li class="" data-slide-to="<?= ++$i ?>" data-target="#article-photo-carousel">
            <?= Html::img('@web/' . $image->image_path, ['class' => '', 'title' => '', 'style' => '']); ?>
            </li>
            <?php endforeach; ?>
        </ol>
          <!-- Left and right controls -->
        <a class="left carousel-control" href="#article-photo-carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#article-photo-carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    <div class="col-md-5 pull-right text-right">
        <h1 class=""><?= $model->title ?> </h1>
        <p class="" > <?= $model->description ?></p>
    </div>
</div>

<script>
// Stop carousel
$('.carousel').carousel({
  interval: false
});

</script>

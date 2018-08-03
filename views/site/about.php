<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="container-fluid">
<h1 class="text-center"><?= Yii::t('app','About')?></h1>
<hr>
 <div class="row">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
 </div>
<div class="row ">
	  <div class="col-md-4 text-center box-con">
        <a href="mailto:al@mail.com">
            <i class="glyphicon glyphicon-phone"></i>
            <h3 class=""><?= Yii::t('app', 'Phone')?></h3>
            <p class="">+123456789</p>
        </a>
      </div>
    <div class="col-md-4 text-center box-con">
        <a href="#">
            <i class="glyphicon glyphicon-map-marker "></i>
            <h3 class=""><?= Yii::t('app', 'Address') ?></h3>
            <p class=""><?= Yii::t('app', 'Address_campany')?></p>
        </a>
      </div>
      	  <div class="col-md-4 text-center box-con">
        <a href="tel:+123456789">
            <i class="glyphicon glyphicon-envelope"></i>
            <h3 class=""><?= Yii::t('app', 'Email') ?></h3>
            <p class="">ar@mail.com</p>
        </a>
      </div>
</div>

<div class="container" style="margin-top: 28px;">
    <hr style="margin-top: 28px;">
    <div class="row">
        <div class="col-md-12">
            <?php echo "ddddd"?>
        </div>
    </div>
</div>



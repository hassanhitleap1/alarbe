<?php

use yii\helpers\Html;
?>
<div id="carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <?= Html::img('images\slider\1.jpg',['alt'=>'sds']);?>
       <div class="carousel-caption d-none d-md-block">
       <div class="panel panel-primary ">
        <div class="panel-heading">find you akar</div>
        <div class="panel-body">Panel Content</div>
      </div>
        <h3>alsdhokpk store</h3>
        <p>ks dsodojs lso</p>
      </div>
     
    </div>

    <div class="item">
    <?= Html::img('images\slider\2.jpg',['alt'=>'sds']);?>
      <div class="carousel-caption d-none d-md-block">
        <h3>alsdhokpk store</h3>
        <p>ks dsodojs lso</p>
      </div>  
    </div>

    <div class="item">
    <?= Html::img('images\slider\3.jpg',['alt'=>'sds']);?>
      <div class="carousel-caption d-none d-md-block">
        <h3>alsdhokpk store</h3>
        <p>ks dsodojs lso</p>
      </div>      
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
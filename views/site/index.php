<?php

use yii\bootstrap\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'alarbia';
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
      <?= Html::img('@web/images\slider\1.jpg', ['alt' => 'sds']); ?>
       <div class="carousel-caption d-none d-md-block">
       <div class="panel panel-primary display-hiden-div">
        <div class="panel-heading"><?=Yii::t('app','Search_box')?></div>
        <div class="panel-body">
                        <?php $form = ActiveForm::begin(['action' => '?r=site%2Ffilter', 'method' => 'GET']) ?>
                    <div class="row">

                        <div class="container">
                            <div class="form-inline">
                                <div class="form-group has-feedback col-md-3">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span> <?= Yii::t('app', 'Country') ?></div>
                                        <select id="myselect" class="form-control col-md-3 " name="country">
                                            <option selected disabled><?= Yii::t('app', 'Select') ?> <?= Yii::t('app', 'Country') ?></option>
                                            <?php foreach ($countries as $country) : ?>
                                                <option value="<?= $country->id ?>"><?= $country['name_' . Yii::$app->language] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>                             
                                <div class="form-group has-feedback col-md-3">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span><?= Yii::t('app', 'Area') ?></div>
                                            <select id="myselect" class="form-control col-md-3 " name="area">
                                                <option selected disabled><?= Yii::t('app', 'Select') ?> <?= Yii::t('app', 'Area') ?></option>
                                                <?php foreach ($areas as $area) : ?>
                                                    <option value="<?= $area->id ?>"><?= $area['name_' . Yii::$app->language] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                    </div>
                                </div>
                    
                                <div class="form-group has-feedback col-md-3">
                                    <div class="input-group ">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span> <?= Yii::t('app', 'Category') ?> </div>
                                        <select id="myselect" class="form-control col-md-3" name="subCategory">
                                            <option selected disabled><?= Yii::t('app', 'Select') ?> <?= Yii::t('app', 'Category') ?> </option>
                                            <?php foreach ($subCategories as $subCategory) : ?>
                                                <option value="<?= $subCategory->id ?>"><?= $subCategory['name_' . Yii::$app->language] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row clear">
                                <div class="col-md-3 ">
                                    <label class="checkbox-inline input-lg" ><input type="checkbox" value="1" name="for_what"><?= Yii::t('app', 'Sale') ?> </label>
                                    <label class="checkbox-inline input-lg"><input type="checkbox" value="2" name="for_what"><?= Yii::t('app', 'Rent') ?> </label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <input type="text" class="form-control " id="search" placeholder="<?= Yii::t('app', 'Search') ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group ">
                                            <button type="submit" class="btn btn-primary btn-block "><?= Yii::t('app', 'Find') ?></button>
                                    </div>
                                </div>      
                        </div>
                    </div>
                    
                <?php ActiveForm::end() ?>   
        </div>
      </div>
        <h3><?= Yii::t('app', 'Slider_text_one') ?></h3>
      </div>
     
    </div>

    <div class="item">
    <?= Html::img('@web/images\slider\2.jpg', ['alt' => 'sds']); ?>
      <div class="carousel-caption d-none d-md-block">
        <h3><?= Yii::t('app', 'Slider_text_two') ?></h3>
      </div>  
    </div>

    <div class="item">
    <?= Html::img('@web/images\slider\3.jpg', ['alt' => 'sds']); ?>
      <div class="carousel-caption d-none d-md-block">
        <h3><?= Yii::t('app', 'Slider_text_three') ?></h3>
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

<!-- end fiexd silder -->
<div class="container">
    <div chdir
    <div class="row">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                <?php foreach ($posts as $post) :?>
                <div class="post-slide">
                    <div class="post-img">
                        <?= Html::a(Html::img($post->imagePosts['image_path'], ['class' => 'card-img-top', 'style' => 'height: 322px;']), ['/site/show-post', 'id' => $post->id]) ?>
                    </div>
                    <div class="post-content">
                        <div class="post-date">
                            <span class="month"><?php 
                                            $old_date_timestamp = strtotime($post->create_at);
                                            echo   date('F d y', $old_date_timestamp);?></span>
                            <span class="date"><?= date('d', $old_date_timestamp) ?></span>
                        </div>
                        <h5 class="post-title"><?= Html::a($post->title , ['/site/show-post', 'id' => $post->id]) ?></h5>
                        <p class="post-description">
                            <?= substr($post->description, 0, 40)  ?>
                        </p>
                    </div>
                    <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <?= Html::a('category :'.$post->subCategory->name_en, ['/site/filter', 'subCategory' => $post->subCategory->id ]) ?>  </li>
                        <!-- <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li> -->
                    </ul>
                </div>
                <?php endforeach;?>

            </div>
        </div>
    </div>
</div>


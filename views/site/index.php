<?php

use yii\bootstrap\Html;

/* @var $this yii\web\View */

$this->title = 'alarbia';
?>

<?= $this->render('/layouts/slider');?>
<!-- end fiexd silder -->

<div class="container"
    <div class="row ">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                <div class="post-slide">
                    <img src="images/img-1.jpg" alt="">
                    <div class="post-date">
                        <span class="month">Nov</span>
                        <span class="date">5</span>
                    </div>
                    <h3 class="post-title">
                        <a href="#">Lorem ipsum dolor sit amet, consectetur.</a>
                    </h3>
                    <p class="post-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......
                    </p>
                    <a href="#" class="read-more">read more<i class="fa fa-chevron-right"></i></a>
                </div>
                <?php foreach($posts as $post): ?>
                    <div class="post-slide">
                        <?= Html::img($post->imagePosts['image_path'], []); ?>
                        <div class="post-date">
                            <span class="month">Nov</span>
                            <span class="date">8</span>
                        </div>
                        <h3 class="post-title">
                            <a href="#"><?=$post->title	?>st</a>
                        </h3>
                        <p class="post-description">
                            <?=$post->description?>	
                        </p>
                        <a href="#" class="read-more">read more<i class="fa fa-chevron-right"></i></a>
                    </div>
                <?php endforeach; ?>
                
            </div>
        </div>
    </div>
</div> 
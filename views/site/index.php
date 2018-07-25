<?php

use yii\bootstrap\Html;

/* @var $this yii\web\View */

$this->title = 'alarbia';
?>

<?= $this->render('/layouts/slider');?>
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
                            <span class="month">apr</span>
                            <span class="date">10</span>
                        </div>
                        <h5 class="post-title"><?= Html::a($post->title , ['/site/show-post', 'id' => $post->id]) ?></h5>
                        <p class="post-description">
                            <?= substr($post->description, 0, 40)  ?>
                        </p>
                    </div>
                    <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
                        <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
                    </ul>
                </div>
                <?php endforeach;?>

            </div>
        </div>
    </div>
</div>

<script>
//     $(document).ready(function() {
//     $("#news-slider").owlCarousel({
//         items : 3,
//         itemsDesktop:[1199,2],
//         itemsDesktopSmall:[980,2],
//         itemsMobile: [600, 1],
//         navigation : false,
//         pagination:false,
//         autoPlay : true
//     });
// });
</script>
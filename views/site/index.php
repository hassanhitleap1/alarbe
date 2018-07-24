<?php

use yii\bootstrap\Html;

/* @var $this yii\web\View */

$this->title = 'alarbia';
?>

<?= $this->render('/layouts/slider');?>
<!-- end fiexd silder -->



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                <div class="post-slide">
                    <div class="post-img">
                        <a href="#"><img src="images/img-1.jpg" alt=""></a>
                    </div>
                    <div class="post-content">
                        <div class="post-date">
                            <span class="month">apr</span>
                            <span class="date">10</span>
                        </div>
                        <h5 class="post-title"><a href="#">Latest News Post</a></h5>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                        </p>
                    </div>
                    <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
                        <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
                    </ul>
                </div>
                <div class="post-slide">
                    <div class="post-img">
                        <a href="#"><img src="images/img-1.jpg" alt=""></a>
                    </div>
                    <div class="post-content">
                        <div class="post-date">
                            <span class="month">apr</span>
                            <span class="date">10</span>
                        </div>
                        <h5 class="post-title"><a href="#">Latest News Post</a></h5>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                        </p>
                    </div>
                    <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
                        <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
                    </ul>
                </div>
                <div class="post-slide">
                    <div class="post-img">
                        <a href="#"><img src="images/img-1.jpg" alt=""></a>
                    </div>
                    <div class="post-content">
                        <div class="post-date">
                            <span class="month">apr</span>
                            <span class="date">10</span>
                        </div>
                        <h5 class="post-title"><a href="#">Latest News Post</a></h5>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                        </p>
                    </div>
                    <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
                        <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
                    </ul>
                </div>
                <div class="post-slide">
                    <div class="post-img">
                        <a href="#"><img src="images/img-1.jpg" alt=""></a>
                    </div>
                    <div class="post-content">
                        <div class="post-date">
                            <span class="month">apr</span>
                            <span class="date">10</span>
                        </div>
                        <h5 class="post-title"><a href="#">Latest News Post</a></h5>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                        </p>
                    </div>
                    <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
                        <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
                    </ul>
                </div>
 
                <div class="post-slide">
                    <div class="post-img">
                        <a href="#"><img src="images/img-2.jpg" alt=""></a>
                    </div>
                    <div class="post-content">
                        <div class="post-date">
                            <span class="month">apr</span>
                            <span class="date">12</span>
                        </div>
                        <h5 class="post-title"><a href="#">Latest News Post</a></h5>
                        <p class="post-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                        </p>
                    </div>
                    <ul class="post-bar">
                        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
                        <li> <i class="fa fa-comments"></i> <a href="#">3</a> </li>
                        <li> <i class="fa fa-thumbs-up"></i> <a href="#">5 Likes</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
    $("#news-slider").owlCarousel({
        items : 3,
        itemsDesktop:[1199,2],
        itemsDesktopSmall:[980,2],
        itemsMobile: [600, 1],
        navigation : false,
        pagination:false,
        autoPlay : true
    });
});
</script>
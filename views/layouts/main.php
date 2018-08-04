<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\SubCategories;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    

<div class="wrap">
<?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems[] = ['label' => Yii::t('app','Home'), 'url' => ['/site/index']];

    $subCategories = SubCategories::find()->limit(5)->orderBy(['create_at' => SORT_DESC])->all();
    if(!empty($subCategories)){
        foreach ($subCategories as $subCategory) {
            $menuItems[] = ['label' => $subCategory['name_'. Yii::$app->language], 'url' => ['/site/filter', 'subCategory' => $subCategory->id]];
        }
    }
    $menuItems[] = [
        'label' => Yii::t('app', 'Language'),
        'items' => [
            [
                'label' => Yii::t('app', 'Arabic') . Html::img(Yii::$app->request->BaseUrl.'\images\flag\if_Saudi-Arabia.png', ['class' => 'pull-right', 'style' => 'width: 41px;']),
                'url' => ['/', 'lang' => 'ar']
            ],

            [
                'label' => Yii::t('app', 'English') . Html::img(Yii::$app->request->BaseUrl .'\images\flag\if_United-Kingdom.png', ['class' => 'pull-right', 'style' => 'width: 41px;']),
                'url' => ['/', 'lang' => 'en']
            ],

        ],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
        'encodeLabels' => false, 
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <h3> <?= Yii::t('app', 'Copyright') ?> </h3>
                <hr>
                <p class="">&copy; alrbia <?= date('Y') ?></p>
            </div>
            <div class="col-md-4">
                <h3><?= Yii::t('app', 'Connect_us') ?>  </h3>
                <hr>
                <ul>
                    <li><?= Html::a(Yii::t('app', 'About') , ['site/about']) ?></li>
                     <li><?= Html::a(Yii::t('app', 'Contact') , ['site/contact']) ?></li>
                </ul>
            </div>
            <div class="col-md-4">
              <h3> <?= Yii::t('app', 'Campany_name') ?>  </h3>
                <hr>
                <p class="">alrbia</p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php
use backend\assets\MetronicAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

MetronicAsset::register($this);
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="<?= Yii::$app->language?>" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="<?= Yii::$app->language?>" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="<?= Yii::$app->language?>"> <!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title><?= Html::encode($this->title)?> | LinzyCMS Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <?= Html::csrfMetaTags()?>
    <?php $this->head() ?>
    <?php if (isset($this->blocks['PageCss'])): ?>
        <?= $this->blocks['PageCss'] ?>
    <?php endif; ?>
</head>
<body class="login">
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
    <?php if (isset($this->blocks['PageJs'])): ?>
        <?= $this->blocks['PageJs'] ?>
    <?php endif; ?>
    <script>
//        jQuery(document).ready(function() {
//            Metronic.init(); // init metronic core componets
//            Layout.init(); // init layout
//            QuickSidebar.init() // init quick sidebar
//            Index.init();
//            Index.initDashboardDaterange();
//            Index.initJQVMAP(); // init index page's custom scripts
//            Index.initCalendar(); // init index page's custom scripts
//            Index.initCharts(); // init index page's custom scripts
//            Index.initChat();
//            Index.initMiniCharts();
//            Index.initIntro();
//            Tasks.initDashboardWidget();
//        });
    </script>
</body>
</html>
<?php $this->endPage() ?>
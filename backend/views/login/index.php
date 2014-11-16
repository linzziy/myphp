<?php
use lzsoft\metronic\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model common\models\LoginForm */

$this->title = '管理登录';
?>
<?php $this->beginBlock('PageCss'); ?>
    <link href="/assets/febe02d6/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/febe02d6/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<?php $this->endBlock(); ?>
<?php $this->beginBlock('PageJs'); ?>
    <script src="/assets/febe02d6/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/febe02d6/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/assets/febe02d6//global/plugins/select2/select2.min.js"></script>
    <script src="/assets/febe02d6/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            QuickSidebar.init(); // init quick sidebar
            //Demo.init(); // init demo features
            Login.init();
            // init background slide images
            $.backstretch([
                    "/assets/febe02d6/admin/pages/media/bg/1.jpg",
                    "/assets/febe02d6/admin/pages/media/bg/2.jpg",
                    "/assets/febe02d6/admin/pages/media/bg/3.jpg",
                    "/assets/febe02d6/admin/pages/media/bg/4.jpg"
                ], {
                    fade: 1000,
                    duration: 8000
                }
            );
        });
    </script>
<?php $this->endBlock(); ?>
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="/login">
        <img src="/assets/febe02d6/admin/layout/img/logo-big.png" alt=""/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">


<form class="login-form" action="/dashboard" method="post" ><h3 class="form-title">Login to your account</h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
			<span>
			请输入你的用户名和密码. </span>
    </div>

    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="input-icon">
            <i class="fa fa-user"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
        </div>
    </div>
    <div class="form-actions">
        <label class="checkbox">
            <input type="checkbox" name="remember" value="1"/> 记住我 </label>
        <button type="submit" class="btn blue pull-right">
            登录 <i class="m-icon-swapright m-icon-white"></i>
        </button>
    </div>
</form>
<!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    2014 &copy; Linzy Cms - Admin Dashboard.
</div>
<!-- END COPYRIGHT -->

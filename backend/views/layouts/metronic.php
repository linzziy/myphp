<?php
use backend\assets\MetronicAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

MetronicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title><?= Html::encode($this->title) ?> | LinzyCMS Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <?= Html::csrfMetaTags() ?>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!--<link href="../../../../../../fonts.googleapis.com/css@family=open+sans_3a400,300,600,700&subset=all.css" rel="stylesheet" type="text/css"/>-->
    <link href="/static/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/static/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/static/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/static/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="/static/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="/static/global/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="/static/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/static/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="/static/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
    <link href="/static/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico.jpg"/>
</head>
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="/dashboard">
                <img src="/static/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
            </a>

            <div class="menu-toggler sidebar-toggler">
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN HORIZANTAL MENU -->
        <!-- DOC: Remove "hor-menu-light" class to have a horizontal menu with theme background instead of white background -->
        <!-- DOC: This is desktop version of the horizontal menu. The mobile version is defined(duplicated) in the responsive menu below along with sidebar menu. So the horizontal menu has 2 seperate versions -->
        <div class="hor-menu hor-menu-light hidden-sm hidden-xs">
        </div>
        <!-- END HORIZANTAL MENU -->
        <!-- BEGIN HEADER SEARCH BOX -->
        <?php $this->beginContent('@app/views/layouts/_mega.php') ?>
        ###mega child layout
        <?php $this->endContent() ?>
        <!-- END HEADER SEARCH BOX -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar"
                    style="display: none;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <i class="icon-bell"></i>
					<span class="badge badge-default">
					7 </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <p>
                                You have 14 new notifications
                            </p>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                <li>
                                    <a href="#">
									<span class="label label-sm label-icon label-success">
									<i class="fa fa-plus"></i>
									</span>
                                        New user registered. <span class="time">
									Just now </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
                                        Server #12 overloaded. <span class="time">
									15 mins </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
                                        Server #2 not responding. <span class="time">
									22 mins </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
                                        Application error. <span class="time">
									40 mins </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
                                        Database overloaded 68%. <span class="time">
									2 hrs </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
                                        2 user IP blocked. <span class="time">
									5 hrs </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
									<span class="label label-sm label-icon label-warning">
									<i class="fa fa-bell-o"></i>
									</span>
                                        Storage Server #4 not responding. <span class="time">
									45 mins </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
									<span class="label label-sm label-icon label-info">
									<i class="fa fa-bullhorn"></i>
									</span>
                                        System Error. <span class="time">
									55 mins </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
									<span class="label label-sm label-icon label-danger">
									<i class="fa fa-bolt"></i>
									</span>
                                        Database overloaded 68%. <span class="time">
									2 hrs </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="external">
                            <a href="#">
                                See all notifications <i class="m-icon-swapright"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN ###!-->
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                       data-close-others="true">
                        <img alt="" class="img-circle hide1" src="/static/admin/layout/img/avatar3_small.jpg"/>
					<span class="username username-hide-on-mobile">
					Linzy </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <!-- [后续开发].用户登录信息 -->
                    <ul class="dropdown-menu" style="display: none;">
                        <li>
                            <a href="extra_profile.html">
                                <i class="icon-user"></i> My Profile </a>
                        </li>
                        <li>
                            <a href="page_calendar.html">
                                <i class="icon-calendar"></i> My Calendar </a>
                        </li>
                        <li>
                            <a href="inbox.html">
                                <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
                            </a>
                        </li>
                        <li>
                            <a href="page_todo.html">
                                <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
                            </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="extra_lock.html">
                                <i class="icon-lock"></i> Lock Screen </a>
                        </li>
                        <li>
                            <a href="/login/logout">
                                <i class="icon-key"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
                <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                    <a href="javascript:;" class="dropdown-toggle">
                        <i class="icon-logout"></i>
                    </a>
                </li>
                <!-- END QUICK SIDEBAR TOGGLER -->
            </ul>
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<div class="page-sidebar navbar-collapse collapse">
<!-- BEGIN SIDEBAR MENU1 -->
<?php $this->beginContent('@app/views/layouts/_sidebar.php'); ?>
###sidebar child layout
<?php $this->endContent(); ?>
<!-- END SIDEBAR MENU1 -->
<!-- BEGIN RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
<!-- _megaResponse.php setion -->
<!-- END RESPONSIVE MENU FOR HORIZONTAL & SIDEBAR MENU -->
</div>
</div>
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        Widget settings form goes here
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn blue">Save changes</button>
                        <button type="button" class="btn default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN STYLE CUSTOMIZER -->
        <!-- END STYLE CUSTOMIZER -->
        <!-- BEGIN PAGE HEADER-->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Page Layouts</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Horizontal & Sidebar Menu</a>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown"
                            data-hover="dropdown" data-delay="1000" data-close-others="true">
                        Actions <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <a href="#">Action</a>
                        </li>
                        <li>
                            <a href="#">Another action</a>
                        </li>
                        <li>
                            <a href="#">Something else here</a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="#">Separated link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <?= $content ?>
        <!-- END PAGE CONTENT-->
    </div>
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->
<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-close"></i></a>

<div class="page-quick-sidebar-wrapper">
<div class="page-quick-sidebar">
<div class="nav-justified">
<ul class="nav nav-tabs nav-justified">
    <li class="active">
        <a href="#quick_sidebar_tab_1" data-toggle="tab">
            Users <span class="badge badge-danger">2</span>
        </a>
    </li>
    <li>
        <a href="#quick_sidebar_tab_2" data-toggle="tab">
            Alerts <span class="badge badge-success">7</span>
        </a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            More<i class="fa fa-angle-down"></i>
        </a>
        <ul class="dropdown-menu pull-right" role="menu">
            <li>
                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-bell"></i> Alerts </a>
            </li>
            <li>
                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-info"></i> Notifications </a>
            </li>
            <li>
                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-speech"></i> Activities </a>
            </li>
            <li class="divider">
            </li>
            <li>
                <a href="#quick_sidebar_tab_3" data-toggle="tab">
                    <i class="icon-settings"></i> Settings </a>
            </li>
        </ul>
    </li>
</ul>
<div class="tab-content">
<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
    <h3 class="list-heading">Staff</h3>
    <ul class="media-list list-items">
        <li class="media">
            <div class="media-status">
                <span class="badge badge-success">8</span>
            </div>
            <img class="media-object" src="/static/admin/layout/img/avatar3.jpg" alt="...">

            <div class="media-body">
                <h4 class="media-heading">Bob Nilson</h4>

                <div class="media-heading-sub">
                    Project Manager
                </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="/static/admin/layout/img/avatar1.jpg" alt="...">

            <div class="media-body">
                <h4 class="media-heading">Nick Larson</h4>

                <div class="media-heading-sub">
                    Art Director
                </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="badge badge-danger">3</span>
            </div>
            <img class="media-object" src="/static/admin/layout/img/avatar4.jpg" alt="...">

            <div class="media-body">
                <h4 class="media-heading">Deon Hubert</h4>

                <div class="media-heading-sub">
                    CTO
                </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="/static/admin/layout/img/avatar2.jpg" alt="...">

            <div class="media-body">
                <h4 class="media-heading">Ella Wong</h4>

                <div class="media-heading-sub">
                    CEO
                </div>
            </div>
        </li>
    </ul>
    <h3 class="list-heading">Customers</h3>
    <ul class="media-list list-items">
        <li class="media">
            <div class="media-status">
                <span class="badge badge-warning">2</span>
            </div>
            <img class="media-object" src="/static/admin/layout/img/avatar6.jpg" alt="...">

            <div class="media-body">
                <h4 class="media-heading">Lara Kunis</h4>

                <div class="media-heading-sub">
                    CEO, Loop Inc
                </div>
                <div class="media-heading-small">
                    Last seen 03:10 AM
                </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="label label-sm label-success">new</span>
            </div>
            <img class="media-object" src="/static/admin/layout/img/avatar7.jpg" alt="...">

            <div class="media-body">
                <h4 class="media-heading">Ernie Kyllonen</h4>

                <div class="media-heading-sub">
                    Project Manager,<br>
                    SmartBizz PTL
                </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="/static/admin/layout/img/avatar8.jpg" alt="...">

            <div class="media-body">
                <h4 class="media-heading">Lisa Stone</h4>

                <div class="media-heading-sub">
                    CTO, Keort Inc
                </div>
                <div class="media-heading-small">
                    Last seen 13:10 PM
                </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="badge badge-success">7</span>
            </div>
            <img class="media-object" src="/static/admin/layout/img/avatar9.jpg" alt="...">

            <div class="media-body">
                <h4 class="media-heading">Deon Portalatin</h4>

                <div class="media-heading-sub">
                    CFO, H&D LTD
                </div>
            </div>
        </li>
        <li class="media">
            <img class="media-object" src="/static/admin/layout/img/avatar10.jpg" alt="...">

            <div class="media-body">
                <h4 class="media-heading">Irina Savikova</h4>

                <div class="media-heading-sub">
                    CEO, Tizda Motors Inc
                </div>
            </div>
        </li>
        <li class="media">
            <div class="media-status">
                <span class="badge badge-danger">4</span>
            </div>
            <img class="media-object" src="/static/admin/layout/img/avatar11.jpg" alt="...">

            <div class="media-body">
                <h4 class="media-heading">Maria Gomez</h4>

                <div class="media-heading-sub">
                    Manager, Infomatic Inc
                </div>
                <div class="media-heading-small">
                    Last seen 03:10 AM
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="page-quick-sidebar-item">
    <div class="page-quick-sidebar-chat-user">
        <div class="page-quick-sidebar-nav">
            <a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
        </div>
        <div class="page-quick-sidebar-chat-user-messages">
            <div class="post out">
                <img class="avatar" alt="" src="/static/admin/layout/img/avatar3.jpg"/>

                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Bob Nilson</a>
                    <span class="datetime">20:15</span>
											<span class="body">
											When could you send me the report ? </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="/static/admin/layout/img/avatar2.jpg"/>

                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Ella Wong</a>
                    <span class="datetime">20:15</span>
											<span class="body">
											Its almost done. I will be sending it shortly </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="/static/admin/layout/img/avatar3.jpg"/>

                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Bob Nilson</a>
                    <span class="datetime">20:15</span>
											<span class="body">
											Alright. Thanks! :) </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="/static/admin/layout/img/avatar2.jpg"/>

                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Ella Wong</a>
                    <span class="datetime">20:16</span>
											<span class="body">
											You are most welcome. Sorry for the delay. </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="/static/admin/layout/img/avatar3.jpg"/>

                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Bob Nilson</a>
                    <span class="datetime">20:17</span>
											<span class="body">
											No probs. Just take your time :) </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="/static/admin/layout/img/avatar2.jpg"/>

                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Ella Wong</a>
                    <span class="datetime">20:40</span>
											<span class="body">
											Alright. I just emailed it to you. </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="/static/admin/layout/img/avatar3.jpg"/>

                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Bob Nilson</a>
                    <span class="datetime">20:17</span>
											<span class="body">
											Great! Thanks. Will check it right away. </span>
                </div>
            </div>
            <div class="post in">
                <img class="avatar" alt="" src="/static/admin/layout/img/avatar2.jpg"/>

                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Ella Wong</a>
                    <span class="datetime">20:40</span>
											<span class="body">
											Please let me know if you have any comment. </span>
                </div>
            </div>
            <div class="post out">
                <img class="avatar" alt="" src="/static/admin/layout/img/avatar3.jpg"/>

                <div class="message">
                    <span class="arrow"></span>
                    <a href="#" class="name">Bob Nilson</a>
                    <span class="datetime">20:17</span>
											<span class="body">
											Sure. I will check and buzz you if anything needs to be corrected. </span>
                </div>
            </div>
        </div>
        <div class="page-quick-sidebar-chat-user-form">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type a message here...">

                <div class="input-group-btn">
                    <button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
<div class="page-quick-sidebar-alerts-list">
<h3 class="list-heading">General</h3>
<ul class="feeds list-items">
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-info">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                Just now
            </div>
        </div>
    </li>
    <li>
        <a href="#">
            <div class="col1">
                <div class="cont">
                    <div class="cont-col1">
                        <div class="label label-sm label-success">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                    </div>
                    <div class="cont-col2">
                        <div class="desc">
                            Finance Report for year 2013 has been released.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col2">
                <div class="date">
                    20 mins
                </div>
            </div>
        </a>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-danger">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 5 pending membership that requires a quick review.
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                24 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-info">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                30 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-success">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 5 pending membership that requires a quick review.
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                24 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-info">
                        <i class="fa fa-bell-o"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
													Overdue </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                2 hours
            </div>
        </div>
    </li>
    <li>
        <a href="#">
            <div class="col1">
                <div class="cont">
                    <div class="cont-col1">
                        <div class="label label-sm label-default">
                            <i class="fa fa-briefcase"></i>
                        </div>
                    </div>
                    <div class="cont-col2">
                        <div class="desc">
                            IPO Report for year 2013 has been released.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col2">
                <div class="date">
                    20 mins
                </div>
            </div>
        </a>
    </li>
</ul>
<h3 class="list-heading">System</h3>
<ul class="feeds list-items">
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-info">
                        <i class="fa fa-check"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 4 pending tasks. <span class="label label-sm label-warning ">
													Take action <i class="fa fa-share"></i>
													</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                Just now
            </div>
        </div>
    </li>
    <li>
        <a href="#">
            <div class="col1">
                <div class="cont">
                    <div class="cont-col1">
                        <div class="label label-sm label-danger">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                    </div>
                    <div class="cont-col2">
                        <div class="desc">
                            Finance Report for year 2013 has been released.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col2">
                <div class="date">
                    20 mins
                </div>
            </div>
        </a>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-default">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 5 pending membership that requires a quick review.
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                24 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-info">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        New order received with <span class="label label-sm label-success">
													Reference Number: DR23923 </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                30 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-success">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        You have 5 pending membership that requires a quick review.
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                24 mins
            </div>
        </div>
    </li>
    <li>
        <div class="col1">
            <div class="cont">
                <div class="cont-col1">
                    <div class="label label-sm label-warning">
                        <i class="fa fa-bell-o"></i>
                    </div>
                </div>
                <div class="cont-col2">
                    <div class="desc">
                        Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
													Overdue </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col2">
            <div class="date">
                2 hours
            </div>
        </div>
    </li>
    <li>
        <a href="#">
            <div class="col1">
                <div class="cont">
                    <div class="cont-col1">
                        <div class="label label-sm label-info">
                            <i class="fa fa-briefcase"></i>
                        </div>
                    </div>
                    <div class="cont-col2">
                        <div class="desc">
                            IPO Report for year 2013 has been released.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col2">
                <div class="date">
                    20 mins
                </div>
            </div>
        </a>
    </li>
</ul>
</div>
</div>
<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
    <div class="page-quick-sidebar-settings-list">
        <h3 class="list-heading">General Settings</h3>
        <ul class="list-items borderless">
            <li>
                Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small"
                                            data-on-color="success" data-on-text="ON" data-off-color="default"
                                            data-off-text="OFF">
            </li>
            <li>
                Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info"
                                      data-on-text="ON" data-off-color="default" data-off-text="OFF">
            </li>
            <li>
                Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger"
                                  data-on-text="ON" data-off-color="default" data-off-text="OFF">
            </li>
            <li>
                Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning"
                                          data-on-text="ON" data-off-color="default" data-off-text="OFF">
            </li>
            <li>
                Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small"
                                         data-on-color="success" data-on-text="ON" data-off-color="default"
                                         data-off-text="OFF">
            </li>
        </ul>
        <h3 class="list-heading">System Settings</h3>
        <ul class="list-items borderless">
            <li>
                Security Level
                <select class="form-control input-inline input-sm input-small">
                    <option value="1">Normal</option>
                    <option value="2" selected>Medium</option>
                    <option value="e">High</option>
                </select>
            </li>
            <li>
                Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
            </li>
            <li>
                Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
            </li>
            <li>
                Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small"
                                              data-on-color="danger" data-on-text="ON" data-off-color="default"
                                              data-off-text="OFF">
            </li>
            <li>
                Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small"
                                            data-on-color="warning" data-on-text="ON" data-off-color="default"
                                            data-off-text="OFF">
            </li>
        </ul>
        <div class="inner-content">
            <button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
        2014 &copy; Metronic by keenthemes.
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/static\global\plugins\respond.min.js"></script>
<script src="/static\global\plugins\excanvas.min.js"></script>
<![endif]-->
<script src="/static\global\plugins\jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/static\global\plugins\jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/static\global\plugins\jquery-ui\jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/static\global\plugins\bootstrap\js\bootstrap.min.js" type="text/javascript"></script>
<script src="/static\global\plugins\bootstrap-hover-dropdown\bootstrap-hover-dropdown.min.js"
        type="text/javascript"></script>
<script src="/static\global\plugins\jquery-slimscroll\jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/static\global\plugins\jquery.blockui.min.js" type="text/javascript"></script>
<script src="/static\global\plugins\jquery.cokie.min.js" type="text/javascript"></script>
<script src="/static\global\plugins\uniform\jquery.uniform.min.js" type="text/javascript"></script>
<script src="/static\global\plugins\bootstrap-switch\js\bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="/static\global\scripts\metronic.js" type="text/javascript"></script>
<script src="/static\admin\layout\scripts\layout.js" type="text/javascript"></script>
<script src="/static\admin\layout\scripts\quick-sidebar.js" type="text/javascript"></script>
<script src="/static\admin\layout\scripts\demo.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        QuickSidebar.init(); // init quick sidebar
        Demo.init(); // init demo features
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php $this->endPage(); ?>

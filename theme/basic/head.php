<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<!-- Nav Bar -->
<div class="dsn-nav-bar">
    <div class="site-header">
        <div class="extend-container">
            <div class="inner-header">
                <div class="main-logo">
                    <a href="index.html">
                        <img class="dark-logo" src="assets/img/logo_b.png" alt="" />
                        <img class="light-logo" src="assets/img/logo_w.png" alt="" />
                    </a>
                </div>
            </div>
            <nav class=" accent-menu main-navigation">
                <ul class="extend-container">
                    <li class="custom-drop-down">
                        <a href="/">Home</a>
                        <!-- <ul>
                            <li><a href="index.html">Main Demo</a></li>
                            <li><a href="one-page-3.html">One Page Three</a></li>
                            <li><a href="one-page-4.html">One Page Four</a></li>
                        </ul> -->
                    </li>
                    <!-- <li class="custom-drop-down">
                        <a href="#">Slider</a>
                        <ul>
                            <li><a href="slider.html">Slider</a></li>
                            <li><a href="slider2.html">Slider two</a></li>
                            <li><a href="slider3.html">Slider Three</a></li>
                        </ul>
                    </li> -->
                    <!-- <li><a href="about.html">Portfolio</a></li> -->
                    <li class="custom-drop-down">
                        <a href="#">Portfolio</a>
                        <ul style="display:block;">
                            <li><a href="/?p=work">홍보영상</a></li>
                            <li><a href="/?p=work">인터뷰 소개</a></li>
                            <li><a href="/?p=work">현장스케치</a></li>
                            <li><a href="/?p=work">브이로그</a></li>
                            <li><a href="/?p=work">유튜브 콘텐츠</a></li>
                        </ul>
                    </li>
                    <!-- <li class="custom-drop-down">
                        <a href="#">Location</a>
                        <ul>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="post.html">Single Post</a></li>
                        </ul>
                    </li> -->
                    <li><a href="/?p=contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header-top header-top-hamburger">
        <div class="header-container">
            <div class="logo main-logo">
                <a href="/">
                    <img class="dark-logo" src="assets/img/logo_b.png" alt="" />
                    <img class="light-logo" src="assets/img/logo_w.png" alt="" />
                </a>
            </div>

            <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
                <div class="icon-m">
                    <i class="menu-icon-close fas fa-times"></i>
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>

                <div class="text-menu">
                    <div class="text-button">Menu</div>
                    <div class="text-open">Open</div>
                    <div class="text-close">Close</div>
                </div>
            </div>

            <div class="nav">
                <div class="inner">
                    <div class="nav__content">

                    </div>
                </div>
            </div>
            <div class="nav-content">
                <div class="inner-content">
                    <address class="v-middle">
                        <span>메이크 프로덕션(MAKE PRODUCTION)</span>
                        <span>충남 공주시 감영길 9</span>
                        <span>010-5120-6024</span>
                    </address>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Nav Bar -->


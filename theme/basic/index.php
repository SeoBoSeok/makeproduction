<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main class="main-root">
    <div id="dsn-scrollbar">
        <header>
            <div class="header-hero header-hero-2" data-dsn-header="project">
                <div id="descover-holder" class="bg-circle-dotted"></div>

                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-12">
                            <div class="contenet-hero">
                                <!-- <h1>MADE BY MAKE<br> PRODUCTION</h1> -->
                                <h1><img src="assets/img/main_typo.png" alt="" /></h1>
                                <!-- <p>메이크프로덕션에서는 클라이언트의 고민을 이해하고<br />함께 고민하여 솔루션을 제시하는 콘텐츠 제작업체입니다.</p> -->
                                <span><a href="#" class="view-case scroll-down">어떤 영상이 필요하세요?</a></span>
                                    <!-- <img src="assets/img/arrow-right-dark.png" alt=""></a> -->
                            </div>
                            <ul class="contenet-hero__list">
                                <li><a class="underline" href="/?p=work&category=ad">홍보영상</a></li>
                                <li><a class="underline" href="/?p=work&category=docu">미니다큐</a></li>
                                <li><a class="underline" href="/?p=work&category=sketch">현장스케치</a></li>
                                <li><a class="underline" href="/?p=work&category=vlog">브이로그</a></li>
                                <li><a class="underline" href="/?p=work&category=contents">콘텐츠</a></li>
                                <li><a class="underline" href="/?p=work&category=education">교육영상</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <section class="work-under-header" data-dsn-col="2">
                <div class="container">
                    <div class="custom-container">
                        <div class="row">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="work-container">
                                    <div class="slick-slider">
                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom" src="assets/img/ct_promo2.jpg"
                                                alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="/?p=work&category=ad" data-dsn-grid="move-up"
                                                    class="">

                                                    <h5 class="cat">영상</h5>
                                                    <h4>홍보영상</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom" src="assets/img/ct_interview.jpg"
                                                alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="/?p=work&category=docu" data-dsn-grid="move-up"
                                                    class="">

                                                    <h5 class="cat">영상</h5>
                                                    <h4>미니다큐</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>

                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom" src="assets/img/ct_work.jpg"
                                                alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="/?p=work&category=sketch" data-dsn-grid="move-up"
                                                    class="">

                                                    <h5 class="cat">영상</h5>
                                                    <h4>현장스케치</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>

                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom" src="assets/img/ct_vl.jpg"
                                                alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="/?p=work&category=vlog" data-dsn-grid="move-up"
                                                    class="">

                                                    <h5 class="cat">영상</h5>
                                                    <h4>브이로그</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>

                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom" src="assets/img/ct_yt2.jpg"
                                                alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="/?p=work&category=contents" data-dsn-grid="move-up"
                                                    class="">

                                                    <h5 class="cat">영상</h5>
                                                    <h4>콘텐츠</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>

                                        <div class="work-item slick-slide">
                                            <img class="has-top-bottom" src="assets/img/education.jpg"
                                                alt="">
                                            <div class="item-border"></div>
                                            <div class="item-info">
                                                <a href="/?p=work&category=education" data-dsn-grid="move-up"
                                                    class="">

                                                    <h5 class="cat">영상</h5>
                                                    <h4>교육영상</h4>
                                                    <span><span>Veiw Project</span></span>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="our-services-2 section-margin">
                <div class="container">
                    <div class="one-title" data-dsn-animate="up">
                        <div class="title-sub-container">
                            <p class="title-sub">WE MAKE</p>
                        </div>
                        <h2 class="title-main">MADE BY MAKE</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="services-item">
                                <div class="corner corner-top"></div>
                                <!-- <div class="corner corner-bottom"></div> -->
                                <div class="icon">
                                    <img src="assets/img/con_1.png" alt="">
                                </div>
                                <div class="services-header">
                                    <h3>SOLUTION</h3>
                                </div>
                                <p>명확한 솔루션으로 고객의 니즈를 해결합니다. 홍보에 관련된 전반적인 것을 해결해 드리기 위해 촬영감독, 작가, 디자이너가 함께 만들어갑니다.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="services-item selected">
                                <!-- <div class="corner corner-top"></div> -->
                                <!-- <div class="corner corner-bottom"></div> -->
                                <div class="icon">
                                    <img src="assets/img/con_2.png" alt="">
                                </div>
                                <div class="services-header">
                                    <h3>PLAN</h3>
                                </div>
                                <p>체계적인 기획으로 창의적인 콘텐츠를 만듭니다. 그리고 지역을 기반으로 글로벌 시작에 대응할 수 있도록 다양한 분야에 도전하고 있습니다.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="services-item">
                                <!-- <div class="corner corner-top"></div> -->
                                <div class="corner corner-bottom"></div>
                                <div class="icon">
                                    <img src="assets/img/con_3.png" alt="">
                                </div>
                                <div class="services-header">
                                    <h3>STORY</h3>
                                </div>
                                <p>글로벌 시대에 맞는 미디어 개발을 합니다. 전문적인 스토리텔링으로 영상으로 표현하기 힘든 추상적인 과업들도 끊임없이 도전합니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="box-seat">
                <div class="dsn-v-text new-history">
                    <div class="container-fluid">
                        <div class="box-middle-text">
                            <h2 data-dsn-animate="text" style="color: #fff;margin:10px 0px;">Design new history</h2>
                            <p data-dsn-animate="text" style="color: #fff; font-size: 1rem; line-height:1.1;">
                            메이크 프로덕션은 고객님이 원하시는 홍보영상을 명확하게 표현할 수 있도록 기획서를 기반으로 높은 퀄리티를 만들어나갑니다.</p>
                            <a href="https://www.youtube.com/watch?v=wfyxpslYCMs&feature=emb_logo" class="vid">
                                <div class="play-button">
                                    <div class="play-btn">
                                        <i class="fas fa-play"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="inner-img" data-dsn-grid="move-up" data-overlay="9">
                            <img class="has-top-bottom" src="assets/img/video_back.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <section class="intro-about section-margin" data-dsn="color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6" style="z-index: 2;">
                            <div class="intro-content-text">

                                <h2>
                                    Hello we are, <br /> MAKE PRODUCTION
                                </h2>

                                <p data-dsn-animate="up">
                                정보의 보편성으로 기술은 누구나 가질 수 있습니다.
                                하지만 우리는 문제를 찾고 원하는 시기에 원하는 결과를 가질 수 있도록
                                만들어 주는 역할을 합니다. 그리하여 공공기관과 다양한 주식회사들과
                                함께 다양한 결과물을 만들어왔습니다. 홍보관련 업무를 한번에 진행할 수 있기 때문에
                                다른 여러 업체를 통해 번거로운 작업을 하지 않고,
                                메이크에서 포스터, 책디자인, 홍보영상, 교육영상등
                                다양한 미디어 홍보물을 손쉽게 만들어보세요.
                                </p>

                                <h6 data-dsn-animate="text">WE MAKE STORY</h6>
                                <small data-dsn-animate="text" style="margin-bottom: 10px;">통통튀는 아이디어로 새로운 경험을 드리겠습니다</small>

                                <div class="exper">
                                    <div class="numb-ex">
                                        <!-- <span class="word" data-dsn-animate="text">NEW</span> -->
                                        <img class="new_img" src="assets/img/new_off.png" alt="" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="background-mask">
                    <div class="background-mask-bg"></div>
                    <div class="img-box">
                        <div class="img-cent" data-dsn-grid="move-up">
                            <div class="img-container">
                                <img data-dsn-y="30%" src="assets/img/making_flim.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="brand-client section-margin">
                <div class="container">
                    <div class="one-title" data-dsn-animate="up">
                        <div class="title-sub-container">
                            <p class="title-sub">WE MAKE STORY</p>
                        </div>
                        <h2 class="title-main">PRODUCTION SYSTEM</h2>
                        <p>
                            제작 시스템 과정에 대한 자체역량을 보유하고 있어 외주의 외주가 없습니다. 기획, 촬영, 포스트프로덕션을 
                            포함한 모든 과정을 효율적이고 합리적인 비용으로 솔루션을 제시합니다.
                        </p>
                    </div>

                    <div class="wapper-client">
                        <div class="logo-box">
                            <img class="process_img" data-index="1" src="assets/img/process_1w.png" alt="">
                            <img class="process_anchor" src="assets/img/pd_arrow_b2.png" alt="anchor" />
                            <!-- <div class="info">
                                <div class="content">
                                    <div class="icon">
                                        <i class="fas fa-plus"></i>
                                    </div>

                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <div class="logo-box">
                            <img class="process_img" data-index="2" src="assets/img/process_2w.png" alt="">
                            <img class="process_anchor" src="assets/img/pd_arrow_b2.png" alt="anchor" />
                            <!-- <div class="info">
                                <div class="content">
                                    <div class="icon">
                                        <i class="fas fa-plus"></i>
                                    </div>

                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <div class="logo-box">
                            <img class="process_img" data-index="3" src="assets/img/process_3w.png" alt="">
                            <img class="process_anchor" src="assets/img/pd_arrow_b2.png" alt="anchor" />

                            <!-- <div class="info">
                                <div class="content">
                                    <div class="icon">
                                        <i class="fas fa-plus"></i>
                                    </div>

                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <div class="logo-box">
                            <img class="process_img" data-index="4" src="assets/img/process_4w.png" alt="">
                            <img class="process_anchor" src="assets/img/pd_arrow_b2.png" alt="anchor" />

                            <!-- <div class="info">
                                <div class="content">
                                    <div class="icon">
                                        <i class="fas fa-plus"></i>
                                    </div>

                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <div class="logo-box">
                            <img class="process_img" data-index="5" src="assets/img/process_5w.png" alt="">
                            <img class="process_anchor" src="assets/img/pd_arrow_b2.png" alt="anchor" />

                            <!-- <div class="info">
                                <div class="content">
                                    <div class="icon">
                                        <i class="fas fa-plus"></i>
                                    </div>

                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <div class="logo-box">
                            <img class="process_img" data-index="6" src="assets/img/process_6w.png" alt="">

                            <!-- <div class="info">
                                <div class="content">
                                    <div class="icon">
                                        <i class="fas fa-plus"></i>
                                    </div>

                                    <div class="entry">
                                        <div>
                                            <h5>Google</h5>
                                            <a href="#">www.google.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- <div class="box-gallery-vertical box-gallery-vertical-order section-margin section-padding">
                <div class="mask-bg"></div>
                <div class="container">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-6">
                            <div class="box-im" data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="assets/img/project/project9/7.jpg" alt=""
                                    data-dsn-move="20%">
                            </div>
                        </div>

                        <div class="col-lg-6">


                            <div class="box-info">

                                <div class="vertical-title" data-dsn-animate="up">
                                    <h2>Time Tag Watch.</h2>
                                </div>

                                <h6 data-dsn-animate="up">Sometimes, we need to check the time, wondering when our
                                    work
                                    or meeting will finish, without getting caught by others.</h6>

                                <p data-dsn-animate="up">To avoid your boss’s
                                    staring eye, you should not roll your eyes to check the time. The Time Tag Watch
                                    is
                                    a consummately appropriate for it.
                                    Those tags do the role of the hands of the watch. By rotating the face of the
                                    watch
                                    not the hands, it gets harder to be damaged. It provides you with experience to
                                    feel
                                    the time at the end of your finger without damaging your watch.</p>

                                <div class="link-custom" data-dsn-animate="up">
                                    <a class="image-zoom effect-ajax" href="project-9.html" data-dsn="parallax">
                                        <span>Learn More</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->

            <section class="our-team our-team-not-bg section-margin section-padding">
                <div class="container">
                    <div class="one-title">
                        <div class="title-sub-container">
                            <p class="title-sub">our team</p>
                        </div>
                        <h2 class="title-main">The best team ever!</h2>
                    </div>

                    <div class="custom-container">
                        <div class="slick-slider">
                            <div class="team-item slick-slide">
                                <div class="box-img">
                                    <img src="assets/img/profile_01.jpg" alt="">
                                </div>

                                <div class="box-content">
                                    <h4>송국진</h4>
                                    <p>CEO</p>
                                </div>
                            </div>

                            <div class="team-item slick-slide">
                                <div class="box-img">
                                    <img src="assets/img/profile_02.jpg" alt="">
                                </div>

                                <div class="box-content">
                                    <h4>옹아름</h4>
                                    <p>팀장 (기획, 마케팅)</p>
                                </div>
                            </div>

                            <div class="team-item slick-slide">
                                <div class="box-img">
                                    <img src="assets/img/profile_03.jpg" alt="">
                                </div>

                                <div class="box-content">
                                    <h4>유진</h4>
                                    <p>디자이너</p>
                                </div>
                            </div>

                            <div class="team-item slick-slide">
                                <div class="box-img">
                                    <img src="assets/img/member4.jpg" alt="">
                                </div>

                                <div class="box-content">
                                    <h4>신승철</h4>
                                    <p>Assistant Director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact-up section-margin section-padding">
                <div class="container">
                    <div class="c-wapp">
                        <a href="/?p=contact" class="effect-ajax">
                            <span class="hiring">
                                WHERE WE ARE
                            </span>
                            <span class="career">
                                CONTACT
                            </span>
                        </a>
                    </div>
                </div>
            </section>

        </div>
        <footer class="footer">
            <div class="container">
                <div class="footer-links p-relative">
                    <div class="row">
                        <div class="col-md-3 dsn-col-footer">
                            <div class="footer-block">
                                <div class="footer-logo">
                                    <a href=""><img src="assets/img/logo_b.png" alt=""></a>
                                </div>

                                <div class="footer-social">

                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    <h5 class="" style="margin-top: 10px;">사업자등록번호</h5>
                                    <p>202-10-55167</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 dsn-col-footer">
                            <div class="footer-block col-menu">
                                <h4 class="footer-title">Navigation</h4>
                                <nav>
                                    <ul>
                                        <li><a href="/">HOME</a></li>
                                        <li><a href="/?p=work">PORTFOLIO</a>
                                        </li>
                                        <!-- <li><a href="#">LOCATION</a></li> -->
                                        <li><a href="/?p=contact">CONTACT</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-md-3 dsn-col-footer">
                            <div class="footer-block col-contact">
                                <h4 class="footer-title">Contact</h4>
                                <p><strong>T</strong> <span>:</span><a class="link-hover"
                                        data-hover-text="010-5120-6024" href="tel:010-5120-6024" style="width:200px;">010-5120-6024</a></p>
                                <!-- <p><strong>F</strong> <span>:</span>+001 225 3351</p> -->
                                <p class="over-hidden"><strong>E</strong> <span>:</span><a class="link-hover"
                                        data-hover-text="info@dsngrid.com" href="mailto:miraedostudio@gmail.com">miraedostudio@gmail.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3 dsn-col-footer">
                            <div class="col-address">
                                <h4 class="footer-title">Address</h4>

                                <p><a href="https://map.kakao.com/link/to/메이크프로덕션,36.4528689,127.1223874" target="_blank">충남 공주시 감영길 9</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright">
                    <div class="text-center">
                        <p>© 2020 MAKE PRODUCTION</p>
                        <div class="copright-text over-hidden">Designed by <a class="link-hover"
                                data-hover-text="DSN Grid" href="#" target="_blank">PAM FOREST</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>

<!-- Wait Loader -->
<div class="wait-loader">
    <div class="loader-inner">
        <div class="loader-circle">
            <div class="loader-layer"></div>
        </div>
    </div>
</div>
<!-- // Wait Loader -->

<!-- cursor -->
<div class="cursor">

    <div class="cursor-helper cursor-view">
        <span>VIEW</span>
    </div>

    <div class="cursor-helper cursor-close">
        <span>Close</span>
    </div>

    <div class="cursor-helper cursor-link"></div>
</div>
<!-- End cursor -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/dsn-grid.js"></script>
<script src="assets/js/custom.js"></script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
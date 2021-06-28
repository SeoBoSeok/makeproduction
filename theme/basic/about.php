<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head-new.php');
?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.knightlab.com/libs/juxtapose/latest/css/juxtapose.css">
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<div class="wrap">
		<!-- <a class="skip-link screen-reader-text" href="#content">Skip to content</a> -->

    <?php
      include_once(G5_THEME_PATH.'/header_part.php');
    ?>
		<div class="site-content-contain">

			<div id="content" class="site-content">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<article id="post-2" class="post-2 page type-page status-publish hentry">
							<div class="entry-content">

                <div class="container-fluid pd0">
                  <!-- <img src="/assets/img/new/about_back.png" alt="메이크프로덕션" /> -->
                  <div class="about__title--wrapper">
                    <div class="inner">
                      <div class="about__title--item">
                        <img src="/assets/img/new/about-typo.png" alt="메이크프로덕션" />
                      </div>
                      <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="about__image--item">
                              <!-- <img src="/assets/img/new/befor.png" alt="메이크프로덕션" style="clip: rect(0px, 414px, 568px, 0px);" /> -->
                              <!-- <img src="/assets/img/new/after.png" alt="메이크프로덕션" style="clip: rect(0px, 1100px, 568px, 414px);" />
                              <img src="/assets/img/new/after-arw.png" alt="메이크프로덕션" id="after-arw" /> -->
                              <div class="juxtapose">
                                  <img src="/assets/img/new/befor.png" />
                                  <img src="/assets/img/new/after.png" />
                              </div>
                              <script src="https://cdn.knightlab.com/libs/juxtapose/latest/js/juxtapose.min.js"></script>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
							</div>

              <div class="container-fluid pd0" id="about_third">
                <div class="container">
                  <div class="slick__wrapper">
                    <div class="slick__item">
                      <video muted autoplay loop>
                          <source src="https://makeproduction.s3.ap-northeast-2.amazonaws.com/section4-bg-video.mp4" type="video/mp4">
                          <strong>Your browser does not support the video tag.</strong>
                      </video>
                      <!-- <img src="/assets/img/new/eq-image01.jpg" alt="메이크프로덕션" /> -->
                      <!-- <img src="/assets/img/new/eq-content01.png" class="image__wrapper" alt="메이크프로덕션" /> -->
                    </div>
                    <!-- <div class="slick__item"> -->
                      <!-- <img src="/assets/img/new/eq-image02.jpg" alt="메이크프로덕션" /> -->
                      <!-- <img src="/assets/img/new/eq-content021.png" class="image__wrapper" alt="메이크프로덕션" /> -->
                    <!-- </div> -->
                  </div>
                  <div class="container" id="equipments">
                    <div class="row">
                      <div class="col col-xs-6 col-sm-3 col-lg-3 col-md-3">
                        <div class="equiment__item">
                          <img src="/assets/img/new/simbol-01.png" alt="메이크프로덕션" />
                        </div>
                      </div>
                      <div class="col col-xs-6 col-sm-3 col-lg-3 col-md-3">
                        <div class="equiment__item">
                          <img src="/assets/img/new/simbol-02.svg" alt="메이크프로덕션" />
                        </div>
                      </div>
                      <div class="col col-xs-6 col-sm-3 col-lg-3 col-md-3">
                        <div class="equiment__item">
                          <img src="/assets/img/new/simbol-03.png" alt="메이크프로덕션" />
                        </div>
                      </div>
                      <div class="col col-xs-6 col-sm-3 col-lg-3 col-md-3">
                        <div class="equiment__item">
                          <img src="/assets/img/new/simbol-04.png" alt="메이크프로덕션" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <section class="our-team section-margin section-padding" id="teamMember">
                    <div class="container">
                        <div class="custom-container">
                            <div class="slick-slider">
                                <div class="team-item slick-slide">
                                    <div class="box-img">
                                        <img src="/assets/img/new/profile01.png" alt="">
                                    </div>
                                    <div class="caption__wrapper">
                                      <h2 class="title">SONG GUK JIN</h2>
                                      <p>CEO</p>
                                      <div class="cont">체계적인 기획으로 창의적인<br>콘텐츠를 만들어내는<br />프로덕션</div>
                                    </div>
                                    
                                </div>

                                <div class="team-item slick-slide">
                                    <div class="box-img">
                                        <img src="/assets/img/new/profile03.png" alt="">
                                    </div>
                                    <div class="caption__wrapper">
                                      <h2 class="title">ONG A REUM</h2>
                                      <p>팀장 (마케팅/기획)</p>
                                      <div class="cont">보이는 것과 보아야할 것 사이에서<br>완벽함을 추구</div>
                                    </div>	
                                   
                                </div>

                                <div class="team-item slick-slide">
                                    <div class="box-img">
                                        <img src="/assets/img/new/profile02.png" alt="">
                                    </div>
                                    <div class="caption__wrapper left">
                                      <h2 class="title">SONG YU JIN</h2>
                                      <p>Designer</p>
                                      <div class="cont">열정과 아이디어로<br>소통을 디자인하다</div>
                                    </div>	  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
						</article>
					</main>
				</div>

			</div><!-- #content -->
		</div><!-- .site-content-contain -->
	</div><!-- #page -->

  <?php
    include_once(G5_THEME_PATH.'/footer_part.php');
  ?>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/dsn-grid.js"></script>
<script src="/assets/js/custom.js"></script>
<script>
setTimeout(function() {
  document.querySelector('.pre-loader').style.display = "none";
}, 500);

// $(document).ready(function(){
//   var controller = new ScrollMagic.Controller();
//   // define movement of panels
//   var wipeAnimation = new TimelineMax()
//     .fromTo("section.panel.team2", 1, {x: "-100%"}, {x: "0%", autoAlpha: 1, ease: Linear.easeNone})  // in from left
//     .fromTo("section.panel.team3", 1, {x:  "100%"}, {x: "0%", autoAlpha: 1, ease: Linear.easeNone})  // in from right
//     .fromTo("section.panel.team4", 1, {y: "-100%"}, {y: "0%", autoAlpha: 1, ease: Linear.easeNone}); // in from top
//   // create scene to pin and link animation
//   new ScrollMagic.Scene({
//       triggerElement: "#pinContainer",
//       triggerHook: "onLeave",
//       duration: "1000%"
//     })
//     .setPin("#pinContainer")
//     .setTween(wipeAnimation)
//     //.addIndicators() // add indicators (requires plugin)
//     .addTo(controller);
// });

$('.slick__wrapper').slick({
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  // prevArrow: '<img class="slick__make slick__make--left" src="/assets/img/new/con_arw_l.png" alt="메이크프로덕션" />',
  // nextArrow: '<img class="slick__make slick__make--right" src="/assets/img/new/con_arw_r.png" alt="메이크프로덕션" />'
});

</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
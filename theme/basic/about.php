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
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

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
                    <div class="inner poheight">
                      <div class="about__title--item">
                        <img src="/assets/img/new/about-typo.png" alt="메이크프로덕션" />
                      </div>
                      <div class="about__image--item">
                        <!-- <img src="/assets/img/new/befor.png" alt="메이크프로덕션" style="clip: rect(0px, 414px, 568px, 0px);" /> -->
                        <!-- <img src="/assets/img/new/after.png" alt="메이크프로덕션" style="clip: rect(0px, 1100px, 568px, 414px);" />
                        <img src="/assets/img/new/after-arw.png" alt="메이크프로덕션" id="after-arw" /> -->
                        <div class="juxtapose">
                            <img src="/assets/img/new/befor.png" />
                            <img src="/assets/img/new/after.png" />
                        </div>
                        <script src="https://cdn.knightlab.com/libs/juxtapose/latest/js/juxtapose.min.js"></script>
                        <link rel="stylesheet" href="https://cdn.knightlab.com/libs/juxtapose/latest/css/juxtapose.css">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <section class="inner" id="about_second">
                  <div class="about__items">
                    <div class="about__items--box">
                      <div class="about__detail">
                        <div class="about__detail--title">
                          기획영상
                        </div>
                        <div class="about__detail--sub">
                          현장스케치/인터뷰/홍보영상
                        </div>
                        <div class="about__detail--contents">
                          크리에이티브의 퀄리티와 속도를 동시에 만족시킵니다.
                          크리에이티브에 대한 고민은 우리 전문가들에게 맡기세요.
                        </div>
                      </div>
                    </div>
                    <div class="about__items--box">
                    <div class="about__detail--title">
                          광고영상
                        </div>
                        <div class="about__detail--sub">
                          바이럴/DID광고
                        </div>
                        <div class="about__detail--contents">
                          올인원 체제 안에서 모든 파트간의
                          가장 극대화된 효율지점을 찾아
                          최적화된 광고제작 시스템의 완성을 이룹니다.
                        </div>
                    </div>
                    <div class="about__items--box">
                      <div class="about__detail--title">
                          스트리밍 송출
                        </div>
                        <div class="about__detail--sub">
                          행사영상 송출
                        </div>
                        <div class="about__detail--contents">
                          다양한 이벤트를 위한 방송급 동영상
                          환경을 제공. 여러분의 콘텐츠를 스트리밍이나
                          VOD를 통해 라이브로 신속하고 안전하게 제공할 수 있습니다.
                        </div>
                    </div>
                  </div>
                </section> -->

							</div>

              <div class="container-fluid pd0" id="about_third">
                <div class="inner">
                  <div class="slick__wrapper">
                    <div class="slick__item">
                      <video muted autoplay loop>
                          <source src="/assets/videos/section4-bg-video.mp4" type="video/mp4">
                          <strong>Your browser does not support the video tag.</strong>
                      </video>
                      <!-- <img src="/assets/img/new/eq-image01.jpg" alt="메이크프로덕션" /> -->
                      <!-- <img src="/assets/img/new/eq-content01.png" class="image__wrapper" alt="메이크프로덕션" /> -->
                    </div>
                    <div class="slick__item">
                      <!-- <img src="/assets/img/new/eq-image02.jpg" alt="메이크프로덕션" /> -->
                      <!-- <img src="/assets/img/new/eq-content021.png" class="image__wrapper" alt="메이크프로덕션" /> -->
                    </div>
                  </div>
                  <div class="equiment__list">
                    <div class="equiment__item">
                      <img src="/assets/img/new/simbol-01.png" alt="메이크프로덕션" />
                    </div>
                    <div class="equiment__item">
                      <img src="/assets/img/new/simbol-02.svg" alt="메이크프로덕션" />
                    </div>
                    <div class="equiment__item">
                      <img src="/assets/img/new/simbol-03.png" alt="메이크프로덕션" />
                    </div>
                    <div class="equiment__item">
                      <img src="/assets/img/new/simbol-04.png" alt="메이크프로덕션" />
                    </div>
                  </div>
                </div>
              </div>
              <section class="demo" id="section-wipes">

                <div class="container-fluid pd0" id="pinContainer">
                  <section class="panel img1 team1">						
                    <div class="container caption">
                      <div class="row align-items-center">
                        <div class="container caption">
                          <div class="row align-items-center">
                            <div class="col-lg-12">	
                              <div class="caption__wrapper">
                                <h2 class="title">SONG GUK JIN</h2>
                                <p>CEO</p>
                                <div class="cont">체계적인 기획으로 창의적인<br>콘텐츠를 만들어내는<br />프로덕션</div>
                              </div>								
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="panel img2 team2">						
                    <div class="container caption">
                      <div class="row align-items-center">
                      <div class="container caption">
                          <div class="row align-items-center">
                            <div class="col-lg-12">	
                              <div class="caption__wrapper">
                                <h2 class="title">ONG A REUM</h2>
                                <p>팀장 (마케팅/기획)</p>
                                <div class="cont">보이는 것과 보아야할 것 사이에서<br>완벽함을 추구</div>
                              </div>								
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                  <section class="panel img3 team3">						
                    <div class="container caption">
                      <div class="row align-items-center">
                      <div class="container caption">
                          <div class="row align-items-center">
                            <div class="col-lg-12">	
                              <div class="caption__wrapper left">
                                <h2 class="title">SONG YU JIN</h2>
                                <p>Designer</p>
                                <div class="cont">열정과 아이디어로<br>소통을 디자인하다</div>
                              </div>								
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
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

$(document).ready(function(){
  var controller = new ScrollMagic.Controller();
  // define movement of panels
  var wipeAnimation = new TimelineMax()
    .fromTo("section.panel.team2", 1, {x: "-100%"}, {x: "0%", autoAlpha: 1, ease: Linear.easeNone})  // in from left
    .fromTo("section.panel.team3", 1, {x:  "100%"}, {x: "0%", autoAlpha: 1, ease: Linear.easeNone})  // in from right
    .fromTo("section.panel.team4", 1, {y: "-100%"}, {y: "0%", autoAlpha: 1, ease: Linear.easeNone}); // in from top
  // create scene to pin and link animation
  new ScrollMagic.Scene({
      triggerElement: "#pinContainer",
      triggerHook: "onLeave",
      duration: "1000%"
    })
    .setPin("#pinContainer")
    .setTween(wipeAnimation)
    //.addIndicators() // add indicators (requires plugin)
    .addTo(controller);
});

$('.slick__wrapper').slick({
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  prevArrow: '<img class="slick__make slick__make--left" src="/assets/img/new/con_arw_l.png" alt="메이크프로덕션" />',
  nextArrow: '<img class="slick__make slick__make--right" src="/assets/img/new/con_arw_r.png" alt="메이크프로덕션" />'
});

</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
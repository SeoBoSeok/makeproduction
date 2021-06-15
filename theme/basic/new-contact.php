<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head-new.php');
?>
<div class="wrap">
		<!-- <a class="skip-link screen-reader-text" href="#content">Skip to content</a> -->

		<header id="masthead" class="site-header" role="banner">
			<div class="header scrolled">
				<div class="container">
					<div class="main-menu navbar">

						<div class="row no-mar">

							<div class="col-xs-6 col-sm-12 col-md-12 brand no-pad">
								<h1 id="logo">
									<a href="/" class="custom-logo-link" rel="home" itemprop="url"><img width="144" height="120"
											src="http://makeproduction.kr/assets/img/logo_b.png" class="custom-logo" alt="유브갓픽쳐스" itemprop="logo" /></a>
									<a href="/" class="white_logo" rel="home" itemprop="url"><img width="144" height="120"
											src="http://makeproduction.kr/assets/img/logo_b.png" class="custom-logo" alt="유브갓픽쳐스"
											itemprop="logo"></a>
								</h1>
							</div>

							<div class="col-xs-6 visible-xs no-pad">
								<a class="hamburger hamburger--collapse" id="simple-menu" href="#">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</a>
							</div>

							<div class="hidden-xs col-sm-12 col-md-12 no-pad">
								<div class="gnb_wrap">
									<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
										<div class="menu-main-container">
											<ul id="top-menu" class="gnb nav navbar-nav">
												<li id="menu-item-60"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-61">
													<a href="/"><span>HOME</span></a>
												</li>
												<li id="menu-item-61"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-61">
													<a href="/?p=about"><span>ABOUT</span></a>
												</li>
												<li id="menu-item-65"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a
														href="/?p=portfolio"><span>PORTFOLIO</span></a></li>
												<li id="menu-item-66"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-66">
													<a href="/?p=business"><span>BUSINESS</span></a>
												</li>
												<li id="menu-item-79"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-79 notp">
													<a href="/?p=new-contact"><span>CONTACT</span></a>
												</li>
											</ul>
										</div>
									</nav><!-- #site-navigation -->
								</div>
							</div>

						</div>

						<div class="mgnb_wrap">
							<div class="container">
								<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
									<div class="menu-main-container">
										<ul id="top-menu" class="mgnb nav navbar-nav">
											<li
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-61">
												<a href="/"><span>HOME</span></a>
											</li>
											<li
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-61">
												<a href="/?p=about"><span>ABOUT</span></a>
											</li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a
													href="/?p=portfolio"><span>PORTFOLIO</span></a></li>
											<li
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-66">
												<a href="/?p=business"><span>BUSINESS</span></a>
											</li>
											<li
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-79">
												<a href="/?p=new-contact"><span>CONTACT</span></a>
											</li>
										</ul>
									</div>
								</nav><!-- #site-navigation -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->
		<div class="site-content-contain">
        <div class="">
          <div class="map-custom" id="map" data-lat="36.4528689" data-len="127.1223981" data-zoom="17">
        </div>
		</div><!-- .site-content-contain -->
    <!-- CONTACT -->
    <div class="section-margin">
        <div class="row">
            <div class="col col-lg-6 pd0">
            <div class="box-info-contact">
                <h3>Start a new project?</h3>
                <h5>Visit our studio at</h5>
                <p>스토리텔링과 기획에 강한 장점을 가진 영상회사입니다.<br />
                예술이 수단이 아닌 목표가되는 메이크 프로덕션에 언제든지 문의 부탁드립니다.</p>

                <ul>
                <li>
                    <span>Phone</span>
                    <a href="tel:010-5120-6024">010-5120-6024</a>
                </li>
                <li>
                    <span>Email</span>
                    <a href="mailto:makedesign0724@gmail.com">makedesign0724@gmail.com</a>
                </li>
                <li>
                    <span>Address</span>
                    <a href="https://map.kakao.com/link/to/메이크프로덕션,36.4528689,127.1223874">충청남도 공주시 반죽동 감영길 9</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="col col-lg-6 bg-image pd0">
              <!-- <img src="/assets/img/new/m-pro-b.png" alt="메이크프로덕션" /> -->
            </div>
        </div>
      </div>
      <!-- CONTACT -->
	</div><!-- #page -->

	<footer class="footer">
			<div class="container">
					<div class="footer-links p-relative">
						<!-- <img src="/assets/img/pro-01.svg" alt="svg" /> -->
							<div class="row">
									<div class="col-md-3 col-sm-6 col-xs-6 dsn-col-footer">
											<div class="footer-block">
													<div class="footer-logo">
															<a href=""><img src="assets/img/logo.png" alt=""></a>
													</div>

													<div class="footer-social">
															<h5 class="" style="margin-top: 10px;">사업자등록번호</h5>
															<p>202-10-55167</p>
													</div>
											</div>
									</div>

									<div class="col-md-3 col-sm-6 col-xs-6 dsn-col-footer not">
											<div class="footer-block col-menu">
													<h4 class="footer-title">Navigation</h4>
													<nav>
															<ul>
																	<li><a href="/">HOME</a></li>
																	<li><a href="/?p=work">PORTFOLIO</a>
																	</li>
																	<!-- <li><a href="#">LOCATION</a></li> -->
																	<li><a href="/?p=blog">BLOG</a>
																	<li><a href="/?p=new-contact">CONTACT</a>
																	</li>
															</ul>
													</nav>
											</div>
									</div>

									<div class="col-md-3 col-sm-6 col-xs-6 dsn-col-footer">
											<div class="footer-block col-contact">
													<h4 class="footer-title">Contact</h4>
													<p><strong>T</strong> <span>:</span><a class="link-hover"
																	data-hover-text="010-5120-6024" href="tel:010-5120-6024" style="width:200px;">010-5120-6024</a></p>
													<!-- <p><strong>F</strong> <span>:</span>+001 225 3351</p> -->
													<p class="over-hidden"><strong>E</strong> <span>:</span><a class="link-hover"
																	data-hover-text="info@dsngrid.com" href="mailto:makedesgin0724@gmail.com">makedesgin0724@gmail.com</a>
													</p>
											</div>
									</div>

									<div class="col-md-3 col-sm-6 col-xs-6 dsn-col-footer">
											<div class="col-address">
													<h4 class="footer-title">Address</h4>

													<p><a href="https://map.kakao.com/link/to/메이크프로덕션,36.4528689,127.1223874" target="_blank">충남 공주시 감영길 9</a></p>
											</div>
									</div>
							</div>
					</div>

					<div class="copyright">
							<div class="text-center">
									<p>© 2021 MAKE PRODUCTION</p>
									<div class="copright-text over-hidden">Designed by <a class="link-hover"
													data-hover-text="DSN Grid" href="#" target="_blank">PAM FOREST</a>
									</div>
							</div>
					</div>
			</div>
	</footer>
<!-- End cursor -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/dsn-grid.js"></script>
<script src="assets/js/custom.js"></script>
<script>
setTimeout(function() {
  document.querySelector('.pre-loader').style.display = "none";
}, 500);
</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
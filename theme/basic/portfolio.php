<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head-new.php');
$sql = " SELECT a.wr_subject, a.wr_content, a.wr_link1, a.wr_1, b.bf_file FROM makeproduction.g5_write_makeproduction a join makeproduction.g5_board_file b on b.wr_id = a.wr_id WHERE b.bo_table = 'makeproduction'";
$result = sql_query($sql);
?>
<div class="wrap">
		<!-- <a class="skip-link screen-reader-text" href="#content">Skip to content</a> -->

		<header id="masthead" class="site-header" role="banner">
    <div class="header scrolled">
		<div class="header scrolled">
				<div class="container">
					<div class="main-menu navbar">

						<div class="row no-mar">

							<div class="col-xs-6 col-sm-12 col-md-12 brand no-pad">
								<h1 id="logo">
									<a href="index.html" class="custom-logo-link" rel="home" itemprop="url"><img width="144" height="120"
											src="http://makeproduction.kr/assets/img/logo_b.png" class="custom-logo" alt="유브갓픽쳐스" itemprop="logo" /></a>
									<a href="index.html" class="white_logo" rel="home" itemprop="url"><img width="144" height="120"
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
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-79">
													<a href="/?p=contact"><span>CONTACT</span></a>
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
												<a href="/?p=contact"><span>CONTACT</span></a>
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

			<div id="content" class="site-content">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<article id="post-2" class="post-2 page type-page status-publish hentry">
							<div class="entry-content">

								<div class="front-section" id="section_2_1">
                  <div class="container">
                    <div class="title">PORTFOLIO</div>
                    <div class="category">
                      <div class="cat_items">
                        <h3>메이크 프로덕션은 다양한 분야의 크리에이티브 창작물을 만들고 있습니다.</h3>
                      </div>
                    </div>
                    <div class="project-list row mlmr3" id="slider2">
											<?php
												$category = array(
													"ad" => "홍보영상",
													"docu" => "미니다큐",
													"sketch" => "현장스케치",
													"vlog" => "브이로그",
													"contents" => "콘텐츠",
													"education" => "교육영"
												);
                        for ($i=0; $row=sql_fetch_array($result); $i++) { ?>
                            <div class="col-xs-6 col-sm-4 col-md-4 project-item pad3">
                                <a href="https://www.youtube.com/watch?v=<?=end(explode("/", $row['wr_link1']))?>&feature=emb_logo" class="vid">
																	<img src="https://img.youtube.com/vi/<?=end(explode("/", $row['wr_link1']))?>/hqdefault.jpg" alt="thumbnail" />
																</a>
                                <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/Uwiov3dTXYk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
																<div class="project-txtCont">
																	<div class="project-title"><?=$row['wr_subject']?></div>
																	<div class="project-customer"><?=$category[$row['wr_1']]?></div>
																</div>
                            </div>
                        <?php
                        }
											?>
                      </div>
                  </div>
								</div>
								
							</div>
						</article>
					</main>
				</div>

			</div><!-- #content -->
		</div><!-- .site-content-contain -->
	</div><!-- #page -->

	<footer class="footer">
			<div class="container">
					<div class="footer-links p-relative">
						<!-- <img src="/assets/img/pro-01.svg" alt="svg" /> -->
							<div class="row">
									<div class="col-md-3 dsn-col-footer">
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

									<div class="col-md-3 dsn-col-footer">
											<div class="footer-block col-menu">
													<h4 class="footer-title">Navigation</h4>
													<nav>
															<ul>
																	<li><a href="/">HOME</a></li>
																	<li><a href="/?p=work">PORTFOLIO</a>
																	</li>
																	<!-- <li><a href="#">LOCATION</a></li> -->
																	<li><a href="/?p=blog">BLOG</a>
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
																	data-hover-text="info@dsngrid.com" href="mailto:makedesgin0724@gmail.com">makedesgin0724@gmail.com</a>
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



<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/dsn-grid.js"></script>
<script src="/assets/js/custom.js"></script>
<script>
setTimeout(function() {
  document.querySelector('.pre-loader').style.display = "none";
}, 500);
</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
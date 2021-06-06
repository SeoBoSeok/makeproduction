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
													<a href="portfolio/commercial-video/index.html"><span>PORTFOLIO</span></a>
													<ul class="sub-menu">
														<li id="menu-item-62"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a
																href="portfolio/commercial-video/index.html">COMMERCIAL VIDEO</a></li>
														<li id="menu-item-63"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a
																href="portfolio/360vr/index.html">360VR</a></li>
														<li id="menu-item-64"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a
																href="portfolio/short-films/index.html">SHORT FILMS</a></li>
													</ul>
												</li>
												<li id="menu-item-65"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a
														href="awards/index.html"><span>AWARDS</span></a></li>
												<li id="menu-item-66"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-66">
													<a href="what-we-do/advertisement-video-production-service/index.html"><span>WHAT WE
															DO</span></a>
													<ul class="sub-menu">
														<li id="menu-item-67"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67"><a
																href="what-we-do/advertisement-video-production-service/index.html">ADVERTISEMENT VIDEO
																PRODUCTION SERVICE</a></li>
														<li id="menu-item-68"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a
																href="what-we-do/performance-video-media-commerce/index.html">PERFORMANCE VIDEO MEDIA
																COMMERCE</a></li>
														<li id="menu-item-69"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69"><a
																href="what-we-do/fashion-film-mill-brick/index.html">FASHION FILM + MILL BRICK</a></li>
														<li id="menu-item-70"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a
																href="what-we-do/production-coordinate-usa/index.html">PRODUCTION COORDINATE | USA</a>
														</li>
														<li id="menu-item-71"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a
																href="what-we-do/360-virtual-reality/index.html">360 VIRTUAL REALITY</a></li>
														<li id="menu-item-72"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72"><a
																href="what-we-do/3d-vfx-character/index.html">3D / VFX / CHARACTER</a></li>
														<li id="menu-item-73"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a
																href="what-we-do/sound-engineering-glad-studio/index.html">SOUND ENGINEERING + GLAD
																STUDIO</a></li>
														<li id="menu-item-74"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a
																href="what-we-do/visual-engineering-lab/index.html">VISUAL ENGINEERING LAB</a></li>
													</ul>
												</li>
												<li id="menu-item-75"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-75">
													<a href="people/ygp-people/index.html"><span>PEOPLE</span></a>
													<ul class="sub-menu">
														<li id="menu-item-76"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-76"><a
																href="people/ygp-people/index.html">YGP PEOPLE</a></li>
														<li id="menu-item-77"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77"><a
																href="people/careers/index.html">CAREERS</a></li>
														<li id="menu-item-78"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78"><a
																href="people/open-session/index.html">OPEN SESSION</a></li>
													</ul>
												</li>
												<li id="menu-item-79"
													class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-79">
													<a href="contact/projectrequest/index.html"><span>CONTACT</span></a>
													<ul class="sub-menu">
														<li id="menu-item-80"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80"><a
																href="contact/projectrequest/index.html">PROJECT REQUEST</a></li>
														<li id="menu-item-81"
															class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><a
																href="contact/contact/index.html">CONTACT</a></li>
													</ul>
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
												<a href="portfolio/commercial-video/index.html"><span>PORTFOLIO</span></a>
												<ul class="sub-menu">
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a
															href="portfolio/commercial-video/index.html">COMMERCIAL VIDEO</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a
															href="portfolio/360vr/index.html">360VR</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a
															href="portfolio/short-films/index.html">SHORT FILMS</a></li>
												</ul>
											</li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a
													href="awards/index.html"><span>AWARDS</span></a></li>
											<li
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-66">
												<a href="what-we-do/advertisement-video-production-service/index.html"><span>WHAT WE
														DO</span></a>
												<ul class="sub-menu">
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67"><a
															href="what-we-do/advertisement-video-production-service/index.html">ADVERTISEMENT VIDEO
															PRODUCTION SERVICE</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a
															href="what-we-do/performance-video-media-commerce/index.html">PERFORMANCE VIDEO MEDIA
															COMMERCE</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69"><a
															href="what-we-do/fashion-film-mill-brick/index.html">FASHION FILM + MILL BRICK</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70"><a
															href="what-we-do/production-coordinate-usa/index.html">PRODUCTION COORDINATE | USA</a>
													</li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a
															href="what-we-do/360-virtual-reality/index.html">360 VIRTUAL REALITY</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72"><a
															href="what-we-do/3d-vfx-character/index.html">3D / VFX / CHARACTER</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a
															href="what-we-do/sound-engineering-glad-studio/index.html">SOUND ENGINEERING + GLAD
															STUDIO</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a
															href="what-we-do/visual-engineering-lab/index.html">VISUAL ENGINEERING LAB</a></li>
												</ul>
											</li>
											<li
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-75">
												<a href="people/ygp-people/index.html"><span>PEOPLE</span></a>
												<ul class="sub-menu">
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-76"><a
															href="people/ygp-people/index.html">YGP PEOPLE</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77"><a
															href="people/careers/index.html">CAREERS</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78"><a
															href="people/open-session/index.html">OPEN SESSION</a></li>
												</ul>
											</li>
											<li
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-79">
												<a href="contact/projectrequest/index.html"><span>CONTACT</span></a>
												<ul class="sub-menu">
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80"><a
															href="contact/projectrequest/index.html">PROJECT REQUEST</a></li>
													<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><a
															href="contact/contact/index.html">CONTACT</a></li>
												</ul>
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
			<!-- YOUTUBE VIDEO SECTION -->
			<section class="youtube">
				<div class="youtube__area">
					<div id="player"></div>
				</div>
				<div class="youtube__cover"></div>
			</section>
			<!-- YOUTUBE VIDEO SECTION -->
			<div id="content" class="site-content">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<article id="post-2" class="post-2 page type-page status-publish hentry">
							<div class="entry-content">

								<!-- <div class="front-section" id="section1">
									<h2 class="section-title">You’ve Got Pictures, ideas, peoples and more.</h2>
									<p class="section-desc">Highlight Reels</p>
									
								</div> -->
								<div class="front-section scroll-spy" id="section2">
									<div class="container standard">
										<div style="border-top: 1px solid #fff;"></div>
										<h3 class="section-title italic back-to-position to-right delay-0">
											You’ve Got Pictures is a digital contents agency that creates standards for digital marketing in
											the New Normal.<br>
											We produce contents based on the datarized consumer behavior and publish them on the most
											efficient media.<br>
											We concentrate all our efforts on delivering your message in the most powerful way.
										</h3>
										<p class="section-desc2 back-to-position to-left delay-1">
											메이크프로덕션은 고객님이 원하시는 홍보영상을 명확하게 표현할 수 있도록 기획서를 기반으로 높은 쿼리티를 만들어 나갑니다.<br>
											통통튀는 아이디어로 새로운 경험을 드리겠습니다.
										</p>
										<div class="pt40 mt40" style="border-top: 1px solid #fff;"></div>
										<!-- <img src="wp-content/uploads/2020/12/youtube_logo_1201.png" alt="" class="img-responsive"
											style="margin: 0 auto;"> -->
										<div class="mb20"></div>
									<p class="section-desc2  back-to-position to-right delay-2">홍보관련 업무를 한번에 진행할 수 있기 때문에 공공기관과 다양한 주식회사들과 함께 다양한 결과물을 만들어왔습니다.<br />
									다른 여러 업체를 통해 번거로운 작업을 하지 않고, 메이크에서 포스터, 책디자인, 홍보영상, 교육영상등 다양한 미디어 홍보물을 손쉽게 만들어보세요.
									</p>
									</div>
								</div>
								<div class="front-section scroll-spy" id="section3">
									<div class="container text-center">
										<h3 class="section-title2 back-to-position-y to-top delay-0">SNS 영상레시피 공모전 영상 제작│공주시│공동체세움</h3>
										<p class="section-title mb10 type5 back-to-position-y to-top delay-1">공주시 : 행사스케치 &#8211; 공동체 세움 SNS 영상 레시피 공모전</p>
										<p class="section-desc color_a4 mb30 back-to-position-y to-top delay-2">Director : Song. KJ</p>
										<div class="box1000 bdt_6b"></div>

										<!-- <iframe
											src="https://player.vimeo.com/video/381873881?title=0&amp;badge=0&amp;byline=0&amp;portrait=0"
											width="100%" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen
											allowfullscreen></iframe> -->
											<iframe class="back-to-position-y to-top delay-3" width="100%" height="563" src="https://www.youtube.com/embed/DbFNscyl6zk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									
								</div>
								<div class="front-section scroll-spy" id="section4">
									<section class="brand-client section-margin">
									<div class="container">
											<h3 class="section-title-new back-to-position-y to-top delay-0">작업 과정</h3>
											<p class="section-description-new mb30 back-to-position-y to-top delay-1">메이크프로덕션은 고객님이 원하시는 홍보영상을 명확하게 표현할 수 있도록<br />기획서를 기반으로 높은 쿼리티를 만들어 나갑니다.</p>

											<div class="wapper-client">
													<div class="logo-box back-to-position-y to-top delay-0">
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

													<div class="logo-box back-to-position-y to-top delay-1">
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

													<div class="logo-box back-to-position-y to-top delay-2">
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

													<div class="logo-box back-to-position-y to-top delay-3">
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

													<div class="logo-box back-to-position-y to-top delay-4">
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

													<div class="logo-box back-to-position-y to-top delay-5">
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
								</div>
								<div class="front-section scroll-spy" id="section5">
									<h3 class="section-title-new back-to-position-y to-top delay-0 black">고객사</h3>
									<p class="section-description-new mb30 back-to-position-y to-top delay-1 black">메이크프로덕션은 공공기관, 교육기관, 다양한 주식회사들과 함께 작업 하였습니다.</p>
								</div>
								<div class="front-section scroll-spy" id="section6">
								<div class="container">
									<h3 class="section-title2 back-to-position to-right delay-0">LATEST PROJECT</h3>
										<div class="project-list row mlmr3" id="slider2">
											<?php
                        for ($i=0; $row=sql_fetch_array($result); $i++) { ?>
                            <div class="col-xs-6 col-sm-4 col-md-4 project-item pad3">
                                <a href="https://www.youtube.com/watch?v=<?=end(explode("/", $row['wr_link1']))?>&feature=emb_logo" class="vid">
																	<img src="/data/file/makeproduction/<?=$row['bf_file']?>" alt="thumbnail" />
																</a>
                                <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/Uwiov3dTXYk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
																<div class="project-txtCont">
																	<div class="project-title"><?=$row['wr_subject']?></div>
																	<div class="project-customer"><?=$row['wr_1']?></div>
																</div>
                            </div>
                        <?php
                        }
											?>
											<!-- <div class="col-xs-6 col-sm-4 col-md-4 project-item pad3">
												<a href="project/%EC%8A%A4%EC%BC%80%EC%9D%BC-%EB%84%98%EC%B9%98%EB%8A%94-%EC%98%AC%EC%98%81%EC%84%B8%EC%9D%BC/index.html"
													title="스케일 넘치는 올영세일" class="project-inner">
													<img src="/data/file/makeproduction/0_RZtBqjFi_32bb91394e34407f5f9fcb54232e50c486b022c5.png" alt="thumbnail" title="">
													<div class="project-txtCont">
														<div class="project-title">스케일 넘치는 올영세일</div>
														<div class="project-customer">올리브영</div>
													</div>
												</a>
											</div>
											<div class="col-xs-6 col-sm-4 col-md-4 project-item pad3">
												<a href="project/%EC%9B%94%EB%93%9C%EC%BD%98-x-%EA%B9%80%EC%97%B0%EA%B2%BD-%EB%AD%90%EB%8B%88%EB%AD%90%EB%8B%88%ED%95%B4%EB%8F%84-%EC%9B%94%EB%93%9C%EC%BD%98/index.html"
													title="[월드콘 X 김연경] 뭐니뭐니해도 월드콘" class="project-inner">
													<img src="/data/file/makeproduction/0_RZtBqjFi_32bb91394e34407f5f9fcb54232e50c486b022c5.png" alt="thumbnail" title="">
													<div class="project-txtCont">
														<div class="project-title">[월드콘 X 김연경] 뭐니뭐니해도 월드콘</div>
														<div class="project-customer">월드콘</div>
													</div>
												</a>
											</div>
											<div class="col-xs-6 col-sm-4 col-md-4 project-item pad3">
												<a href="project/%EB%B8%8C%EB%A3%A8%EC%9E%89-%EC%BD%A4%EB%B6%80%EC%B0%A8-x-%EC%8B%A0%EC%84%B8%EA%B2%BD-%EC%9E%90%EA%B8%B0%EA%B4%80%EB%A6%AC%ED%8E%B8-full%EB%B2%84%EC%A0%84/index.html"
													title="[브루잉 콤부차 X 신세경] 자기관리편 Full버전" class="project-inner">
													<img src="/data/file/makeproduction/0_RZtBqjFi_32bb91394e34407f5f9fcb54232e50c486b022c5.png" alt="thumbnail" title="">
													<div class="project-txtCont">
														<div class="project-title">[브루잉 콤부차 X 신세경] 자기관리편 Full버전</div>
														<div class="project-customer">콤부차</div>
													</div>
												</a>
											</div>
											<div class="col-xs-6 col-sm-4 col-md-4 project-item pad3">
												<a href="project/%EC%A7%80%EA%B5%AC%EB%A5%BC-%EC%9C%84%ED%95%9C-%EB%A0%88%EC%8B%9C%ED%94%BC/index.html"
													title="지구를 위한 레시피" class="project-inner">
													<img src="/data/file/makeproduction/0_RZtBqjFi_32bb91394e34407f5f9fcb54232e50c486b022c5.png" alt="thumbnail" title="">
													<div class="project-txtCont">
														<div class="project-title">지구를 위한 레시피</div>
														<div class="project-customer">Aromatica</div>
													</div>
												</a>
											</div>
											<div class="col-xs-6 col-sm-4 col-md-4 project-item pad3">
												<a href="project/snapask/index.html" title="Snapask" class="project-inner">
													<img src="/data/file/makeproduction/0_RZtBqjFi_32bb91394e34407f5f9fcb54232e50c486b022c5.png" alt="thumbnail" title="">
													<div class="project-txtCont">
														<div class="project-title">Snapask</div>
														<div class="project-customer">Snapask</div>
													</div>
												</a>
											</div>
											<div class="col-xs-6 col-sm-4 col-md-4 project-item pad3">
												<a href="project/7%EB%B2%88%EA%B0%80-%ED%94%BC%EC%9E%90-%EC%A0%9C%ED%92%88-%ED%8E%B8/index.html"
													title="7번가 피자 &#8211; 제품 편" class="project-inner">
													<img src="/data/file/makeproduction/0_RZtBqjFi_32bb91394e34407f5f9fcb54232e50c486b022c5.png" alt="thumbnail" title="">
													<div class="project-txtCont">
														<div class="project-title">7번가 피자 &#8211; 제품 편</div>
														<div class="project-customer">7번가피자</div>
													</div>
												</a>
											</div>
											<div class="col-xs-6 col-sm-4 col-md-4 project-item pad3">
												<a href="project/7%EB%B2%88%EA%B0%80-%ED%94%BC%EC%9E%90-%EC%83%98%EB%B2%A4%ED%8B%80%EB%A6%AC-%ED%8E%B8/index.html"
													title="7번가 피자 &#8211; 샘&#038;벤틀리 편" class="project-inner">
													<img src="/data/file/makeproduction/0_RZtBqjFi_32bb91394e34407f5f9fcb54232e50c486b022c5.png" alt="thumbnail" title="">
													<div class="project-txtCont">
														<div class="project-title">7번가 피자 &#8211; 샘&#038;벤틀리 편</div>
														<div class="project-customer">7번가피자</div>
													</div>
												</a>
											</div>
											<div class="col-xs-6 col-sm-4 col-md-4 project-item pad3">
												<a href="project/%EC%A7%80%EA%B5%AC%EB%A5%BC-%EC%9C%84%ED%95%9C-%EB%A0%88%EC%8B%9C%ED%94%BC/index.html"
													title="지구를 위한 레시피" class="project-inner">
													<img src="/data/file/makeproduction/0_RZtBqjFi_32bb91394e34407f5f9fcb54232e50c486b022c5.png" alt="thumbnail" title="">
													<div class="project-txtCont">
														<div class="project-title">지구를 위한 레시피</div>
														<div class="project-customer">Aromatica</div>
													</div>
												</a>
											</div>
										</div> -->

										<!-- <p class="recentP1">At You’ve Got Pictures, we believe that the best advertisements are those that
											feature precise and compelling messaging. We make this the highest priority in all of our work.
											Our diverse portfolio includes video content shaped by digital storytelling as well as traditional
											15-second TV commercials. Using our in-house system, we oversee all stages of content creation
											from planning to production and post-production, for smoother, more streamlined project execution.
											From start to finish, we engage in open communication with our clients to ensure highquality
											content and effective message delivery.</p>
										<p class="recentP2">메시지를 아름답고 정확하게 전달하는것. 이것이 우리가 추구하는 광고이고 우리가 해야할 가장 첫번째 임무입니다. 유브갓픽쳐스는 디지털 시대에 맞는
											스토리텔링 기반의 영상부터 전통적 15초 TVCF까지 다양한 스펙트럼을 가지고 작업을 합니다. 유브갓픽쳐스는 기획,제작, 후반의 전체 모든 프로세스를 인하우스 시스템으로
											구축하고 있습니다. 인하우스 시스템이 가져다 주는 효율은 작업 과정을 부드럽게 하고 프로젝트 시작부터 끝까지 열린 커뮤니케이션을 통해 좋은 그림과 전달력을 갖게합니다.</p> -->

									</div>
								</div>
							</div>
						</article>
					</main>
				</div>

			</div><!-- #content -->
			<!-- <footer id="colophon" class="site-footer" role="contentinfo">
				<div id="footer">
					<div class="footer-top">
						<div class="container">
							<div class="footer-topCont">
								<div class="row no-mar">
									<div class="col-xs-12 col-sm-8 col-md-5 col-lg-4 no-pad footer-top-item footer-top-item1">
										<div class="footer-contactCont">
											<p class="footer-title">CONTACT</p>
											<p class="footerP1">Feel free to contact, Contact page can provide more informations.</p>
											<p class="footerP1">You’ve Got Pictures<br>739-23, Hannam-dong, Yongsan-gu, Seoul, Korea</p>
											<p class="footerP1">Tel : +82.2.749.8312 | FAX +82.2.749.8653 | E-Mail info@ygp.co.kr</p>
										</div>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-push-0 col-md-4 col-lg-6 no-pad footer-top-item">
										<p class="footer-title">BRAND</p>
										<ul class="bottom_brand">
											<li>
												<a href="http://www.gladstudio.kr/" class="footer_brand foot_brand1" title="GLAD"
													target="_blank">
													<img src="wp-content/uploads/2021/04/foot_brand1%EF%B9%96v=2.png" alt="GLAD" class="light">
													<img src="wp-content/uploads/2021/04/foot_brand1%EF%B9%96v=2.png" alt="GLAD" class="dark">
												</a>
											</li>
											<li>
												<a href="http://millbrick.kr/" class="footer_brand footer_brand2" title="mill brick"
													target="_blank">
													<img src="wp-content/uploads/2021/04/foot_brand2%EF%B9%96v=2.png" alt="mill brick"
														class="light">
													<img src="wp-content/uploads/2021/04/foot_brand2%EF%B9%96v=2.png" alt="mill brick"
														class="dark">
												</a>
											</li>
											<li>
												<a href="http://penpaperandplot.com/" class="footer_brand footer_brand3"
													title="pen paper and plot" target="_blank">
													<img src="wp-content/uploads/2021/04/foot_brand3%EF%B9%96v=2.png" alt="pen paper and plot"
														class="light">
													<img src="wp-content/uploads/2021/04/foot_brand3%EF%B9%96v=2.png" alt="pen paper and plot"
														class="dark">
												</a>
											</li>
											<li>
												<a href="http://weareknuckles.com/" class="footer_brand footer_brand4" title="Sen jose Studio"
													target="_blank">
													<img src="wp-content/uploads/2021/04/foot_brand4%EF%B9%96v=2.png" alt="Sen jose Studio"
														class="light">
													<img src="wp-content/uploads/2021/04/foot_brand4%EF%B9%96v=2.png" alt="Sen jose Studio"
														class="dark">
												</a>
											</li>
										</ul>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-pull-0 col-md-3 col-lg-2 no-pad footer-top-item">
										<nav id="footer-navigation" class="footer-navigation" role="navigation" aria-label="Footer Menu">
											<div class="menu-footer-container">
												<ul id="footer-menu" class="fnb nav navbar-nav">
													<li id="menu-item-108"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108"><a
															href="company/our-history/index.html">OUR HISTORY</a></li>
													<li id="menu-item-109"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a
															href="company/core-values/index.html">CORE VALUES</a></li>
													<li id="menu-item-110"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"><a
															href="company/downloads/index.html">DOWNLOADS</a></li>
													<li id="menu-item-111"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111"><a
															href="people/open-session/index.html">OPEN SESSION</a></li>
													<li id="menu-item-112"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112"><a
															href="people/careers/index.html">CAREERS</a></li>
													<li id="menu-item-2443"
														class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2443"><a
															href="job-board/index.html">JOB BOARD</a></li>
												</ul>
											</div>
										</nav> #site-navigation -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="footer-bottom">
						<div class="container">
							<div class="row no-mar">
								<div class="col-xs-pull-0 col-xs-12 col-sm-push-0 col-sm-12 col-md-push-5 col-md-2 col-lg-2 no-pad">
									<a href="index.html" title="<%=CB_NAME%>" class="footerLogo hoverBt">
										<img alt="<%=CB_NAME%>" src="wp-content/uploads/2018/02/foot_logo.png" class="footerLogoImg" />
									</a>
								</div>
								<div class="col-xs-pull-0 col-xs-12 col-sm-pull-0 col-sm-12 col-md-pull-2 col-md-5 col-lg-5 no-pad">
									<p class="footerP2">Copyright © 2017 You've Got Pictures Co., Ltd. All rights reserved.</p>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 no-pad">
									<ul class="fsnb nav navbar-nav">
										<li class="facebook"><a href="https://www.facebook.com/helloygp/" title="facebook" target="_blank">
											</a></li>
										<li class="vimeo"><a href="https://vimeo.com/ygp" title="vimeo" target="_blank"> </a></li>
										<li class="instagram"><a href="https://www.instagram.com/ygp_production" title="instagram"
												target="_blank"> </a></li>
										<li class="linkedin"><a href="https://www.linkedin.com/company/ygp" title="linkedin"
												target="_blank"> </a></li>
									</ul>
								</div>



							</div>

						</div>
					</div> -->
					<!-- <div id="topcontrol" title="Scroll Back to Top"><img src="wp-content/uploads/2018/02/totop.png"
							style="width:51px; height:42px"></div> -->

					<!-- <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
											aria-hidden="true">&times;</span></button>
									<div class="ssba-classic-2 ssba ssbp-wrap left ssbp--theme-1">
										<div style="text-align:center"><span class="ssba-share-text">Share this...</span><br /><a
												data-site="" class="ssba_facebook_share"
												href="http://www.facebook.com/sharer.php?u=https://ygp.co.kr/" target="_blank"><img
													src="wp-content/plugins/simple-share-buttons-adder/buttons/somacro/facebook.png"
													style="width: 40px;" title="Facebook" class="ssba ssba-img" alt="Share on Facebook" />
												<div title="Facebook" class="ssbp-text">Facebook</div>
											</a><a data-site="linkedin" class="ssba_linkedin_share ssba_share_link"
												href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://ygp.co.kr/"
												target=&quot;_blank&quot;><img
													src="wp-content/plugins/simple-share-buttons-adder/buttons/somacro/linkedin.png"
													style="width: 40px;" title="LinkedIn" class="ssba ssba-img" alt="Share on LinkedIn" />
												<div title="Linkedin" class="ssbp-text">Linkedin</div>
											</a><a data-site="email" class="ssba_email_share"
												href="mailto:?subject=유브갓픽쳐스&#038;body=%20https://ygp.co.kr/"><img
													src="wp-content/plugins/simple-share-buttons-adder/buttons/somacro/email.png"
													style="width: 40px;" title="Email" class="ssba ssba-img" alt="Email this to someone" />
												<div title="email" class="ssbp-text">email</div>
											</a></div>
									</div>
								</div>
							</div>
						</div>
					</div> -->

			</footer>
		</div><!-- .site-content-contain -->
	</div><!-- #page -->
<main>
	<header class="header scrolled">

	</header>

	<div class="wrapper">
			
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
</main>


<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/dsn-grid.js"></script>
<script src="/assets/js/custom.js"></script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
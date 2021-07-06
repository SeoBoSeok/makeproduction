<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head-new.php');
$sql = " SELECT wr_subject, wr_content, wr_link1, wr_1 FROM makeproduction.g5_write_makeproduction ORDER BY wr_id DESC LIMIT 0, 6";
$result = sql_query($sql);
?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<div class="wrap">
		<!-- <a class="skip-link screen-reader-text" href="#content">Skip to content</a> -->
		<?php
			include_once(G5_THEME_PATH.'/header_part.php');
		?>
		<div class="site-content-contain">
			<!-- YOUTUBE VIDEO SECTION -->
			<section class="youtube">
				<div class="youtube__area">
					<!-- <div id="player"></div> -->
					<video class="bg-video__content" playsinline autoplay muted loop id="myVideo">
						<source src="https://makeproduction.s3.ap-northeast-2.amazonaws.com/wide.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
						<!-- <source src="https://makeproduction.s3.ap-northeast-2.amazonaws.com/main.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' /> -->
						Your browser is not supported!
					</video>
					<video class="bg-video__content" playsinline autoplay muted loop id="myVideoMo">
						<source src="/assets/videos/mobile.mov" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
						<source src="/assets/videos/mobile.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
						<!-- <source src="https://makeproduction.s3.ap-northeast-2.amazonaws.com/main.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' /> -->
						Your browser is not supported!
					</video>
				</div>
				<style>
					#myVideo {
						display: none;
					}
					#myVideoMo {
						display: block;
					}
					@media screen and (min-width: 768px) {
						#myVideo {
							display: block;
						}
						#myVideoMo {
							display: none;
						}
					}
				</style>
				<script>
					// $( window ).resize( function() {
					// 	// do somthing
					// 	var width = window.innerWidth;
					// 	if (width < 767) {
					// 		$('.bg-video__content source').attr('src', 'https://makeproduction.s3.ap-northeast-2.amazonaws.com/mo.mp4');
					// 	} else {
					// 		$('.bg-video__content source').attr('src', 'https://makeproduction.s3.ap-northeast-2.amazonaws.com/wide.mp4');
					// 	}
					// } );
				</script>
				<div class="youtube__cover">
					<div class="inner">
						<!-- <img src="/assets/img/new/production.png" alt="" srcset=""> -->
						<!-- <img src="/assets/img/new/main-01.png" alt="make01" class="make__d make__d--img1">
						<img src="/assets/img/new/main-02.png" alt="make02" class="make__d make__d--img2">
						<img src="/assets/img/new/main-03.png" alt="make03" class="make__d make__d--img3">
						<img src="/assets/img/new/main-04.png" alt="make04" class="make__d make__d--img4">
						<img src="/assets/img/new/main-05.png" alt="make05" class="make__d make__d--img5">
						<img src="/assets/img/new/main-06.png" alt="make06" class="make__d make__d--img6">
						<img src="/assets/img/new/main-07.png" alt="make07" class="make__d make__d--img7"> -->
						<div class="main__slider--background">
							<img src="/assets/img/new/video__layer--text.png" alt="메이크프로덕션메인텍스트" />
						</div>
					</div>
				</div>
			</section>
			<!-- YOUTUBE VIDEO SECTION -->
			<div id="content" class="site-content">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
						<article id="post-2" class="post-2 page type-page status-publish hentry">
							<div class="entry-content">
								<div class="front-section scroll-spy" id="section3">
									<?php
									$sql = " SELECT cf_2_subj FROM g5_config ";
									$data = sql_fetch($sql);
									if (!empty($data['cf_2_subj'])) {
										preg_match('/^.*(?:(?:youtu\\.be\\/|v\\/|vi\\/|u\\/\\w\\/|embed\\/)|(?:(?:watch)?\\?v(?:i)?=|\\&v(?:i)?=))([^#\\&\\?]*).*/', $data['cf_2_subj'], $matches);
									}
									?>
									<div class="container text-center">
											<div class="inner">
												<div class="scale-video">
													<iframe class="" width="100%" height="563" src="https://www.youtube.com/embed/<?=end($matches)?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												</div>
											</div>
									</div>
									
								</div>
								<div class="front-section scroll-spy" id="section4">
									<div class="container">
										<h3 class="section-title-new back-to-position-y to-top delay-0 mb-5">고객사</h3>
										<div class="row">
										<!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L7.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L2.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L10.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L16.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L1.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L11.png" alt="공주시" />
											</div> -->
											<!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L4.png" alt="공주시" />
											</div> -->
											<!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L9.png" alt="공주시" />
											</div> -->
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0012_client-01.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0013_client-02.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0011_client-03.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0010_client-04.png" alt="공주시" />
											</div>
											<!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0009_client-05.png" alt="공주시" />
											</div> -->
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L13.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0008_client-06.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0007_client-07.png" alt="공주시" />
											</div>
										</div>
										<div class="row2">
										<!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L3.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L14.png" alt="공주시" />
											</div> -->
											<!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L6.png" alt="공주시" />
											</div> -->
											<!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L12.png" alt="공주시" />
											</div> -->
											<!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L5.png" alt="공주시" />
											</div> -->
											<!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L13.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L8.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L15.png" alt="공주시" />
											</div> -->
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0006.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0005.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0004.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0003.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0002.png" alt="공주시" />
											</div>
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0001.png" alt="공주시" />
											</div>
											<!-- <div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/client_0000.png" alt="공주시" />
											</div> -->
											<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
												<img src="/assets/img/new/L9.png" alt="공주시" style="margin-top: 20px;" />
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="front-section scroll-spy" id="section5">
									<div class="inner">
										<h3 class="section-title-new back-to-position-y to-top delay-0 black">고객사</h3>
									</div>
									<div class="inner">
										<div class="clinets">
											<div class="clinet back-to-position-y to-top delay-1">
												<img src="/assets/img/new/client-01.svg" alt="공주시" />
												<img src="/assets/img/new/client-02.svg" alt="디지털보존솔루션랩" class="back_black" />
												<img src="/assets/img/new/client-03.svg" alt="공동체세움" />
											</div>
											<div class="clinet back-to-position-y to-top delay-3">
												<img src="/assets/img/new/client-04.svg" alt="국립중앙박물관" />
												<img src="/assets/img/new/client-05.svg" alt="퍼즐랩" />
												<img src="/assets/img/new/client-06.svg" alt="염암공과대학교" />
												<img src="/assets/img/new/client-07.svg" alt="국립중앙도서관" />
											</div>
										</div>
										<div class="clinets_mobile">
											<div class="clinet back-to-position-y to-top delay-1">
												<img src="/assets/img/new/client-01.svg" alt="공주시" />
												<img src="/assets/img/new/client-02.svg" alt="디지털보존솔루션랩" class="back_black" />
											</div>
											<div class="clinet back-to-position-y to-top delay-2">
												<img src="/assets/img/new/client-03.svg" alt="공동체세움" />
												<img src="/assets/img/new/client-04.svg" alt="국립중앙박물관" />
											</div>
											<div class="clinet back-to-position-y to-top delay-3">
												<img src="/assets/img/new/client-05.svg" alt="퍼즐랩" />
												<img src="/assets/img/new/client-06.svg" alt="염암공과대학교" />
											</div>
											<div class="clinet back-to-position-y to-top delay-4">
												<img src="/assets/img/new/client-07.svg" alt="국립중앙도서관" />
											</div>
										</div>
									</div>
								</div> -->
								<div class="front-section scroll-spy" id="section6">
								<div class="container">
									<h3 class="section-title2 back-to-position to-right delay-0">LATEST PROJECT</h3>
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
									<div class="row" id="section_more">
										<div class="col">
											<a href="/?p=portfolio">
												<button class="btn btn-lg">더보기</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</article>
					</main>
					<!-- CUSTOMER -->
					<!-- <section id="customor" style="background: #fff; padding: 30px 0;">
						<div class="container">
							<div class="row">
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
									<img src="/assets/img/new/client-01.svg" alt="공주시" />
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3" style="background: #333;" >
									<img src="/assets/img/new/client-02.svg" alt="공주시" />
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
									<img src="/assets/img/new/client-03.svg" alt="공주시" />
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
									<img src="/assets/img/new/client-04.svg" alt="공주시" />
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
									<img src="/assets/img/new/client-05.svg" alt="공주시" />
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
									<img src="/assets/img/new/client-06.svg" alt="공주시" />
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-2 project-item pad3">
									<img src="/assets/img/new/client-07.svg" alt="공주시" />
								</div>
							</div>
						</div>
					</section> -->
					<!-- CUSTOMER -->
					<script>
					$('#section4 .row').slick({
						slidesToShow: 5,
						slidesToScroll: 1,
						autoplay: true,
						autoplaySpeed: 2000,
						arrows: false,
						responsive: [ // 반응형 웹 구현 옵션
							{  
								breakpoint: 960, //화면 사이즈 960px
								settings: {
									//위에 옵션이 디폴트 , 여기에 추가하면 그걸로 변경
									slidesToShow:3 
								} 
							},
							{ 
								breakpoint: 768, //화면 사이즈 768px
								settings: {	
									//위에 옵션이 디폴트 , 여기에 추가하면 그걸로 변경
									slidesToShow:2 
								} 
							}
						]
					});
					$('#section4 .row2').slick({
						slidesToShow: 5,
						slidesToScroll: 1,
						autoplay: true,
						autoplaySpeed: 2000,
						arrows: false,
						responsive: [ // 반응형 웹 구현 옵션
							{  
								breakpoint: 960, //화면 사이즈 960px
								settings: {
									//위에 옵션이 디폴트 , 여기에 추가하면 그걸로 변경
									slidesToShow:3 
								} 
							},
							{ 
								breakpoint: 768, //화면 사이즈 768px
								settings: {	
									//위에 옵션이 디폴트 , 여기에 추가하면 그걸로 변경
									slidesToShow:2 
								} 
							}
						]
					});
					</script>
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
const video = document.querySelector('video');
// video.onloadeddata = function() {
//   alert("Browser has loaded the current frame");
// };
video.addEventListener('loadeddata', function() {
  setTimeout(function() {
    document.querySelector('.pre-loader').style.display = "none";
  }, 500);
});
setTimeout(function () {
	document.querySelector('.pre-loader').style.display = "none";
}, 3000);
</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
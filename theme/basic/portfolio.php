<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head-new.php');
$sql = " SELECT wr_subject, wr_content, wr_link1, wr_1 FROM makeproduction.g5_write_makeproduction ORDER BY wr_datetime DESC ";
$result = sql_query($sql);
?>
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
</script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
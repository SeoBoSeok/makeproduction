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
                  <div class="inner">
                    <div class="title">BUSINESS</div>
                    <div class="category">
                      <div class="cat_items">
                        <div class="cat_item">전체보기</div>
                        <div class="cat_item">2021</div>
                        <div class="cat_item">2020</div>
                        <div class="cat_item">2019</div>
                      </div>
                    </div>
                    <div class="table">
                      <div class="items">
                        <div class="item__title">
                          <div class="left">2019</div>
                          <div class="right">
                            <div class="sub__title">메이크 프로덕션 공주문화여행 메이킹 필름</div>
                            <div class="sub__dsecription">메이크 프로덕션은 다양한 분야의 크리에이티브를 제작하고 있습니다.</div>
                            <div class="sub__date">2021. 06. 06 ~ 2021. 06. 06</div>
                          </div>
                        </div>
                        <div class="item__description">

                        </div>
                      </div>
                      <div class="items">
                        <div class="item__title">
                          <div class="left">2019</div>
                          <div class="right">
                            <div class="sub__title">메이크 프로덕션 공주문화여행 메이킹 필름</div>
                            <div class="sub__dsecription">메이크 프로덕션은 다양한 분야의 크리에이티브를 제작하고 있습니다.</div>
                            <div class="sub__date">2021. 06. 06 ~ 2021. 06. 06</div>
                          </div>
                        </div>
                        <div class="item__description">

                        </div>
                      </div>
                      <div class="items">
                        <div class="item__title">
                          <div class="left">2019</div>
                          <div class="right">
                            <div class="sub__title">메이크 프로덕션 공주문화여행 메이킹 필름</div>
                            <div class="sub__dsecription">메이크 프로덕션은 다양한 분야의 크리에이티브를 제작하고 있습니다.</div>
                            <div class="sub__date">2021. 06. 06 ~ 2021. 06. 06</div>
                          </div>
                        </div>
                        <div class="item__description">

                        </div>
                      </div>
                      <div class="items">
                        <div class="item__title">
                          <div class="left">2019</div>
                          <div class="right">
                            <div class="sub__title">메이크 프로덕션 공주문화여행 메이킹 필름</div>
                            <div class="sub__dsecription">메이크 프로덕션은 다양한 분야의 크리에이티브를 제작하고 있습니다.</div>
                            <div class="sub__date">2021. 06. 06 ~ 2021. 06. 06</div>
                          </div>
                        </div>
                        <div class="item__description">

                        </div>
                      </div>
                      <div class="items">
                        <div class="item__title">
                          <div class="left">2019</div>
                          <div class="right">
                            <div class="sub__title">메이크 프로덕션 공주문화여행 메이킹 필름</div>
                            <div class="sub__dsecription">메이크 프로덕션은 다양한 분야의 크리에이티브를 제작하고 있습니다.</div>
                            <div class="sub__date">2021. 06. 06 ~ 2021. 06. 06</div>
                          </div>
                        </div>
                        <div class="item__description">

                        </div>
                      </div>
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
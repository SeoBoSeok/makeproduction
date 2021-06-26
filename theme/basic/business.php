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
<!--                       
Array
(
    [wr_id] => 1
    [wr_num] => -1
    [wr_reply] => 
    [wr_parent] => 1
    [wr_is_comment] => 0
    [wr_comment] => 0
    [wr_comment_reply] => 
    [ca_name] => 2021
    [wr_option] => 
    [wr_subject] => 메이크 프로덕션 공주문화여행 메이킹 필름
    [wr_content] => 메이크 프로덕션 공주문화여행 메이킹 필름 메이크 프로덕션은 다양한 분야의 크리에이티브를 제작하고 있습니다. 2021. 06. 06 ~ 2021. 06. 06
    [wr_seo_title] => 메이크-프로덕션-공주문화여행-메이킹-필름
    [wr_link1] => 
    [wr_link2] => 
    [wr_link1_hit] => 0
    [wr_link2_hit] => 0
    [wr_hit] => 1
    [wr_good] => 0
    [wr_nogood] => 0
    [mb_id] => admin
    [wr_password] => 
    [wr_name] => 최고관리자
    [wr_email] => admin@domain.com
    [wr_homepage] => 
    [wr_datetime] => 2021-06-24 05:22:47
    [wr_file] => 1
    [wr_last] => 2021-06-24 05:22:47
    [wr_ip] => ::1
    [wr_facebook_user] => 
    [wr_twitter_user] => 
    [wr_1] => 메이크 프로덕션은 다양한 분야의 크리에이티브를 제작하고 있습니다.
    [wr_2] => 2021. 06. 06 ~ 2021. 06. 06
    [wr_3] => 
    [wr_4] => 
    [wr_5] => 
    [wr_6] => 
    [wr_7] => 
    [wr_8] => 
    [wr_9] => 
    [wr_10] => 
)
-->
                      <?php
                        // SELECT a.wr_subject, a.wr_content, a.wr_link1, a.wr_1, b.bf_file FROM makeproduction.g5_write_makeproduction a join makeproduction.g5_board_file b on b.wr_id = a.wr_id WHERE b.bo_table = 'makeproduction'
                        $sql = " select a.*, b.bf_file from makeproduction.g5_write_business a join makeproduction.g5_board_file b on b.wr_id = a.wr_id WHERE b.bo_table = 'business' ";
                        $result = sql_query($sql);
                        for($i=0; $row=sql_fetch_array($result); $i++) {
                      ?>
                      <div class="items">
                        <div class="item__title">
                          <div class="left"><?= $row['ca_name'] ?>
                            <div class="month">
                              07
                            </div>
                          </div>
                          <div class="right">
                            <div class="sub__title"><?= $row['wr_subject'] ?></div>
                            <div class="sub__dsecription"><?= $row['wr_1'] ?></div>
                          </div>
                        </div>
                        <div class="item__description" style="background-image: url('/data/file/business/<?= $row['bf_file'] ?>')">
                            
                        </div>
                      </div>
                      <?php
                      }
                      ?>
                      <!-- <div class="items">
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
                      </div> -->
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
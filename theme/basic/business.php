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
                  <div class="container" id="business__container">
                    <div class="row">
                      <div class="col">
                        <div class="title">BUSINESS</div>
                        <div class="category">
                          <div class="cat_items">
                            <?php
                              $sql = " SELECT bo_category_list FROM g5_board WHERE bo_subject = 'BUSINESS' ";
                              $data = sql_fetch($sql);
                              $ca_name = '';
                              $str = '';

                              if (isset($_GET['caname'])) {
                                $ca_name = $_GET['caname'];
                                $str .= '<a class="cat_item" href="/?p=business">ALL</a>';
                              } else {
                                $str .= '<a class="cat_item active" href="/?p=business">ALL</a>';
                              }

                              $categories = array_reverse(explode("|", $data['bo_category_list'])); // 구분자가 | 로 되어 있음
                              for ($i=0; $i<count($categories); $i++) {
                                  $category = trim($categories[$i]);
                                  if (!$category) continue;

                                  $str .= "<a href='/?p=business&caname={$category}' class=\"cat_item";
                                  if ($category == $ca_name) {
                                      $str .= ' active';
                                  }
                                  $str .= "\">$categories[$i]</a>\n";
                              }
                              print_r($str);
                            ?>
                            <!-- <div class="cat_item">ALL</div>
                            <div class="cat_item">2021</div>
                            <div class="cat_item">2020</div>
                            <div class="cat_item">2019</div> -->
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
                            if (!empty($_GET['caname'])) {
                              $sql = " SELECT a.*, b.bf_file FROM makeproduction.g5_write_business a JOIN makeproduction.g5_board_file b ON b.wr_id = a.wr_id WHERE ca_name = {$_GET['caname']} ";
                            } else {
                              $sql = " SELECT a.*, b.bf_file FROM makeproduction.g5_write_business a JOIN makeproduction.g5_board_file b ON b.wr_id = a.wr_id ";
                            }
                            $result = sql_query($sql);
                            for($i=0; $row=sql_fetch_array($result); $i++) {
                          ?>
                          <div class="items">
                            <div class="item__title">
                              <div class="left"><?= $row['ca_name'] ?>
                                <div class="month">
                                  <?= substr($row['wr_2'], 0, 2) ?>
                                </div>
                              </div>
                              <div class="right">
                                <div class="sub__title"><?= $row['wr_subject'] ?></div>
                                <div class="sub__dsecription"><?= $row['wr_1'] ?></div>
                              </div>
                            </div>
                            <?php
                              if (!empty($row['wr_link1'])) {
                                preg_match('/^.*(?:(?:youtu\\.be\\/|v\\/|vi\\/|u\\/\\w\\/|embed\\/)|(?:(?:watch)?\\?v(?:i)?=|\\&v(?:i)?=))([^#\\&\\?]*).*/', $row['wr_link1'], $matches);
                                // var_dump($matches);
                            ?>
                            <div class="item__description" style="background: url('https://img.youtube.com/vi/<?=end($matches)?>/hqdefault.jpg') center center no-repeat; background-size: cover;">
                              <a href="https://www.youtube.com/watch?v=<?=end($matches)?>&feature=emb_logo" class="vid overlay">
                                <!-- <img src="https://img.youtube.com/vi/<?=end($matches)?>/hqdefault.jpg" alt="thumbnail" /> -->
                              </a>
                            <?php
                              } else {
                            ?>
                              <div class="item__description" style="background: url('/data/file/business/<?= $row['bf_file'] ?>') center center no-repeat; background-size: cover;"></div>
                            <?php
                              }
                            ?>
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
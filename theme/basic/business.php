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
                          </div>
                        </div>
                        <div class="table">
                          <?php
                            // SELECT a.wr_subject, a.wr_content, a.wr_link1, a.wr_1, b.bf_file FROM makeproduction.g5_write_makeproduction a join makeproduction.g5_board_file b on b.wr_id = a.wr_id WHERE b.bo_table = 'makeproduction'
                            if (!empty($_GET['caname'])) {
                              $sql = " SELECT a.*, b.bf_file FROM makeproduction.g5_write_business a JOIN makeproduction.g5_board_file b ON b.wr_id = a.wr_id WHERE ca_name = {$_GET['caname']} AND b.bo_table = 'business' ";
                            } else {
                              $sql = " SELECT a.*, b.bf_file FROM makeproduction.g5_write_business a JOIN makeproduction.g5_board_file b ON b.wr_id = a.wr_id WHERE b.bo_table = 'business' ";
                            }
                            $result = sql_query($sql);
                            $total_rows = mysqli_num_rows($result);

                            for ($i=0; $row=sql_fetch_array($result); $i++) {
                          ?>
                          <div class="items">
                            <a class="item__title" href="/?p=details&bo_table=business&wr_id=<?=$row['wr_id']?>&ca_name=<?=$row['ca_name']?>">
                              <div class="left"><?= $row['ca_name'] ?>
                                <div class="month">
                                  <?= substr($row['wr_2'], 0, 2) ?>
                                </div>
                              </div>
                              <div class="right">
                                <div class="sub__title"><?= $row['wr_subject'] ?></div>
                                <div class="sub__dsecription"><?= $row['wr_1'] ?></div>
                              </div>
                            </a>
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
                          <?php
                          if ($total_rows == 0) {
                            echo '<div class="container"><div class="row"><div class="col text-center">컨테츠 준비중입니다.</div></div></div>';
                          }
                          ?>
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
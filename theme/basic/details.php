<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if (empty($_GET['wr_id'])) exit;

include_once(G5_THEME_PATH.'/head-new.php');

if (!empty($_GET['caname'])) {
  $sql = " SELECT a.*, b.bf_file FROM makeproduction.g5_write_business a JOIN makeproduction.g5_board_file b ON b.wr_id = a.wr_id WHERE ca_name = {$_GET['caname']} AND a.wr_id = {$_GET['wr_id']} LIMIT 1 ";
} else {
  $sql = " SELECT a.*, b.bf_file FROM makeproduction.g5_write_business a JOIN makeproduction.g5_board_file b ON b.wr_id = a.wr_id WHERE a.wr_id = {$_GET['wr_id']} LIMIT 1 ";
}
// print_r($sql);
$result = sql_query($sql);
$total_rows = mysqli_num_rows($result);
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
                  <?php
                    for ($i=0; $row=sql_fetch_array($result); $i++) {
                  ?>
                  <div class="container" id="business__container">
                    <div class="row">
                      <div class="col col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12">
                        <div class="title"><?= $row['wr_subject'] ?></div>
                        <div id="sb-wrap">
                          <div id="sb-view">

                            <!-- 타이틀 영역 -->
                            <div class="titWrap">
                              <h5 class="sbj"><?=$row['wr_subject']?></h5>
                              <ul class="info">
                                <li><em>작성일</em><?=substr($row['wr_datetime'], 0, 10)?></li>
                                <li><em>조회</em> <?=$row['wr_hit']?></li>
                              </ul>
                            </div>

                              
                            <!-- 내용 영역 -->
                            <div class="memoWrap nostyle">
                            <?php
                              if (!empty($row['wr_link1'])) {
                                preg_match('/^.*(?:(?:youtu\\.be\\/|v\\/|vi\\/|u\\/\\w\\/|embed\\/)|(?:(?:watch)?\\?v(?:i)?=|\\&v(?:i)?=))([^#\\&\\?]*).*/', $row['wr_link1'], $matches);
                            ?>
                            <div class="item__description" style="background: url('https://img.youtube.com/vi/<?=end($matches)?>/hqdefault.jpg') center center no-repeat; background-size: cover;">
                              <a href="https://www.youtube.com/watch?v=<?=end($matches)?>&feature=emb_logo" class="vid overlay">
                                <!-- <img src="https://img.youtube.com/vi/<?=end($matches)?>/hqdefault.jpg" alt="thumbnail" /> -->
                              </a>
                            </div>
                            <?php
                              } else {
                            ?>
                              <div class="item__description" style="background: url('/data/file/business/<?= $row['bf_file'] ?>') center center no-repeat; background-size: cover;"></div>
                            <?php
                              }
                            ?>
                              <?=$row['wr_content']?>
                            </div>

                            <!-- s:foot button -->
                            <div id="sb-footer" class="no-abs">
                              <div class="left">
                                <a href="/?p=business" class="sb-btn type3">목록</a>
                                <a href="javascript:history.back();" class="sb-btn type4">이전</a>
                              <div class="right">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
								</div>
								<?php
                  }
                ?>
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
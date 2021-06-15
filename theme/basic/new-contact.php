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
        <div class="">
          <!-- 36.4696336,127.1409435,17z -->
          <div class="map-custom" id="map" data-lat="36.4696336" data-len="127.1409435" data-zoom="15">
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

	<?php
    include_once(G5_THEME_PATH.'/footer_part.php');
  ?>
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
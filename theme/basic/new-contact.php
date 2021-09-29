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
          <div class="map-custom" id="map" data-lat="36.47107997466952" data-len="127.14104588960247" data-zoom="17">
        </div>
		</div><!-- .site-content-contain -->
    <!-- CONTACT -->

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
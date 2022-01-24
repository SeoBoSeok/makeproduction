<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
    $g5_head_title .= " | ".$config['cf_title'];
}

$g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title);

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="production, make">
  <meta name="description" content="MAKE PRODUCTION">
  <meta name="author" content="Make production">
  <meta property="og:type" content="website"> 
  <meta property="og:title" content="메이크 프로덕션">
  <meta property="og:description" content="체계적인 기획으로 창의적인 콘텐츠를 만들어내는 프로덕션입니다.">
  <meta property="og:image" content="/images/makeproduction_link.png">
  <meta property="og:url" content="">
  <title>Make production</title>
  <link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/images/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
  <!-- <link rel="manifest" href="/manifest.json"> -->
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  
  <script src="/js/jquery-2.1.4.js"></script>
  <!-- Page Scroll Effects JS & CSS -->
  <script src="/js/velocity/velocity.min.js"></script>
  <script src="/js/velocity/velocity.ui.min.js"></script>
  <script src="/js/velocity/main.js"></script>
  <link rel="stylesheet" href="/js/velocity/velocity.css">
  <!-- Smooth Scrolling -->
  <script src="/js/jquery.scrollTo.min.js"></script>
  <!-- Slick.js -->
  <script src="/js/slick/slick.min.js"></script>
  <link rel="stylesheet" href="/js/slick/slick-theme.css">
  <link rel="stylesheet" href="/js/slick/slick.css">
  <!-- Featherlight.js -->
  <script src="/js/featherlight/featherlight.js"></script>
  <link rel="stylesheet" href="/js/featherlight/featherlight.css">
  <!-- Custom JS & CSS -->
  <script src="/custom.js"></script>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/responsive.css">
  <link rel="stylesheet" href="/font/stylesheet.css">

<?php
if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>

<!-- custom styles (optional) -->
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
</script>
<?php
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
?>
</head>
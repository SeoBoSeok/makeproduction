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

<?php
	include_once(G5_THEME_PATH.'/header_part.php');
?>
<body data-hijacking="on" data-animation="catch">
	<div class="container">
    <section class="cd-section visible" id="home">
      <div>
        <div class="content">
          <div class="home-inner">
            <h3 class="welcome-text">Welcome to <span><br><img src="images/home-logo.png" alt=""></span></h3>
            <div class="home-opacity-video">
              <video id="video_player" autoplay loop muted playsinline controlsList="nodownload" poster="images/main.png">
                <source src="main_motion.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section : process -->
    <section class="cd-section" id="main-content">
      <div>
        <div class="content-video">
          <div class="video">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/lSevPtUa0js" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section : process -->
    <section class="cd-section" id="main-content">
      <div>
        <div class="content-video">
          <div class="video">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/0a9S4YyBSqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section : contact -->
    <section class="cd-section" id="contact">
      <div>
        <div class="content">
          <div class="contact-inner">
            <div class="contact-feature">
              <div class="contact-form">
                <h3><b>Contact</b> Us</h3>
                <p>Hello, Contact us anytime.</p>
                <!-- 기존 컨텍트 폼과 겹칠 수 있음, 그때는 클래스 명을 다시 설정  -->
                <form class="send-box"> 
                  <button type="button" onclick="moveContact();">get in touch</button>
                </form>
              </div>
              <div class="contact-info">
                <h4>Our <b>Office</b></h4>
                <ul>
                  <li>Address : 501, Industry-Academic Research Center, 56, Gongjudaehak-ro, Gongju-si, Chungcheongnam-do, Republic of Korea</li>
                  <li>Phone : 010-5120-6024</li>
                  <li>Email : makedesign0724@gmail.com</li>
                </ul>
                <h4>SNS <b>link</b></h4>
                <ul class="sns-link">
                  <li><a href="https://blog.naver.com/fhjskk1" target="_blank"> Blog </a></li>
                  |
                  <li><a href="https://www.instagram.com/makeproduction_2021/" target="_blank"> Instagram </a></li>
                  |
                  <li><a href="https://www.youtube.com/channel/UCs_Xcf4ZZ80Y6NsAYLBDrAQ" target="_blank"> Youtube </a></li>
                </ul>
                <h4 class="copyright">&copy; Make production All Rights Reserved.</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- header -->
		<?php
      include_once(G5_THEME_PATH.'/header_part.php');
    ?>
  </div>
  
  <a href="#" class="gototop"><img src="/images/gototop.png"></a>

  <nav>
    <ul class="cd-vertical-nav">
      <li><a href="#0" class="cd-prev inactive">Next</a></li>
      <li><a href="#0" class="cd-next">Prev</a></li>
    </ul>
  </nav> 

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
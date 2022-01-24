<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head-new.php');
// $sql = " SELECT wr_subject, wr_content, wr_link1, wr_1 FROM makeproduction.g5_write_makeproduction ORDER BY wr_id DESC LIMIT 0, 6";
// $result = sql_query($sql);
?>
<body data-hijacking="on" data-animation="catch">
  <div class="container">
    <section class="cd-section visible" id="about">
      <div>
        <div class="content">
          <div class="about-inner">
            <h3 class="about-text">About <span> <br> <img src="images/home-logo.png" alt=""></span></h3>
            <div class="about-opacity-image"></div>
            <div class="about-heading">
              <span class="span-1">Standing Standard</span>
              <span class="span-2">Make production</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section : process -->
    <section class="cd-section" id="process">
      <div>
        <div class="content">
          <div class="process-inner">
            <div class="feature"></div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section : performance -->
    <section class="cd-section" id="performance">
      <div>
        <div class="content">
          <div class="performance-inner">
            <div class="feature"></div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Section : about-professional -->
    <section class="cd-section" id="about-professional">
      <div>
        <div class="content">
          <div class="about-professional__1"></div>
        </div>
      </div>
    </section>

    <section class="cd-section" id="about-professional">
      <div>
        <div class="content">
          <div class="about-professional__2"></div>
        </div>
      </div>
    </section>

    <section class="cd-section" id="about-professional">
      <div>
        <div class="content">
          <div class="about-professional__3"></div>
        </div>
      </div>
    </section>

    <section class="cd-section" id="project">
      <div>
        <div class="content">
          <div class="project-inner">
            <div class="tabs">
              <div class="tab">
                <div class="project-photo">
                  <img src="/images/SGJ.png">
                  <img src="/images/OAR.png">
                  <img src="/images/SYJ.png">
                  <img src="/images/JYB.png">
                  <img src="/images/NHK.png">
                </div>
              </div>
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
  
  <a href="#" class="gototop"><img src="images/gototop.png"></a>
  
  <nav>
    <ul class="cd-vertical-nav">
      <li><a href="#0" class="cd-prev inactive">Next</a></li>
      <li><a href="#0" class="cd-next">Prev</a></li>
    </ul>
  </nav>
  
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
  </script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
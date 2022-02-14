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
<body data-hijacking="off" data-animation="none">
  <div class="container">
    <section class="cd-section visible" id="contact">
      <div>
        <div class="content">
          <div class="contact-inner-1">
            <h3 class="contact-text">Contact <span><br><img src="/images/home-logo.png" alt=""></span></h3>
            <div class="contact-heading">
              <span>Hello</span>
              <span>Contact</span>
              <span>us</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section : process -->
    <div class="cd-section" id="contact form">
      <div class="contact">
        <div class="contact-inner">
          <div class="contact-feature2">
            <div class="contact-form">
              <h3><b>Contact</b></h3>
                <!-- <form action="#" method="post" enctype="multipart/form-data"> -->
                <form name="fwrite" id="fwrite" action="/bbs/write_update.php" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="bo_table" value="free">
                  <div class="send-box1">
                    <div class="client-info">
                      <h3>고객 정보</h3>
                      <label for="name">Name <span>*</span></label>
                      <input type="text" name="wr_1" placeholder="담당자 / 회사명">
                      <label for="phone">Phone <span>*</span></label>
                      <input type="tel" name="wr_2" placeholder="연락처">    
                      <label for="email">Email <span>*</span></label>
                      <input type="email" name="wr_3" placeholder="이메일">
                    </div>
                  </div>
                  <div class="send-box2">
                    <div class="project-info">
                      <h3>프로젝트 정보</h3>
                    </div>
                    <div class="project-type">
                    <div>
                        <input type="checkbox" name="wr_4[]" id="branding" value="branding"/>
                        <label for="branding">브랜딩 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="promotion" value="promotion"/>
                        <label for="promotion">홍보 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="ad" value="ad"/>
                        <label for="ad">광고 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="fashion" value="fashion"/>
                        <label for="fashion">패션 필름 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="making" value="making"/>
                        <label for="making">메이킹 필름 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="motion" value="motion"/>
                        <label for="motion">모션그래픽 개발</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="content" value="content"/>
                        <label for="content">콘텐츠 개발</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="spot" value="spot"/>
                        <label for="spot">현장 스케치 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" name="wr_4[]" id="etc" value="etc"/>
                        <label for="etc">기타 영상</label>
                      </div>
                      <!-- <div>
                        <input type="checkbox" id="brand" name="wr_4[]" value="brand"/>
                        <label for="brand">브랜드 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="promotion" name="wr_4[]" value="promotion"/>
                        <label for="promotion">홍보 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="viral" name="wr_4[]" value="viral"/>
                        <label for="viral">바이럴 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="spot" name="wr_4[]" value="spot"/>
                        <label for="spot">현장 스케치 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="event" name="wr_4[]" value="event"/>
                        <label for="event">행사 오프닝 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="fashion" name="wr_4[]" value="fashion"/>
                        <label for="fashion">패션 필름 영상</label>
                      </div>
                      <div>
                        <input type="checkbox" id="motion" name="wr_4[]" value="motion"/>
                        <label for="motion">모션그래픽 개발</label>
                      </div>
                      <div>
                        <input type="checkbox" id="content" name="wr_4[]" value="content"/>
                        <label for="content">콘텐츠 개발</label>
                      </div> -->
                    </div>
                  </div>
                  <div class="send-box3"> 
                    <div class="project-content">
                      <h3>상세 문의 내용</h3>
                    </div>
                    <div class="project-budget">
                      <label for="project-budget">제작 예산 <span>*</span></label>
                      <select id="project-budget" name="wr_5">
                        <optgroup label="영상">
                          <option value="10 ~ 100 만원 이하">10 ~ 100 만원 이하</option>
                          <option value="100 ~ 300 만원 이하">100 ~ 300 만원 이하</option>
                          <option value="300 ~ 500 만원 이하">300 ~ 500 만원 이하</option>
                          <option value="500 ~ 1000 만원 이하">500 ~ 1000 만원 이하</option>
                          <option value="1000 ~ 2000 만원 이하">1000 ~ 2000 만원 이하</option>
                          <option value="2000 ~ 3000 만원 이하">2000 ~ 3000 만원 이하</option>
                          <option value="3000 ~ 5000 만원 이하">3000 ~ 5000 만원 이하</option>
                          <option value="5000 만원 이상">5000 만원 이상</option>    
                        </optgroup>
                        <optgroup label="기타">
                          <option value="협의 후 결정">협의 후 결정</option>   
                        </optgroup>
                      </select>
                      <div class="project-title">
                        <label>프로젝트 <span>*</span></label>
                        <input type="text" id="text" name="wr_subject" placeholder="프로젝트 제목을 입력해 주세요.">
                      </div>
                    </div>
                    <div class="reference_url">
                      <p>디자인 참고 사이트나 영상 링크 주소(Url)를 알려주세요.</p>
                      <span>※ http:// 또는&nbsp;https:// 포함하여 입력해주세요.&nbsp;</span>
                      <input type="url" id="url" name="wr_link1" placeholder="주소(Url)">
                    </div>
                    <div class="message">
                      <label for="message">문의 내용 <span>*</span></label>
                      <textarea name="wr_content" id="message" rows="10" cols="80" placeholder="프로젝트 내용을 입력해 주세요."></textarea>
                    </div>
                    <div class="filebox">
                      <input class="upload-name" value="첨부파일" placeholder="첨부파일">
                      <label for="file">파일찾기</label> 
                      <input type="file" id="file" name="bf_file[]">
                    </div>
                  </div>
                  <button type="submit" id="submit_btn">send message</button>
                </form>  
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
                <!-- <form class="send-box"> 
                  <button type="button" onclick="moveContact();">get in touch</button>
                </form> -->
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

  <script>
  // filebox //
  $("#file").on('change',function(){
    var fileName = $("#file").val();
    $(".upload-name").val(fileName);
  });
  </script>
  
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
  </script>
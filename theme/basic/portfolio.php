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
    <section class="cd-section visible" id="portfolio">
      <div>
        <div class="content">
          <div class="portfolio-inner-1">
            <h3 class="portfolio-text">Portfolio <span><br><img src="/images/home-logo.png" alt=""></span></h3>
            <div class="portfolio-heading">
              <span>We</span>
              <span>Make</span>
              <span>History</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- main container -->
    <div class="main-container portfolio-inner clearfix">
      <!-- portfolio div -->
      <div class="portfolio-div">
        <div class="portfolio">
          <!-- portfolio_filter -->
          <div class="categories-grid wow fadeInLeft">
            <nav class="categories text-center">
              <ul class="portfolio_filter">
                <li><a href="#" class="active" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".ads">Advertising</a></li>
                <li><a href="#" data-filter=".contents">Contents</a></li>
                <li><a href="#" data-filter=".education">Education</a></li>
                <li><a href="#" data-filter=".graphics">Graphics</a></li>
                <li><a href="#" data-filter=".making">Making film</a></li>
              </ul>
            </nav>
          </div>
          <!-- portfolio_filter -->

          <!-- portfolio_container -->
          <div class="no-padding portfolio_container clearfix">
            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads making">
              <a href="https://youtu.be/lSevPtUa0js" class="portfolio_item" target="_blank">
                <img src="https://i.ytimg.com/vi/lSevPtUa0js/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>부여 박물관 메이킹 필름</span>
                      <em> Ads / Making film</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads contents">
              <a href="https://youtu.be/KayFyybOo6E" class="portfolio_item" target="_blank">
                <img src="https://i.ytimg.com/vi/KayFyybOo6E/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>경남 다랑논 아카이브</span>
                      <em>Ads / Contents</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads contents">
              <a href="https://youtu.be/TL_Wcz58Fks" class="portfolio_item" target="_blank">
                <img src="https://i.ytimg.com/vi/TL_Wcz58Fks/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>금강과 사람들 해설 콘텐츠</span>
                      <em>Ads / Contents</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 education">
              <a href="https://youtu.be/I4V3IxSrTyU" class="portfolio_item" target="_blank">
                <img src="https://i.ytimg.com/vi/I4V3IxSrTyU/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>안전체험관 안전교육</span>
                      <em>Education</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads graphics">
              <a href="https://youtu.be/LKBtFh9wyNM" class="portfolio_item" target="_blank">
                <img src="https://i.ytimg.com/vi/LKBtFh9wyNM/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>공주 디지털 문화유산 <br> 박람회 티저</span>
                      <em>Ads / Graphics</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

<!--                                          -->
            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads graphics">
              <a href="https://youtu.be/LuRQtTohJEE" class="portfolio_item" target="_blank">
                <img src="https://i.ytimg.com/vi/LuRQtTohJEE/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>주민자치 박람회 성과보고 <br> 모션그래픽 제작</span>
                      <em>Ads / Graphics</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/MyfYVQjzem0" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/MyfYVQjzem0/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>하프 와디즈 소개영상 제작</span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->
        
            <!-- portfolio work -->
            <!-- <div class="col-md-4 col-sm-6 ads making">
              <a href="https://youtu.be/_bX14AoPugo" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/_bX14AoPugo/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>경남 다랑논 활성화 사업-거제</span>
                      <em>Ads / Making film</em>
                    </div>
                  </div>
                </div>
              </a>
            </div> -->
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/VtTR1xstQ5I" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/VtTR1xstQ5I/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>주얼리 디자인학과 졸업전시회 현장스케치</span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/TsIr8f0KFMg" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/TsIr8f0KFMg/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>공주 근대문화재 해설영상</span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads education">
              <a href="https://youtu.be/Yw3a92JNcwE" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/Yw3a92JNcwE/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>2021년 사이버 주민자치 <br> 역량강화 교육</span>
                      <em>Ads / Education</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->
            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/FVVVxq6Chz0" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/FVVVxq6Chz0/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>디지털 기술로 재현한 <br> 잔무늬거울 초정밀 문양</span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/4x6ask0zcXA" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/4x6ask0zcXA/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>2021 공주 문화재 야행 <br> 홍보영상</span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads making">
              <a href="https://youtu.be/BkhNn-3T_gM" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/BkhNn-3T_gM/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>퍼즐랩 소도시모험 log <br> 현장스케치</span>
                      <em>Ads / Making film</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->
            
            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 contents">
              <a href="https://youtu.be/VU2HdhkJedA" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/VU2HdhkJedA/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>봉황큰샘 지역살아보기 <br> 프로젝트</span>
                      <em>Contents</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 contents making">
              <a href="https://youtu.be/IkldRQx-buw" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/IkldRQx-buw/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>선우정아 비온다 cover <p class="sub_title_rainning"> [ teaser ]</p></span>
                      <em>Contents / Making filem</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 fashion making">
              <a href="https://youtu.be/R1gpCnibf8U" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/R1gpCnibf8U/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>공주 문화재단 현장스케치</span>
                      <em>Making film</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/kdlj5RRoinE" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/kdlj5RRoinE/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>공주 중학동 원도심 카페 <br> 홍보영상</span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->
            
            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 contents">
              <a href="https://youtu.be/2EeFFFQcohM" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/2EeFFFQcohM/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>2020년 공주시 주민자치 <br> 박람회</span>
                      <em>Contents</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 contents">
              <a href="https://youtu.be/WX2F-s8opsY" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/WX2F-s8opsY/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>Puzzle lab 지역 살아보기 <br> 프로젝트</span>
                      <em>Contents</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 fashion ads graphics">
              <a href="https://youtu.be/0a9S4YyBSqY" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/0a9S4YyBSqY/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>공주시 어르신 친화도시조성 <br> 선포식</span>
                      <em>Ads / Graphics</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/Q5JdzQJ3eWw" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/Q5JdzQJ3eWw/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>국립중앙도서관 귀중본 <br> 포쇄 및 소독</span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/ieB2isbp3MQ" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/ieB2isbp3MQ/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>충남 시각장애인복지관 <br> 개관 10주년</span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/smpYMRJEoDg" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/smpYMRJEoDg/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>2021 KAIST 교육혁신 성과사례</span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/H3S0oFkLxZM" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/H3S0oFkLxZM/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>국립중앙박물관 <p class="sub_title_mammoth">[ 호모사피엔스: 진화∞관계&미래 ]</p></span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads making">
              <a href="https://youtu.be/BYIrZi1LxQw" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/BYIrZi1LxQw/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>국립중앙박물관 <p class="sub_title_mammoth">[ 호모사피엔스: 진화∞관계&미래? ] <br> Teaser </p> </span>
                      <em>Ads / Making film</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->
            
            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 making">
              <a href="https://youtu.be/pytf_PAU48E" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/pytf_PAU48E/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>초여름 공연 현장스케치</span>
                      <em>Making film</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/zdXsqhqu370" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/zdXsqhqu370/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>KAIST 온.오프라인 비대면 교육 <br> 혁신 콘텐츠</span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 making">
              <a href="https://youtu.be/2cQSyqSXusY" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/2cQSyqSXusY/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>충청남도 문화재단 <p class="sub_title_project">'생애전환 프로젝트'</p></span>
                      <em>Making film</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 making">
              <a href="https://youtu.be/eJufEEVeCOM" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/eJufEEVeCOM/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>퍼즐랩 로컬발굴단 현장스케치</span>
                      <em>Making film</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->
            
            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 ads">
              <a href="https://youtu.be/_O6atOpI1ig" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/_O6atOpI1ig/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>2020 공주시 주민자치 <br> 성과보고회 보고영상</span>
                      <em>Ads</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 contents">
              <a href="https://youtu.be/Uwiov3dTXYk" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/Uwiov3dTXYk/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>충청남도 청소년 진흥원 <br> 직업체험</span>
                      <em>Contents</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 contents">
              <a href="https://youtu.be/or_vDaBnDZk" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/or_vDaBnDZk/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>Puzzle lab 랜선여행</span>
                      <em>Contents</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->

            <!-- portfolio work -->
            <div class="col-md-4 col-sm-6 contents">
              <a href="https://youtu.be/eDeo10H37ek" class="portfolio_item" target="_blank">
               <img src="https://i.ytimg.com/vi/eDeo10H37ek/sddefault.jpg" alt="image" class="img-responsive" />
                <div class="portfolio_item_hover">
                  <div class="portfolio-border clearfix">
                    <div class="item_info">
                      <span>청소년 전용공간 <p class="sub_title_1318">'청춘1318' online 집들이</p></span>
                      <em>contents</em>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <!-- end portfolio work -->


          </div>
          <!-- end portfolio_container -->
        </div>
        <!-- portfolio -->
      </div>
      <!-- end portfolio div -->

      <!-- load-more-button -->
      <!-- <div class="row">
        <div class="col-md-12">
            <div class="load-more-button">
                <a href="#">Load More</a>
            </div>
        </div>
      </div> -->
      <!-- end load-more-button -->
    </div>
    <!-- end main container -->

    <!-- header -->
		<?php
      include_once(G5_THEME_PATH.'/header_part.php');
    ?>
  </div>
  
  <!-- Section : contact -->
  <section class="cd-section" id="contact">
    <div>
      <div class="content">
        <div class="contact-inner">
          <div class="contact-feature">
            <div class="contact-form">
              <h3><b>Contact</b> Us</h3>
              <p>Hello, Contact us anytime.</p>
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

  <!-- footer -->
  <!-- <div class="footer">
    <div class="container-fluid">
        <p class="copyright">&copy; Make production All Rights Reserved.</p>
    </div>
  </div> -->
  <!-- end footer -->

  <a href="#" class="gototop"><img src="/images/gototop.png"></a>
  
  <!-- <nav>
    <ul class="cd-vertical-nav">
      <li><a href="#0" class="cd-prev inactive">Next</a></li>
      <li><a href="#0" class="cd-next">Prev</a></li>
    </ul>
  </nav> -->
  

   <!-- jQuery -->
   <script src="/js/jquery-2.1.1.js"></script>
   <!--  plugins -->
   <script src="/js/bootstrap.min.js"></script>
   <script src="/js/isotope.pkgd.min.js"></script>
 
   <!--  custom script -->
   <script src="/js/custom.js"></script>
   <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main class="main-root">
    <div id="dsn-scrollbar">
        <header>
            <div class="container header-hero">
                <div class="row">
                <div class="col-lg-6">
                    <div class="contenet-hero">
                    <h5>Location</h5>
                    <h1>Contact</h1>
                    </div>
                </div>
                </div>
            </div>
        </header>

    <div class="wrapper">
    <div class="root-contact">
        <div class="container-fluid">
        <div class="map-custom" id="map" data-dsn-lat="36.4528689" data-dsn-len="127.1223981" data-dsn-zoom="17">
        </div>
        </div>

        <div class="container section-margin">
        <div class="row">
            <div class="col-lg-6">
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
                    <a href="mailto:miraedostudio@gmail.com">miraedostudio@gmail.com</a>
                </li>
                <li>
                    <span>Address</span>
                    <a href="https://map.kakao.com/link/to/메이크스튜디오,36.4528689,127.1223874">충청남도 공주시 반죽동 감영길 9</a>
                </li>
                </ul>
            </div>
            </div>

            <div class="col-lg-6">
            <div class="form-box">
                <h3>문의 / 신청</h3>
                <form id="contact-form" class="form" method="post" action="contact.php" data-toggle="validator">
                <div class="messages"></div>
                <div class="input__wrap controls">
                    <div class="form-group">

                    <div class="entry">
                        <label>이름</label>
                        <input id="form_name" type="text" name="name" placeholder="이름을 입력해주세요" required="required"
                        data-error="name is required.">
                    </div>
                    <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                    <div class="entry">
                        <label>이메일</label>
                        <input id="form_email" type="email" name="email" placeholder="연락받으실 이메일을 입력해주세요"
                        required="required" data-error="Valid email is required.">
                    </div>
                    <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                    <div class="entry">
                        <label>내용</label>
                        <textarea id="form_message" class="form-control" name="message"
                        placeholder="간단하게 진행하고자 하는 프로젝트 설명해주세요" required="required"
                        data-error="Please,leave us a message."></textarea>
                    </div>
                    <div class="help-block with-errors"></div>
                    </div>

                    <div class="image-zoom" data-dsn="parallax">
                    <a href="https://forms.gle/UczxgpR7xtnnH6ds5" target="_blank"><button type="button">문의하기</button></a>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

    <section class="contact-up section-margin section-padding">
        <div class="container">
        <div class="c-wapp">
            <a href="/?p=work" class="effect-ajax">
            <span class="hiring">
                portfolio
            </span>
            <span class="career">
                See More Works
            </span>
            </a>
        </div>
        </div>
    </section>

    <footer class="footer">
            <div class="container">
                <div class="footer-links p-relative">
                    <div class="row">
                        <div class="col-md-3 dsn-col-footer">
                            <div class="footer-block">
                                <div class="footer-logo">
                                    <a href=""><img src="assets/img/logo_b.png" alt=""></a>
                                </div>

                                <div class="footer-social">

                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    <h5 class="" style="margin-top: 10px;">사업자등록번호</h5>
                                    <p>202-10-55167</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 dsn-col-footer">
                            <div class="footer-block col-menu">
                                <h4 class="footer-title">Navigation</h4>
                                <nav>
                                    <ul>
                                        <li><a href="/">HOME</a></li>
                                        <li><a href="/?p=work">PORTFOLIO</a>
                                        </li>
                                        <!-- <li><a href="#">LOCATION</a></li> -->
                                        <li><a href="/?p=contact">CONTACT</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-md-3 dsn-col-footer">
                            <div class="footer-block col-contact">
                                <h4 class="footer-title">Contact</h4>
                                <p><strong>T</strong> <span>:</span><a class="link-hover"
                                        data-hover-text="010-5120-6024" href="tel:010-5120-6024" style="width:200px;">010-5120-6024</a></p>
                                <!-- <p><strong>F</strong> <span>:</span>+001 225 3351</p> -->
                                <p class="over-hidden"><strong>E</strong> <span>:</span><a class="link-hover"
                                        data-hover-text="info@dsngrid.com" href="mailto:miraedostudio@gmail.com">miraedostudio@gmail.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3 dsn-col-footer">
                            <div class="col-address">
                                <h4 class="footer-title">Address</h4>

                                <p><a href="https://map.kakao.com/link/to/메이크스튜디오,36.4528689,127.1223874" target="_blank">충남 공주시 감영길 9</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright">
                    <div class="text-center">
                        <p>© 2020 MAKE PRODUCTION</p>
                        <div class="copright-text over-hidden">Designed by <a class="link-hover"
                                data-hover-text="DSN Grid" href="#" target="_blank">PAM FOREST</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
</main>

<!-- Wait Loader -->
<div class="wait-loader">
    <div class="loader-inner">
        <div class="loader-circle">
            <div class="loader-layer"></div>
        </div>
    </div>
</div>
<!-- // Wait Loader -->

<!-- cursor -->
<div class="cursor">

    <div class="cursor-helper cursor-view">
        <span>VIEW</span>
    </div>

    <div class="cursor-helper cursor-close">
        <span>Close</span>
    </div>

    <div class="cursor-helper cursor-link"></div>
</div>
<!-- End cursor -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/dsn-grid.js"></script>
<script src="assets/js/custom.js"></script>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_LIB_PATH.'/thumbnail.lib.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
$sql = " SELECT a.wr_id, a.wr_subject, a.wr_content, a.wr_link1, a.wr_1 FROM makeproduction.g5_write_gallery a"; /**  a join makeproduction.g5_board_file b on b.wr_id = a.wr_id WHERE b.bo_table = gallery" */
$result = sql_query($sql);
?>

<?php
    // for ($i=0; $row=sql_fetch_array($result); $i++) {
    //     print_r($row);
    // }
    // print_r($thumb);
?>

<main class="main-root">
    <div id="dsn-scrollbar">
        <header>
            <div class="container header-hero">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contenet-hero">
                            <h5>Our Work</h5>
                            <h1>Design</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="root-work">
                <div class="container ">
                    <div class="box-title" data-dsn-title="cover">
                        <h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Mockups</h2>
                    </div>

                    <div class="filterings">
                        <div class="filtering-wrap">
                            <div class="filtering">
                                <div class="selector"></div>
                                <button type="button" data-filter="*" class="active">
                                    All
                                </button>
                                <!-- <button type="button" data-filter=".ad">홍보영상</button>
                                <button type="button" data-filter=".docu">미니다큐</button>
                                <button type="button" data-filter=".sketch">현장스케치</button>
                                <button type="button" data-filter=".vlog">브이로그</button>
                                <button type="button" data-filter=".contents">콘텐츠</button>
                                <button type="button" data-filter=".education">교육영상</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="projects-list gallery">
                        <div class="item">
                        <?php
                        for ($i=0; $row=sql_fetch_array($result); $i++) {

                            $thumb = get_list_thumbnail("gallery", $row['wr_id'], "350", "200", false, true);
                            // print_r($thumb);
                            // print_r($row);
                            // echo $thumb['src'];
                            if($thumb['src']) {
                                $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
                            }
                            echo '<a href="/bbs/board.php?bo_table=gallery&wr_id=' . $row["wr_id"] . '">' . $img_content . '</a>';
                        }
                        ?>
                        </a></div>
                    </div>
                </div>
            </div>
            <section class="contact-up section-margin section-padding">
                <div class="container">
                    <div class="c-wapp">
                        <a href="/?p=contact" class="effect-ajax">
                            <span class="hiring">
                                WHERE WE ARE
                            </span>
                            <span class="career">
                                LOCATION
                            </span>
                        </a>
                    </div>
                </div>
            </section>

        </div>
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
                                        data-hover-text="info@dsngrid.com" href="mailto:makedesign0724@gmail.com">makedesign0724@gmail.com</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-3 dsn-col-footer">
                            <div class="col-address">
                                <h4 class="footer-title">Address</h4>

                                <p><a href="https://map.kakao.com/link/to/메이크프로덕션,36.4528689,127.1223874" target="_blank">충남 공주시 감영길 9</a></p>
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
<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
$sql = " SELECT a.wr_subject, a.wr_content, a.wr_link1, a.wr_1, b.bf_file FROM makeproduction.g5_write_makeproduction a join makeproduction.g5_board_file b on b.wr_id = a.wr_id WHERE b.bo_table = 'makeproduction'";
$result = sql_query($sql);
?>

<?php
    // for ($i=0; $row=sql_fetch_array($result); $i++) {
    //     print_r($row);
    // }
?>

<main class="main-root">
    <div id="dsn-scrollbar">
        <header>
            <div class="container header-hero">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contenet-hero">
                            <h5>Our WOrk</h5>
                            <h1>portfolio</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="root-work">
                <div class="container ">
                    <div class="box-title" data-dsn-title="cover">
                        <h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Projets</h2>
                    </div>

                    <div class="filterings">
                        <div class="filtering-wrap">
                            <div class="filtering">
                                <div class="selector"></div>
                                <button type="button" data-filter="*" class="active">
                                    All
                                </button>
                                <button type="button" data-filter=".ad">홍보영상</button>
                                <button type="button" data-filter=".docu">미니다큐</button>
                                <button type="button" data-filter=".sketch">현장스케치</button>
                                <button type="button" data-filter=".vlog">브이로그</button>
                                <button type="button" data-filter=".contents">콘텐츠</button>
                                <button type="button" data-filter=".education">교육영상</button>
                            </div>
                        </div>
                    </div>

                    <div class="projects-list gallery">
                        <?php
                        for ($i=0; $row=sql_fetch_array($result); $i++) { ?>
                            <div class="item <?=$row['wr_1']?>">
                                <a href="https://www.youtube.com/watch?v=<?=end(explode("/", $row['wr_link1']))?>&feature=emb_logo" class="vid"><img src="/data/file/makeproduction/<?=$row['bf_file']?>" alt="thumbnail" /></a>
                                <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/Uwiov3dTXYk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                            </div>
                        <?php
                        }
                        ?>
                        <!-- <div class="item contents">
                            <a href="https://www.youtube.com/watch?v=Uwiov3dTXYk&feature=emb_logo" class="vid"><img src="/assets/img/video/video28.png" alt="thumbnail" /></a>
                            <iframe width="100%" height="280" src="https://www.youtube.com/embed/Uwiov3dTXYk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="item ad">
                            <a href="https://www.youtube.com/watch?v=_O6atOpI1ig&feature=emb_logo" class="vid"><img src="/assets/img/video/video29.png" alt="thumbnail" /></a>
                            <iframe width="100%" height="280" src="https://www.youtube.com/embed/_O6atOpI1ig" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="item sketch">
                            <a href="https://www.youtube.com/watch?v=eJufEEVeCOM&feature=emb_logo" class="vid"><img src="/assets/img/video/video30.png" alt="thumbnail" /></a>
                            <iframe width="100%" height="280" src="https://www.youtube.com/embed/eJufEEVeCOM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="item sketch">
                            <a href="https://www.youtube.com/watch?v=2cQSyqSXusY&feature=emb_logo" class="vid"><img src="/assets/img/video/video31.png" alt="thumbnail" /></a>
                            <iframe width="100%" height="280" src="https://www.youtube.com/embed/2cQSyqSXusY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div> -->
                        <div class="item ad">
                            <a href="https://www.youtube.com/watch?v=eDeo10H37ek&feature=emb_logo" class="vid"><img src="/assets/img/video/video1.jpg" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/eDeo10H37ek" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item ad">
                            <a href="https://www.youtube.com/watch?v=or_vDaBnDZk&feature=emb_logo" class="vid"><img src="/assets/img/video/video2.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/or_vDaBnDZk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item ad">
                            <a href="https://www.youtube.com/watch?v=kWUjBop9EEI&feature=emb_logo" class="vid"><img src="/assets/img/video/video3.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/kWUjBop9EEI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <!-- <div class="item ad"> -->
                            <!-- <a href="https://www.youtube.com/watch?v=tmvTWvt0AqU&feature=emb_logo" class="vid"><img src="/assets/img/video/video4.png" alt="thumbnail" /></a> -->
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/tmvTWvt0AqU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <!-- </div>                         -->
                        <div class="item ad">
                            <a href="https://www.youtube.com/watch?v=VU2HdhkJedA&feature=emb_logo" class="vid"><img src="/assets/img/video/video5.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/VU2HdhkJedA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item ad">
                            <a href="https://www.youtube.com/watch?v=8nWFYdzGAWQ&feature=emb_logo" class="vid"><img src="/assets/img/video/video6.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/8nWFYdzGAWQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item docu">
                            <a href="https://www.youtube.com/watch?v=2EeFFFQcohM&feature=emb_logo" class="vid"><img src="/assets/img/video/video7.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/2EeFFFQcohM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item docu">
                            <a href="https://www.youtube.com/watch?v=mDvC1FMdVOo&feature=emb_logo" class="vid"><img src="/assets/img/video/video8.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/mDvC1FMdVOo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item docu">
                            <a href="https://www.youtube.com/watch?v=LTIrMLYQTDo&feature=emb_logo" class="vid"><img src="/assets/img/video/video9.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/LTIrMLYQTDo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item docu">
                            <a href="https://www.youtube.com/watch?v=8GT-7KQuWgM&feature=emb_logo" class="vid"><img src="/assets/img/video/video10.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/8GT-7KQuWgM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item docu">
                            <a href="https://www.youtube.com/watch?v=nQn9c3eFQ68&feature=emb_logo" class="vid"><img src="/assets/img/video/video11.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/nQn9c3eFQ68" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>     
                        <div class="item docu">
                            <a href="https://www.youtube.com/watch?v=PTNRUO_5T8M&feature=emb_logo" class="vid"><img src="/assets/img/video/video12.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/PTNRUO_5T8M" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div> 
                        <div class="item docu">
                            <a href="https://www.youtube.com/watch?v=3ETxJEHs1Ag&feature=emb_logo" class="vid"><img src="/assets/img/video/video13.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/3ETxJEHs1Ag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item sketch">
                            <a href="https://www.youtube.com/watch?v=wfyxpslYCMs&feature=emb_logo" class="vid"><img src="/assets/img/video/video14.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/wfyxpslYCMs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div> 
                        <div class="item sketch">
                            <a href="https://www.youtube.com/watch?v=Fv3Bi1llf5w&feature=emb_logo" class="vid"><img src="/assets/img/video/video15.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/Fv3Bi1llf5w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>      
                        <div class="item vlog">
                            <a href="https://www.youtube.com/watch?v=WUBI4OyrHjQ&feature=emb_logo" class="vid"><img src="/assets/img/video/video16.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/WUBI4OyrHjQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item contents">
                            <a href="https://www.youtube.com/watch?v=6Mi-JKrs4zA&feature=emb_logo" class="vid"><img src="/assets/img/video/video17.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/6Mi-JKrs4zA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item contents">
                            <a href="https://www.youtube.com/watch?v=job8rnG5MEY&feature=emb_logo" class="vid"><img src="/assets/img/video/video18.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/job8rnG5MEY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item contents">
                            <a href="https://www.youtube.com/watch?v=rFL86k7EvnY&feature=emb_logo" class="vid"><img src="/assets/img/video/video19.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/rFL86k7EvnY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item contents">
                            <a href="https://www.youtube.com/watch?v=ysP-VRFPbuU&feature=emb_logo" class="vid"><img src="/assets/img/video/video20.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/ysP-VRFPbuU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item contents">
                            <a href="https://www.youtube.com/watch?v=hxu5hgbQFOA&feature=emb_logo" class="vid"><img src="/assets/img/video/video22.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/hxu5hgbQFOA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item contents">
                            <a href="https://www.youtube.com/watch?v=PHIWIa83oIc&feature=emb_logo" class="vid"><img src="/assets/img/video/video23.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/PHIWIa83oIc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item contents">
                            <a href="https://www.youtube.com/watch?v=rx4Rs_zNEgo&feature=emb_logo" class="vid"><img src="/assets/img/video/video24.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/rx4Rs_zNEgo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item education">
                            <a href="https://www.youtube.com/watch?v=8KnCem_PMLw&feature=emb_logo" class="vid"><img src="/assets/img/video/video25.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/8KnCem_PMLw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item education">
                            <a href="https://www.youtube.com/watch?v=ysP-VRFPbuU&feature=emb_logo" class="vid"><img src="/assets/img/video/video26.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/ysP-VRFPbuU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                        <div class="item education">
                            <a href="https://www.youtube.com/watch?v=bHr6iTXHR_w&feature=emb_logo" class="vid"><img src="/assets/img/video/video27.png" alt="thumbnail" /></a>
                            <!-- <iframe width="100%" height="280" src="https://www.youtube.com/embed/bHr6iTXHR_w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>   
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
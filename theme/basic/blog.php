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

<style>
    .blog_info {
        margin-top: 20px;
        font-size: 16px;
    }
    .blog_title {
        font-size: 18px;
    }
    .blog_desc {
        display: flex;
        justify-content: space-between;
        margin-top: 5px;
    }
    .blog_category, .blog_pudDate {
        display: inline-block;
    }
</style>

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
                            <h5>Our News</h5>
                            <h1>Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="root-work">
                <div class="container ">
                    <div class="box-title" data-dsn-title="cover">
                        <h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Blog</h2>
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
                    <?php
        function readHtmlFile($url) {
            $info = parse_url($url);
        
            $host = $info["host"];
            $port = $info["port"];
            if ($port == 0) $port = 80;
        
    
            $path = $info["path"];
            if ($info["query"] != "") $path .= "?" . $info["query"];
            $out = "GET $path HTTP/1.0\r\nHost: $host\r\n\r\n";
            $fp = fsockopen($host, $port, $errno, $errstr, 30);
            if (!$fp) {
                echo "$errstr ($errno) <br>\n";
            }
    
            else {
    
                fputs($fp, $out);
                $start = false;
                $retVal = "";
    
                while(!feof($fp)) {
                    $tmp = fgets($fp, 1024);
                    if ($start == true) $retVal .= $tmp;
                    if ($tmp == "\r\n") $start = true;
                }
    
                fclose($fp);
                // echo $retVal;
                return $retVal;
            }
        }
     
     
        $xml_string = "https://rss.blog.naver.com/fhjskk1.xml";
        //$xml_string = iconv($enc,'UTF-8',$xml_string);
        $xmlstr = readHtmlFile($xml_string);
        $xml = simplexml_load_string(trim($xmlstr));
        
        //var_dump($xml);
        // print_r($xml);
        
        // echo sizeof($xml->channel->item). "개 <br><br>";
        $arr_blog_img = [
            "/assets/img/blog_image.jpg",
            // "https://phinf.pstatic.net/image.nmv/blog_2021_01_26_3198/b5c8d5b6-5f81-11eb-bb05-48df379cc9e4_01.jpg?type=f238x238",
            // "https://postfiles.pstatic.net/MjAyMTAxMjBfMTM1/MDAxNjExMTA1MjcxMjg1.LIRVdYECHb7snbMQJaBNUSJ8cBWD8DEIRYhIm9w_wGMg.RUKoji3S3uCgWLjqdSN-T0ZosH-ju4OEorq0dP9IYuYg.JPEG.fhjskk1/IMG_1184.jpg?type=f238",
            // "https://phinf.pstatic.net/image.nmv/blog_2021_01_15_2128/7135e953-570a-11eb-a4d6-48df37ae3dc4_02.jpg?type=f238x238",
            // "https://postfiles.pstatic.net/MjAyMTAxMTFfMzIg/MDAxNjEwMzQxNTc5OTAy.oHrbFN4TGp0qPx88eODj71tSYQwtwHUiDThiY3RfOjgg.MGnYIyLM83sZzhuMAd4dohD3Kny2J-510GH9O9Cc0jwg.PNG.fhjskk1/image.png?type=f238",
            // "https://phinf.pstatic.net/image.nmv/blog_2020_11_06_968/39486129-1fd2-11eb-9751-505dac8c381b_03.jpg?type=f238x238"
        ];            
        $html = "";
        for ($i=0;$i<sizeof($xml->channel->item);$i++) {
            $html .= '<div class="item"><a href="';
            // echo $i."번 : ";
        
            // echo $xml->channel->item[$i]->title . "<br>";
            // echo $xml->channel->item[$i]->link . "<br>";
            $html .= $xml->channel->item[$i]->link;
            $html .= '" target="_blank"';
        
            if (isset($xml->channel->item[$i]->children('media', True)->content)) {
                // echo $xml->channel->item[$i]->children('media', True)->content->attributes()['url'] . "<br>";
                $html .= $xml->channel->item[$i]->children('media', True)->content->attributes()['url'];
            }
            // echo "<br><br>";
            $html .= ' class="vid"><img src="';
            $html .= $arr_blog_img[0];
            $html .= '" alt="thumbnail" /></a>';
            $html .= ' <div class="blog_info">';
            $html .= ' <div class="blog_title"><strong>'  . $xml->channel->item[$i]->title . '</strong></div>';
            $html .= ' <div class="blog_desc"><div class="blog_category">CATEGORY : '  . $xml->channel->item[$i]->category . '</div>';
            // $html .= ' <div class="blog_description">'  . $xml->channel->item[$i]->description . '</div>';
            $html .= ' <div class="blog_pubDate">'  . date("Y-m-d", strtotime($xml->channel->item[$i]->pubDate)) . '</div></div>';
            $html .= ' </div>';
            $html .= ' </div>';
        }
        echo $html;
        ?>
                    </div>
                </div>
            </div>

<?php
//   $client_id = "6vdKI5eZzXpKraQb6YX7";
//   $client_secret = "rqDrtYgir5";
//   $encText = urlencode("메이크프로덕션");
//   $url = "https://openapi.naver.com/v1/search/blog.xml?query=".$encText; // json 결과
// //  $url = "https://openapi.naver.com/v1/search/blog.xml?query=".$encText; // xml 결과
//   $is_post = false;
//   $ch = curl_init();
//   curl_setopt($ch, CURLOPT_URL, $url);
//   curl_setopt($ch, CURLOPT_POST, $is_post);
//   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//   $headers = array();
//   $headers[] = "X-Naver-Client-Id: ".$client_id;
//   $headers[] = "X-Naver-Client-Secret: ".$client_secret;
//   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//   $response = curl_exec ($ch);
//   $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//   echo "status_code:".$status_code."
// ";
//   curl_close ($ch);
//   if($status_code == 200) {
//     echo $response;
//   } else {
//     echo "Error 내용:".$response;
//   }
?>

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
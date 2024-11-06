<!DOCTYPE html>
<html>
<head>
    <?php  
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html-root/meta.html";
        $file = file_get_contents($path, true);
        include $_SERVER['DOCUMENT_ROOT'].'/config/title.php';
        echo $file;
    ?>
</head>

<body>
    <?php 
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html-root/updates.html";
        $notification = file_get_contents($path, true);
        echo $notification;
    ?>
    <div class="language-panel lang-pa">
        <div class="sel-title">
            <div class="inline-sel-title" onclick="$('.lang-pa').removeClass('language-panel-showed')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="inline-sel-title title-after-icon">
                <?php
                    switchLang('เปลี่ยนภาษา','ປ່ຽນພາສາ','Thay đổi ngôn ngữ','Change Language');
                ?>        
            </div>
        </div>
        <div class="list-lang-container">
            <a 
                <?php
                    echo 'href="';
                    $lang = 'th';
                    $cnt = explode('/', $_GET['lang'])[1];
                    echo '/'.$lang.'/'.$cnt.'/';
                    echo '"';
                ?>
            >ภาษาไทย</a>
            <a 
                <?php
                    echo 'href="';
                    $lang = 'la';
                    $cnt = explode('/', $_GET['lang'])[1];
                    echo '/'.$lang.'/'.$cnt.'/';
                    echo '"';
                ?>
            >ພາສາລາວ</a>
            <a 
                <?php
                    echo 'href="';
                    $lang = 'en';
                    $cnt = explode('/', $_GET['lang'])[1];
                    echo '/'.$lang.'/'.$cnt.'/';
                    echo '"';
                ?>
            >English</a>
            <a 
                <?php
                    echo 'href="';
                    $lang = 'vi';
                    $cnt = explode('/', $_GET['lang'])[1];
                    echo '/'.$lang.'/'.$cnt.'/';
                    echo '"';
                ?>
            >Tiếng Việt</a>
        </div>
    </div>
    <div class="language-panel view-des-meta">
        <div class="sel-title">
            <div class="inline-sel-title" onclick="$('.view-des-meta').removeClass('language-panel-showed')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="inline-sel-title title-after-icon">
                <?php
                    switchLang('ข้อมูลเกี่ยวกับอันนี้','ຂໍ້ມຸນກ່ຽວກັບອັນນີ້','Thông tin về cái này','Information about this');
                ?>        
            </div>
        </div>
        <div class="list-lang-container">
            pokemon, gumball (the amazing world of gumball), hyouka, conan, my hero academia, amphibia, the owl house, we bare bears, phineas and ferb and milo murphy's laws 
        </div>
    </div>
    <div id="container align-middle-container">
        <div class="contain-wrapper align-middle-container">
            <div class="inner-wrapper align-middle-container">            
                <div class="box-main fade-in-bottom align-middle-container">
                    <div class="inner-box-main">
                        <div class="inline-box-main about-section position-relative">
                            <div class="inline-box-main-section select-language-top inline-select-language full-only">
                                <a href="#" 
                                    <?php
                                        echo 'title="';
                                        switchLang('เปลี่ยนภาษา','ປ່ຽນພາສາ','Thay đổi ngôn ngữ','Change Language');
                                        echo '"';
                                    ?>
                                    onclick="$('.lang-pa').addClass('language-panel-showed')"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                                        <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                                        <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                                    </svg>                                    
                                </a> 
                            </div>

                            <div class="inline-box-main-section main-inner">
                                <div class="main-inner-avatar incolumn-object-main-inner">
                                    <img src="/images/favicon.png">
                                </div>
                                <div class="incolumn-object-main-inner">
                                    <div class="big-name">
                                        <?php
                                            switchLang('นี่คือข้อมูลเกี่ยวกับฉัน','ກ່ຽວກັບຂ້ອຍ','Giới thiệu về tôi','this is information About me')
                                        ?>
                                    </div>
                                </div>
                                <div class="incolumn-object-main-inner">
                                    <div class="big-name-2">
                                        <?php
                                            switchLang('@sinnohsatoshi.1203','@sinnohsatoshi.1203','@sinnohsatoshi.1203','@sinnohsatoshi.1203')
                                        ?>
                                    </div>
                                </div>
                                <div class="incolumn-object-main-inner">
                                    <div class="des-text" style="max-width: 380px;">
                                        
                                        <?php
                                            switchLang('เรื่องไหนไม่จำเป็นก็ไม่ทำ เรื่องไหนจำเป็นก็ทำให้เสร็จโดยเร็วที่สุด','ເລື່ອງໃດທີ່ບໍ່ຈຳເປັນກໍບໍ່ຕ້ອງເຮັດ ບໍ່ຢ່າງນັ້ນກໍເຮັດໃຫ້ສໍາເລັດໂດຍເລັວທີ່ສຸດ','việc gì không phải làm thì khỏi làm, còn không thì phải làm thật nhanh','If I don\'t have to do it, I won\'t. Otherwise, I have to finish it quickly')
                                        ?>
                                    </div>
                                </div>
                                <div class="incolumn-object-main-inner">

                                    <div class="incolumn-object-main-inner">
                                        <div class="des-text" style="margin-top: 15px">
                                            <?php
                                                switchLang('เพื่อดูหน้าแรกขอกด','ນີ້ຄືຂໍ້ມູນເພື່ອເບິ່ງໜ້າທຳອິດຂໍກົດ','Để xem trang chủ xin nhấp','To view homepage, please click');
                                            ?>
                                            <a 
                                                <?php
                                                    echo 'href="';
                                                    $lang = explode('/', $_GET['lang'])[0];
                                                    echo '/'.$lang.'/welcome/';
                                                    echo '"';
                                                ?>
                                            >
                                                <?php
                                                    switchLang('ตรงนี้','ທີນີ້','ở đây','here')
                                                ?>    
                                            </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inline-box-main-section select-language position-bottom">
                                <div class="sel-panel inline-select-language ">
                                    <a 
                                        <?php
                                            echo 'href="';
                                            $lang = 'th';
                                            $cnt = explode('/', $_GET['lang'])[1];
                                            echo '/'.$lang.'/'.$cnt.'/';
                                            echo '"';
                                        ?>
                                    >ภาษาไทย</a>
                                    <a 
                                        <?php
                                            echo 'href="';
                                            $lang = 'la';
                                            $cnt = explode('/', $_GET['lang'])[1];
                                            echo '/'.$lang.'/'.$cnt.'/';
                                            echo '"';
                                        ?>
                                    >ພາສາລາວ</a>
                                    <a 
                                        <?php
                                            echo 'href="';
                                            $lang = 'en';
                                            $cnt = explode('/', $_GET['lang'])[1];
                                            echo '/'.$lang.'/'.$cnt.'/';
                                            echo '"';
                                        ?>
                                    >English</a>
                                    <a 
                                        <?php
                                            echo 'href="';
                                            $lang = 'vi';
                                            $cnt = explode('/', $_GET['lang'])[1];
                                            echo '/'.$lang.'/'.$cnt.'/';
                                            echo '"';
                                        ?>
                                    >Tiếng Việt</a>
                                </div>
                            </div>
                            <div class="inline-box-main-section position-bottom full-only next-button">
                                <div class="sel-panel button-border" onclick="var vh = window.innerHeight - 30;window.scroll(0,vh)">
                                    <div class="button-border-wrapper">
                                        <div>
                                            <?php
                                                switchLang('ต่อไป','ຕໍ່ໄປ','Tiếp theo','Next')
                                            ?> &nbsp;
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inline-box-main control-section">
                            <div class="inline-box-main-section container-panel-2">
                                <div class="big-name">
                                    <?php
                                        switchLang('เกี่ยวกับฉัน','ກ່ຽວກັບຂ້ອຍ','Giới thiệu về tôi',' about me')
                                    ?>       
                                </div>
                                <div class="slider-tab-controls big-button-container ">
                                    <div class="swiper-wrapper">
                                        
                                        <a class="swiper-slide" title="Age">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z"/>
                                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                            </svg>
                                            <div class="big-name">
                                                18
                                            </div>
                                        </a>
                                        <a class="swiper-slide" title="Gender">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M9.5 2a.5.5 0 0 1 0-1h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.707L9.871 6.836a5 5 0 1 1-.707-.707L13.293 2H9.5zM6 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                                            </svg>
                                            <div class="big-name">
                                                <?php
                                                    switchLang('ผู้ชาย','ຜູ້ຊາຍ','nam','male')
                                                ?>
                                            </div>
                                        </a>
                                        
                                        <a class="swiper-slide" title="my personalities">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                            <div class="big-name">
                                               istj
                                            </div>
                                        </a>
                                        <a class="swiper-slide" title="cartoon fan" onclick="$('.view-des-meta').addClass('language-panel-showed')" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M6 12c0 .667-.083 1.167-.25 1.5H5a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-.75c-.167-.333-.25-.833-.25-1.5h4c2 0 2-2 2-2V4c0-2-2-2-2-2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h4z"/>
                                            </svg>
                                            <div class="big-name" >
                                                <?php switchLang('โปเกมอน กัมบอล ... (ดูเพิ่มเติม)','pokemon, gumball... (ເບິ່ງເພິ່ມເຕິມ)', 'pokemon, gumball... (xem thêm)','pokemon, gumball and... (view more)'); ?>
                                            </div>
                                        </a>
                                        
                                    </div>                             
                                </div>
                            </div>
                            <div class="inline-box-main-section position-bottom full-only next-button">
                                <div class="sel-panel button-border" onclick="window.scroll(0,0)">
                                    <div class="button-border-wrapper">
                                        <div>
                                            <?php
                                                switchLang('กลับไป','ກັບໄປ','Trở về','Back')
                                            ?> &nbsp;
                                        </div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        window.scroll(0,0);window.scroll(0,0);window.scroll(0,0);window.scroll(0,0)
    });
    var keys = {37: 1, 38: 1, 39: 1, 40: 1};
    function preventDefault(e) {
      e.preventDefault();
    }

    function preventDefaultForScrollKeys(e) {
      if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
      }
    }

    // modern Chrome requires { passive: false } when adding event
    var supportsPassive = false;
    try {
      window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
        get: function () { supportsPassive = true; } 
      }));
    } catch(e) {}

    var wheelOpt = supportsPassive ? { passive: false } : false;
    var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

    // call this to Disable
    function disableScroll() {
      window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
      window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
      window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
      window.addEventListener('keydown', preventDefaultForScrollKeys, false);
    }
    function enableScroll() {
      window.removeEventListener('DOMMouseScroll', preventDefault, false); // older FF
      window.removeEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
      window.removeEventListener('touchmove', preventDefault, wheelOpt); // mobile
      window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
    }

    
    
    $(window).resize(function() {
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.next-button').hide()
            $(".swiper-wrapper").css("height", "auto");
            $(".swiper-wrapper").css("display", "block");
        } else {
            dragSlide('big-button-container');
            if (window.innerWidth > 980) 
            {
                if (window.innerHeight > 456 ) 
                {
                    disableScroll()
                    window.scroll(0,0)
                } else {
                    enableScroll()
                }               
            } else {
                if (window.innerWidth <= 980 && window.innerWidth >= 400) {
                    if (window.innerHeight > 456) {
                        disableScroll()
                        window.scroll(0,0)
                    } else {
                        enableScroll()
                    } 
                } else {
                    enableScroll()
                }
            }         
            if (window.innerWidth > 980) {$('.language-panel').removeClass('language-panel-showed')}
            
        }
    });
    $(window).load(function() {
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

        } else {
            dragSlide('big-button-container');
        }
    });
     $(document).ready(function() {
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

        } else {
            dragSlide('big-button-container');
        }

        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )  {
            $('.next-button').hide()
            $(".swiper-wrapper").css("height", "auto");
            $(".swiper-wrapper").css("display", "block");
        } else {
            dragSlide('big-button-container');
            if (window.innerWidth > 980) 
                {
                    if (window.innerHeight > 456 ) 
                    {
                        disableScroll()
                        window.scroll(0,0)
                    } else {
                        enableScroll()
                    }               
                } else {
                    if (window.innerWidth <= 980 && window.innerWidth >= 400) {
                        if (window.innerHeight > 456) {
                            disableScroll()
                            window.scroll(0,0)
                        } else {
                            enableScroll()
                        } 
                    } else {
                        enableScroll()
                    }
                }        
            if (window.innerWidth > 980) {$('.language-panel').removeClass('language-panel-showed')}
        }
    });
</script>

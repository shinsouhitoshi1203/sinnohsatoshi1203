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
            <div class="inline-sel-title title-after-icon" >
                <?php
                    switchLang('เปลี่ยนภาษา','ປ່ຽນພາສາ','thay đổi ngôn ngữ','change language');
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
            >english</a>
            <a 
                <?php
                    echo 'href="';
                    $lang = 'vi';
                    $cnt = explode('/', $_GET['lang'])[1];
                    echo '/'.$lang.'/'.$cnt.'/';
                    echo '"';
                ?>
            >tiếng việt</a>
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
                                        switchLang('เปลี่ยนภาษา','ປ່ຽນພາສາ','thay đổi ngôn ngữ','change language');
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
                                            switchLang('ยินดีต้อนรับเข้าสู่เว็บไซต์','ຍິນດີຕ້ອນຮັບເຂົ້າສູ່ເວັບໄຊ','chào mừng bạn đến với website','welcome to the website of')
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
                                    <div class="des-text">
                                        <?php
                                            switchLang('ผมเป็นแฟนตัวยงของอนิเมะและการ์ตูนเรื่องต่างๆรการ์ตูน','ຂ້ອຍເປັນແຟນຕົວຍົງຂອງກາຣ໌ຕຸນ ແລະອະນິເມະເລື່ອງຕ່າງໆ','tôi là fan của các bộ hoạt hình và anime','i\'m a huge fan of cartoons and animes')
                                        ?>
                                    </div>
                                </div>
                                <div class="incolumn-object-main-inner">
                                    <div class="des-text" style="margin-top: 15px">

                                        <?php
                                            switchLang('เพื่อดูข้อมูลเพิ่มเติมเกี่ยวกับฉัน ขอกด','ເພື່ອເບິ່ງຂໍ້ມຸນເພິ່ມເຕິມກ່ຽວກັບຂ້ອຍຂໍກົດ','để xem thông tin của tôi xin nhấp','to view more information about me, please click');
                                        ?>
                                        <a 
                                            <?php
                                                echo 'href="';
                                                $lang = explode('/', $_GET['lang'])[0];
                                                echo '/'.$lang.'/about/';
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
                                    >english</a>
                                    <a 
                                        <?php
                                            echo 'href="';
                                            $lang = 'vi';
                                            $cnt = explode('/', $_GET['lang'])[1];
                                            echo '/'.$lang.'/'.$cnt.'/';
                                            echo '"';
                                        ?>
                                    >tiếng việt</a>
                                </div>
                            </div>
                            <div class="inline-box-main-section position-bottom full-only next-button">
                                <div class="sel-panel button-border" onclick="var vh = window.innerHeight - 30;window.scroll(0,vh);">
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
                                    <a href="javascript:tabNavigator('menu')">
                                        <?php
                                            switchLang('เมนู','ເມນູ','menu','menu')
                                        ?>   
                                    </a>
                                     | 
                                    <a href="javascript:tabNavigator('con')">
                                        <?php
                                            switchLang('ติดต่อ','ຕິດຕໍ່','liên hệ','contact us')
                                        ?>   
                                    </a>      
                                </div>
                                <div class="slider-tab-controls big-button-container ">
                                    <div class="swiper-wrapper">
                                        
                                        <a class="swiper-slide contact-tab dc" href="https://discord.com/users/1049182897678065737">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                                            </svg>
                                            <div class="big-name">
                                                shinsouhitoshi.heroaca
                                            </div>
                                        </a>                                        
                                        <a class="swiper-slide menu-tab gm" href="//youtube.com/@sinnohsatoshi.1203">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                                            </svg>
                                            <div class="big-name">
                                                sinnohsatoshi.1203
                                            </div>
                                        </a>
                                        <a class="swiper-slide menu-tab gt" href="https://github.com/shinsouhitoshi1203">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                            </svg>
                                            <div class="big-name">
                                            shinsouhitoshi1203
                                            </div>
                                        </a>
                                        <a class="swiper-slide contact-tab gm" href="javascript:;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                            </svg>
                                            <div class="big-name">
                                                houtarouhyouka.1203@outlook.co.th
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
                                                switchLang('กลับไป','ກັບໄປ','trở về','go back')
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
    function tabNavigator (a) {
        $('.swiper-slide').removeClass('hidden')
        if (a == 'menu') {
            $('.contact-tab').addClass('hidden')
        } else {
            $('.menu-tab').addClass('hidden')
        }
    }
    tabNavigator('menu')
</script>

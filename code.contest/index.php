<!DOCTYPE html>
<html>
<head>
    <?php  
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/code.contest/html-root/meta.html";
        $file = file_get_contents($path, true);
        include $_SERVER['DOCUMENT_ROOT'].'/code.contest/config/title.php';
        echo $file;
    ?>

</head>

<body>
    <div class="language-panel lang-pa">
        <div class="sel-title">
            <div class="inline-sel-title" onclick="$('.lang-pa').removeClass('language-panel-showed')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div class="inline-sel-title title-after-icon" >
                switch mode ::
            </div>
        </div>
        <div class="list-lang-container">
            <a 
                href="rules" 
            >contest rules</a>
            <a 
                href="contestants" 
            >contestants</a>
            <a 
                href="problems" 
            >problems</a>
            <a 
                href="/index.php" 
            >homepage</a>
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
                                        echo 'title="navigate"';
                                    ?>
                                    onclick="$('.lang-pa').addClass('language-panel-showed')"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                                        <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"/>

                                    </svg>                                    
                                </a> 
                            </div>

                            <div class="inline-box-main-section main-inner">
                                <div class="main-inner-avatar incolumn-object-main-inner">
                                    <img src="https://media.discordapp.net/attachments/1068112337724252281/1074562927274758144/9a67a26d1b7ee6b0e8f3c784d43de6d1.png">
                                </div>
                                <div class="incolumn-object-main-inner">
                                    <div class="big-name">
                                        houtarou x project presenting
                                    </div>
                                </div>
                                <div class="incolumn-object-main-inner">
                                    <div class="big-name-2">
                                        <?php
                                            echo 'project.powercode.contest #1';
                                        ?>
                                    </div>
                                </div>
                                <div class="incolumn-object-main-inner">
                                    <div class="des-text" style="margin-top: 15px;">
                                        this is a coding contest hosted by houtarouhyouka.1203
                                    </div>
                                </div>
                                <div class="incolumn-object-main-inner">
                                    <div class="des-text">
                                        the winner will get a month of nitro basic for free
                                    </div>
                                </div>
                                <div class="incolumn-object-main-inner">
                                    <div class="des-text" style="margin-top: 15px">
                                        to view the rules of contest, please click
                                        <a 
                                            href="rules" 
                                        >
                                            here    
                                        </a> 
                                    </div>
                                </div>
                            </div>
                            <div class="inline-box-main-section select-language position-bottom">
                                <div class="sel-panel inline-select-language ">
                                    <a 
                                        href="rules" 
                                    >contest rules</a>
                                    <a 
                                        href="contestants" 
                                    >contestants</a>
                                    <a 
                                        href="problems" 
                                    >problems</a>

                                    <a 
                                        href="/homepage" 
                                    >homepage</a>
                                </div>
                            </div>
                            <div class="inline-box-main-section position-bottom full-only next-button">
                                <div class="sel-panel button-border" onclick="var vh = window.innerHeight - 30;window.scroll(0,vh)">
                                    <div class="button-border-wrapper">
                                        <div>
                                            view more &nbsp;
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
                                    switch mode ::         
                                </div>
                                <div class="slider-tab-controls big-button-container ">
                                    <div class="swiper-wrapper">
                                        <a class="gra swiper-slide " href="problems">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                                            </svg>
                                            <div class="big-name"> 
                                                code.contest now
                                            </div>
                                        </a>
                                        <a class="swiper-slide dc" href="contestants">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                            </svg>      
                                            <div class="big-name">
                                                contestants
                                            </div>
                                        </a>
                                        <a class="swiper-slide ws" href="result">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                                                <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
                                            </svg>      
                                            <div class="big-name">
                                                contest's result
                                            </div>
                                        </a>
                                        <a class="swiper-slide fb" href="../">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                            </svg>      
                                            <div class="big-name">
                                                homepage — sinnohsatoshi.1203
                                            </div>
                                        </a>
                                    </div>                             
                                </div>
                            </div>
                            <div class="inline-box-main-section position-bottom full-only next-button">
                                <div class="sel-panel button-border" onclick="window.scroll(0,0)">
                                    <div class="button-border-wrapper">
                                        <div>
                                            go back &nbsp;
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
      if (keys[e.keycode.contest]) {
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
        if (window.innerWidth > 970) 
            {
                if (window.innerHeight > 456 ) 
                {
                    disableScroll()
                    window.scroll(0,0)
                } else {
                    enableScroll()
                }               
            } else {
                if (window.innerWidth <= 970 && window.innerWidth >= 400) {
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
        if (window.innerWidth > 970) {$('.language-panel').removeClass('language-panel-showed')}
    }
    
    $(window).resize(function() {
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('.next-button').hide()
            $(".swiper-wrapper").css("height", "auto");
            $(".swiper-wrapper").css("display", "block");
        } else {
            dragSlide('big-button-container');
            if (window.innerWidth > 970) 
            {
                if (window.innerHeight > 456 ) 
                {
                    disableScroll()
                    window.scroll(0,0)
                } else {
                    enableScroll()
                }               
            } else {
                if (window.innerWidth <= 970 && window.innerWidth >= 400) {
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
            if (window.innerWidth > 970) {$('.language-panel').removeClass('language-panel-showed')}
            
        }
    });
    
     
</script>

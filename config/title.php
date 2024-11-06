<?php

ob_start(); 

//Chạy session
if (session_status() === PHP_SESSION_NONE) {session_start();}
session_destroy();
//Mặc định các biến mảng toàn cục
//a. Danh sách mảng

//b. Danh sách biến
$numPostEachRequest = 3;
$nameTV=$nameKeyword=$yearReleased=$genreSelect=$countrySelect=$ratedSelect=$arrangeSelect='';

assignTitle();

//Format Title 
function assignTitle(){
    global $arrayGenre, $arrayYear, $arrayTVRated, $arrayCountry;
    $title_str = "<title>";
    $title_end = "</title>";
    $title = 'sinnohsatoshi.1203';
    $actual_uri = $_SERVER['REQUEST_URI'];
    $meta_filter = "";

    if (strpos($actual_uri, '/welcome') === 3) {
        $homepage = explode('/', $actual_uri)[1];
        switch ($homepage) {
            case 'th':
                $homepage = ' - หน้าแรก';
                break;
            case 'la':
                $homepage = ' - ໜ້າທຳອິດ';
                break;
            case 'vi':
                $homepage = ' - trang chủ';
                break;
            default:
                $homepage = ' - homepage';
                break;
        }
    	echo $title_str.$title.$homepage.$title_end;
    } elseif (strpos($actual_uri, '/about') === 3) {
    	$homepage = explode('/', $actual_uri)[1];
        switch ($homepage) {
            case 'th':
                $homepage = ' - เกี่ยวกับฉัน';
                break;
            case 'la':
                $homepage = ' - ກ່ຽວກັບຂ້ອຍ';
                break;
            case 'vi':
                $homepage = ' - giới thiệu';
                break;
            default:
                $homepage = ' - about me';
                break;
        }
        echo $title_str.$title.$homepage.$title_end;
    } elseif (strpos($actual_uri, '/privacy') === 0) {
    	echo $title_str.'Privacy '.$title.$title_end;
    } elseif (strpos($actual_uri, '/shows/all') === 0) {
    	echo $title_str.'Watch TV shows and Anime in '.$title.$title_end;
    } elseif (strpos($actual_uri, '/genres/') === 0) {
    	$meta_filter = explode('/', $actual_uri)[2];
    	echo $title_str.'Watch '.$meta_filter.' TV Shows / Anime in '.$title.$title_end;
    } elseif (strpos($actual_uri, '/year/') === 0) {
    	$meta_filter = explode('/', $actual_uri)[2];
    	echo $title_str.'Watch '.$meta_filter.' TV Shows / Anime in '.$title.$title_end;
    } elseif (strpos($actual_uri, '/rated/') === 0) {

    	$meta_filter = explode('/', $actual_uri)[2];
    	$meta_filter = strtolower($meta_filter);
    	$meta_filter = str_replace("%20", " ", $meta_filter);
    	$other = strtolower($arrayTVRated[5]);
    	$allages = strtolower($arrayTVRated[0]);
    	$arrayModified = str_replace('+', '', array_map('strtolower', $arrayTVRated));
    	//echo '<script>alert("'.$allages.'")</script>';

    	if (is_numeric($meta_filter)===true & in_array($meta_filter, $arrayModified)) {
    		echo $title_str.'Watch '.$meta_filter.'+ TV Shows / Anime in '.$title.$title_end;
    	} elseif ($meta_filter == $other) {
    		echo $title_str.'Watch Other TV shows and Anime in '.$title.$title_end;
    	} elseif ($meta_filter == $allages) {
    		echo $title_str.'Watch TV shows and Anime for all ages in '.$title.$title_end;
    	} else {
    		echo $title_str.'Watch TV shows and Anime in '.$title.$title_end;
    	}
    	
    } elseif (strpos($actual_uri, '/country/') === 0) {
    	$meta_filter = explode('/', $actual_uri)[2];
    	echo $title_str.'Watch '.$meta_filter.' TV Shows / Anime in '.$title.$title_end;
    } elseif (strpos($actual_uri, '/shows/filter/') === 0) {
    	echo $title_str.'Filter TV Shows / Anime in '.$title.$title_end;
    } elseif (strpos($actual_uri, '/shows/search/') === 0) {
    	echo $title_str.'Search TV Shows / Anime in '.$title.$title_end;
    }
}
function switchLang($th,$la,$vi,$en){
    if (isset($_GET['lang'])) {
        switch (explode('/', $_GET['lang'])[0]) {
            case 'th':
                echo $th;
                break;
            case 'la':
                echo $la;
                break;
            case 'vi':
                echo $vi;
                break;
            default:
                echo $en;
                break;
        }
    } else {header('location:/en/welcome/');}
}

?>
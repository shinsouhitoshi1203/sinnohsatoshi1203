<?php
error_reporting(E_ALL);
ob_start(); 

//Chạy session
if (session_status() === PHP_SESSION_NONE) {session_start();}
session_destroy();
//Mặc định các biến mảng toàn cục
//a. Danh sách mảng

//b. Danh sách biến

assignTitle();

//Format Title 
function assignTitle(){
    
    $title_str = "<title>";
    $title_end = "</title>";
    $title = 'project.powercode contest';
    $actual_uri = $_SERVER['REQUEST_URI'];
    $meta_filter = "";
    
    if (strpos($actual_uri, '/code.contest/rules') === 0) {
        $homepage = ' | rules';
        echo $title_str.$title.$homepage.$title_end;
    } elseif(strpos($actual_uri, '/code.contest/contestants') === 0) {
        $homepage = ' | contestants';
    	echo $title_str.$title.$homepage.$title_end; }
    elseif(strpos($actual_uri, '/code.contest/result') === 0) {
        $homepage = ' | result';
        echo $title_str.$title.$homepage.$title_end; }
    elseif(strpos($actual_uri, '/code.contest/problems') === 0) {
        $homepage = ' | problems';
        echo $title_str.$title.$homepage.$title_end; 
    } elseif (strpos($actual_uri, '/code.contest') === 0) {
    	$homepage = ' | homepage';
        echo $title_str.$title.$homepage.$title_end;
    } 
}

$listTop = '

{
    "members": [
        
    ]
}
';

/*
{
            "username": "ImTomBOOOI#0966",
            "server": "Milf + Loli Hunter\'s Bang",
            "avatar": "https://cdn.discordapp.com/attachments/1074968753919492096/1074975127760031784/5d7f72848ea2e49b2360a7e7f14538ec.png"
        },
        {
            "username": "Dodman64 (dogstudios55)#4490",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074970606883323904/0b8e008bf3727445dde997a9213b9c73.png"
        },
        {
            "username": "FowluhhGMD#5804",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074970441002786898/30373221fbee8b21398c1893915b3575.png"
        }
*/

$listMember = '

{
    
    "members": [
        

        
        {
            "username": "Rick_Roll#6589",
            "server": "other server",
            "avatar": "https://cdn.discordapp.com/avatars/868398751276994560/6a2b4e36e4be8b2878ab537caa88a205.webp"
        },
        {
            "username": "Enulix#9956",
            "server": "Project: PowerPoint Community",
            "avatar": "https://cdn.discordapp.com/avatars/1010827726476812319/545cb2268827b5e54e4f6380e463ca6d.webp"
        },
        {
            "username": "ImTomBOOOI#0966",
            "server": "Milf + Loli Hunter\'s Bang",
            "avatar": "https://cdn.discordapp.com/attachments/1074968753919492096/1074975127760031784/5d7f72848ea2e49b2360a7e7f14538ec.png"
        },
        {
            "username": "Dodman64 (dogstudios55)#4490",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074970606883323904/0b8e008bf3727445dde997a9213b9c73.png"
        },
        {
            "username": "FowluhhGMD#5804",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074970441002786898/30373221fbee8b21398c1893915b3575.png"
        },
        {
            "username": "pengu.#3737",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074970368881741835/7b41c00ced57792355df4c2e6f50dab7.png"
        },
        {
            "username": "Cammzy#5458",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074970234672381992/53ebf7838c59b36116fdac445a03296b.png"
        },
        {
            "username": "Goldrunner4810#9258",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074970099527725076/037505af6f0730fa281235bb36cd66fa.png"
        },
        {
            "username": "GalaxyDeem | RoffaTV#5939",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074969944523018280/f991344275fcbe2e630abffb8c2499e7.png?width=539&height=539"
        },
        {
            "username": "minecraftjava89#0336",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074969798888411206/3827294cdd4f0fc6219ce3dccdfc769b.png"
        },
        {
            "username": "Chen Wilson#4573",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074969652339417108/2da9b96ae7107d8705f8e3018f1134ca.png"
        },
        {
            "username": "Project PowerPoint#1302",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074968780213600296/b36ef867edd76b42ac45a43cc8dbb776.png"
        },
        {
            "username": "Danni#6335",
            "server": "Project: PowerPoint Community",
            "avatar": "https://media.discordapp.net/attachments/1074968753919492096/1074969453265162280/4aadb6067e58673ebf910c303c3a17fe.png?width=539&height=539"
        }
    ]
}

';

?>
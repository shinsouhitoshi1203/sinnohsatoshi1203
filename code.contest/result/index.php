<style>
	img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
</style>

<html>
	<head>
	    <meta charset="utf-8">
		<meta property="og:title" content="Project: PowerCode Contest #1 - Free 1 Month of Nitro Basic" />
        <meta property="og:type" content="Project: PowerCode Contest #1 - Free 1 Month of Nitro Basic" />
        <meta property="og:image" content="https://cdn.discordapp.com/attachments/1068112337724252281/1073167762224058388/6366072bddbae07993750a4420840146.png">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">
		<?php  
	        $path = $_SERVER['DOCUMENT_ROOT'];
	        $path .= "/code.contest/html-root/meta.html";
	        $file = file_get_contents($path, true);
	        include $_SERVER['DOCUMENT_ROOT'].'/code.contest/config/title.php';
	        echo $file;
	    ?>
        <meta property="og:description" content="Thank you for joining our contest. This page includes rules to join the event. Good luck" />
        <meta name="theme-color" content="#FF0000">
        <link rel="stylesheet" type="text/css" id="aa" href="index.css">
        <link rel="stylesheet" type="text/css" id="bb" href="../format/edited.css">
		<script src="//code.jquery.com/jquery-1.8.2.js"></script>
		<script src="//code.jquery.com/ui/1.8.24/jquery-ui.js"></script>
		<script type="text/javascript">
			$('#aa').attr("href", 'index.css' + '?v=' + Date.now());
			$('#bb').attr("href", '../format/edited.css' + '?v=' + Date.now());
		</script>
	</head>
	<body>
		<div class="color-wrap fade-in-bottom">
			<div class=WordSection1>
				<div class="navigate-section">
	                <a href="../" title="homepage">
	                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
							<path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
						</svg>                                    
	                </a> 
	                <a href="../../" title="go back to sinnohsatoshi.1203's site" style="margin-left: 10px">
	                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
							<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
						</svg>                                    
	                </a>
	            </div>
				<p class=MsoTitle>
					project.powercode contest - result
				</p>
				<p style="font-family: 'book'!important;">here is the result of this contest. thank you for joining our contest. to view the result in details, download the .xlsx file we made below.</p>
				
				<?php
					$mem = json_decode($GLOBALS['listTop'],true);$r=0;
					foreach ($mem["members"] as $m) {
						$r++;
						$ur = '#'.$r.' | '.$m['username'];
						$sv = $m['server'];
						$av = $m['avatar'];
						if ($sv == "o") $sv = "other server";
						if ($av == "o") {
							$av = 'https://media.discordapp.net/attachments/1068112337724252281/1074962161304076338/4.png';
						}
						if (strlen($ur) > 27) {
							$ur2 = substr($ur,0,27).'...';
						} else {
							$ur2 = $ur;
						}
						if (strlen($sv) > 27) {
							$sv2 = substr($sv,0,27).'...';
						} else {
							$sv2 = $sv;
						}
						echo '
						<p class=MsoNormal >
							<div class="member-container rank'.$r.'" title="'.$ur.' from '.$sv.'">
								<div class="member-avatar">
									<img src="'.$av.'">
								</div>
								<div class="member-info">
									<div class="member-name">
										<b class="username-text">'.$ur2.'</b>
									</div>
									<div class="member-sv">
										'.$sv2.'
									</div>
								</div>
							</div>
						</p>
						';
					}
				?>
			</div>
		</div>
	</body>
</html>

<!--Edited in here-->
<script type="text/javascript">
	$('.nitrotime').text (new Date('2/14/2023 2:45:00 PM UTC').toString())
</script>

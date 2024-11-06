<style>
	img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {display: none;}
</style>

<html>
	<head>
	    <meta charset="utf-8">
		<meta property="og:title" content="Project: PowerCode Contest #1 - Free 1 Month of Nitro Basic" />
        <meta property="og:type" content="Project: PowerCode Contest #1 - Free 1 Month of Nitro Basic" />
        <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  		<script id="MathJax-script" async
          src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
  		</script>
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
	<style type="text/css">
		/*Format Table*/
		
		td {border: 1px solid;width:300px;margin: 0 10px;padding: 0;vertical-align: top;}
		table {border-collapse: collapse; margin:0 auto;margin: 35px auto;} 
		td .ipop-container {margin: 0!important;width: 100%;height: 100%}
		.ipop-container > div {padding: 5px 10px;background: #6b369d;}
		.ipop-container > div:last-child {padding: 5px 10px;background: transparent;}
		@media all and (max-width: 740px)  {
			td {border: 1px solid;width:calc(100vw - 60px);display:block;margin: 10px 0;}
			table{margin: 0}
		}
	</style>
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
					project.powercode contest - list of problems
				</p>
				
				<p class=MsoNormal>
					<div class="Tips"> Tips: To easily navigate, press Ctrl + F and find by its name</div>
				</p>



				<div id="question-1">
					<h1>#1 | Array of Fibonacci numbers</h1>

					<h2>a. Description</h2>
					<p class=MsoNormal>
						A Fibonacci number may be defined by the recurrence relation: 
					</p>
					<p style="font-family: Cambria Math!important">
						 \(\begin{cases} f[1] = 0 \\ f[2] = 1\\ f[n+2] = f[n+1] + f[n] & (n > 0)\end{cases} \)
					</p>
					<p class=MsoNormal>
						in this problem, you will have to list the array of Fibonacci numbers from the m-th number to the n-th number
					</p>

					<h2>b. input and output</h2>
					<p class=MsoNormal>
						<b>#input</b>: in the line 1, there are m and n number representing the m-th and n-th Fibonacci number. <span style="font-family: Cambria Math!important">\(0\leq m \leq n  \leq 92 \)</span>
					</p>
					<p class=MsoNormal>
						<b>#output</b>: in the line 1, list all the Fibonacci numbers from the m-th number to the n-th number
					</p>
					<h2>c. examples</h2>
					<p class=MsoNormal>
						example #1
					</p>
					<table>
						<tr>
							<td>
								<div class="ipop-container">
									<div>fibo.inp</div>
									<div><code>1 6</code></div>
								</div>
							</td>
							<td>
								<div class="ipop-container">
									<div>fibo.out</div>
									<div><code>0 1 1 2 3 5</code></div>
								</div>
							</td>
						</tr>
					</table>
					<p class=MsoNormal>
						example #2
					</p>
					<table>
						<tr>
							<td>
								<div class="ipop-container">
									<div>fibo.inp</div>
									<div><code>12 30</code></div>
								</div>
							</td>
							<td>
								<div class="ipop-container">
									<div>fibo.out</div>
									<div><code>89 144 233 377 610 987 1597 2584 4181 6765 10946 17711 28657 46368 75025 121393 196418 317811 514229</code></div>
								</div>
							</td>
						</tr>
					</table>
					<p class=MsoNormal>
						example #3
					</p>
					<table>
						<tr>
							<td>
								<div class="ipop-container">
									<div>fibo.inp</div>
									<div><code>1 10</code></div>
								</div>
							</td>
							<td>
								<div class="ipop-container">
									<div>fibo.out</div>
									<div><code>0 1 1 2 3 5 8 13 21 34</code></div>
								</div>
							</td>
						</tr>
					</table>
				</div>


				<div id="question-2">
					<h1>#2 | organizing works</h1>

					<h2>a. Description</h2>
					<p class=MsoNormal>
						khamchanh has a list of tasks to do this week. he wants to select tasks as much as possible. help him select which tasks to do.
					</p>
					
					<p class=MsoNormal>
						in this problem, you will have to list the array of Fibonacci numbers from the m-th number to the n-th number
					</p>

					<h2>b. input and output</h2>
					<p class=MsoNormal>
						<b>#input</b>:<br>
						line 1 is for inputing the number of tasks in a \(t\) array, called \(n\). (<span style="font-family: Cambria Math!important">\(1 \leq n \leq 1000000\)</span>).<br>
						the following \(n\) lines are used to declare the start time and end time of each task. each task is called \(t_{i}\) and has its own start time and end time, respectively called \(t_{i}[1]\) and \(t_{i}[2]\) (<span style="font-family: Cambria Math!important">\(0 \leq t_{i}[1] \leq t_{i}[2] \leq 1000000\)</span>).<br>
					</p>
					<p class=MsoNormal>
						<b>#output</b>: list all the tasks he can do. each task must be seperated by each lines. each line includes the index, the start time and the end time of it.

					</p>
					<h2>c. examples</h2>
					<p class=MsoNormal>
						example #1
					</p>
					<table>
						<tr>
							<td>
								<div class="ipop-container">
									<div>fibo.inp</div>
									<div><code>
										5 <br>
										1 6<br>
										1 2<br>
										2 6<br>
										1 4<br>
										1 2<br>
									</code></div>
								</div>
							</td>
							<td>
								<div class="ipop-container">
									<div>fibo.out</div>
									<div>
										<code>
											1<br>
											2: 1 2<br>
											3: 2 6<br>
										</code>
									</div>
								</div>
							</td>
						</tr>
					</table>
					<p class=MsoNormal>
						example #2
					</p>
					<table>
						<tr>
							<td>
								<div class="ipop-container">
									<div>fibo.inp</div>
									<div><code>12 30</code></div>
								</div>
							</td>
							<td>
								<div class="ipop-container">
									<div>fibo.out</div>
									<div><code>89 144 233 377 610 987 1597 2584 4181 6765 10946 17711 28657 46368 75025 121393 196418 317811 514229</code></div>
								</div>
							</td>
						</tr>
					</table>
					<p class=MsoNormal>
						example #3
					</p>
					<table>
						<tr>
							<td>
								<div class="ipop-container">
									<div>fibo.inp</div>
									<div><code>1 10</code></div>
								</div>
							</td>
							<td>
								<div class="ipop-container">
									<div>fibo.out</div>
									<div><code>0 1 1 2 3 5 8 13 21 34</code></div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>








<script type="text/javascript">
	$('.stoptime').text (new Date('4/21/2023 2:00:00 PM UTC').toString())
	$('.starttime').text (new Date('4/22/2023 2:45:00 PM UTC').toString())
	$('.endtime').text (new Date('4/29/2023 2:45:00 PM UTC').toString())
	$('.resulttime').text (new Date('4/30/2023 2:45:00 PM UTC').toString())
	$('.nitrotime').text (new Date('5/1/2023 2:45:00 PM UTC').toString())
</script>
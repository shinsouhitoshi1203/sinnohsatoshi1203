<?php
	$servername = "localhost";
	$username = "dongvan";
	$password = "1234";
	$database = "db_media";
	$status ='';
	$conn = mysqli_connect($servername, $username, $password, $database);
	$conn->set_charset("utf8");
	if (!$conn) {
		$status ='notOK';
	} 
	else {
		$status = "OK";
	}
?>
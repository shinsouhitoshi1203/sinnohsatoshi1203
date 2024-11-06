<?php 
ob_start();
error_reporting(1);
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = '8.8.8.8';
    if (strpos($ipaddress,",")) {
    	return explode(',', $ipaddress)[0];
    } else {
    	return $ipaddress;
    }
}
$ip = get_client_ip(); 
echo $ip;
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
	$pt = $query['country'];
	switch ($pt) {
		case 'Thailand':
			header('location:/th/welcome');
			break;
		case 'Laos':
			header('location:/la/welcome');
			break;
		case 'Vietnam':
			header('location:/vi/welcome');
			break;
		default:
			header('location:/en/welcome');
			break;
	}
} else {
	header('location:/en/welcome');
}

?>
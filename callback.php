<?php
$client_id = "CHVMFY0GG5RRXUTWBR4DAVHAUBJIJPI04CA2KJJGSZKDKUFI";
$secret = "FDDUQFDTLTFFMYXP0QGKS2AWTB3RJ224MKFSF4BGB2LD33OT";
$redirect = "http://ec2-54-200-171-234.us-west-2.compute.amazonaws.com/callback.php";

if($_GET['code']){
//We need to hit up the authkey URL and get the key in JSON format
$authkey = file_get_contents("https://foursquare.com/oauth2/access_token?client_id=".$client_id."&client_secret=".$secret."&grant_type=authorization_code&redirect_uri=".$redirect."&code=".$_GET['code']);
//We then need to decode it and store that key in a variable (or in a database)
$decoded_auth = json_decode($authkey,true);
$access_token = $decoded_auth['access_token'];
//we then look up whatever endpoint of the api we want
$userinfo = file_get_contents("https://api.foursquare.com/v2/users/self?oauth_token=".$access_token);
$decoded_userinfo = json_decode($userinfo, true);
$name = $decoded_userinfo['response']['user']['firstName'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
	<title>Welcome to Checkin Challenge</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
</head>
 
	<body>
		<div id="content">
			<h1>Hello, <?php echo $name; ?></h1>
			<p>Should print the name of foursquare user</p>
		</div>
	</body>
</html>
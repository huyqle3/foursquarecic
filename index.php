<?php

$client_id = "CHVMFY0GG5RRXUTWBR4DAVHAUBJIJPI04CA2KJJGSZKDKUFI";
$secret = "FDDUQFDTLTFFMYXP0QGKS2AWTB3RJ224MKFSF4BGB2LD33OT";
$redirect = "http://ec2-54-200-171-234.us-west-2.compute.amazonaws.com/callback.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 
<head>
	<title>Steal Name</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="generator" content="Geany 0.20" />
</head>
 
	<body>
	<div id="content">
		<h1>Welcome to foursquare checkin challenge</h1>
		<p></p>
		<p><a href="https://foursquare.com/oauth2/authenticate?client_id=<?php echo $client_id; ?>&response_type=code&redirect_uri=<?php echo $redirect; ?>" title="Login">Log in with Foursquare</a></p>
	</div>
	<div id="footer">
		<p class="left">This application uses foursquare</p>
		<p>Copyright &copy; 2013 - Huy Q. Le</p>
		<p class="right"></p>
	</div>
	</body>
 
</html>
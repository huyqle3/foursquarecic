<?php
<<<<<<< HEAD
include_once "config.php";
session_start();
if($_GET['code']){

$authkey = file_get_contents("https://foursquare.com/oauth2/access_token?client_id=".$client_id."&client_secret=".$secret."&grant_type=authorization_code&redirect_uri=".$redirect."&code=".$_GET['code']);

$decoded_auth = json_decode($authkey,true);
$access_token = $decoded_auth['access_token'];
$_SESSION['access_token'] = $access_token;


$userinfo = file_get_contents("https://api.foursquare.com/v2/users/self?oauth_token=".$access_token);
//https://api.foursquare.com/v2/users/USER_ID/friends
$newuserinfo = file_get_contents("https://api.foursquare.com/v2/users/self/friends?oauth_token=".$access_token);
$decoded_userinfo = json_decode($userinfo, true);

$newdecoded_userinfo = json_decode($newuserinfo, true);

$name = $decoded_userinfo['response']['user']['firstName'];
$lastname = $decoded_userinfo['response']['user']['lastName'];

$pals = array();
for ($x = 0; $x < $newdecoded_userinfo['response']['friends']['count']; $x++)
{
	$pals[$x] = $newdecoded_userinfo['response']['friends']['items'][$x]['firstName'];
	
}

function friends($pals) 
{
	for ($x = 0; $x < count($pals) + 5; $x++)
	{
		echo array_shift($pals), " ";
	}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Check-in Challenge</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="static/style.css">
</head>
<body>
    <div class="header">
			<div class="wrapper clear">
				<div class="logo">
					<a href="index.php"><img src="img/logo.png" height="40px" width="50px"/></a>
					<h1><a href="index.php">Check-In Challenge</a></h1>
				</div>
				<ul class="navigation">
					<li><a href="#">Home</a></li>
					<li><a href="scoreboard.html">My Challenges</a></li>
					<li><a href="create.php">Create a Challenge</a></li>
				</ul>
			</div>
	</div>
	<section>
   	 <div id="content">
   		 <h1>Hello, <?php echo $name; ?>.</h1>
		 <br>
   		 <h2>I know  you. I know that your last name is <?php echo $lastname; ?>.</h2>
		 <br>
   		 <h3>Your friends are <?php friends($pals); ?>.</h3>
		 <br>
		 </br>
   		 <p>This page prints your general information.</p><br>
		 <p>Hey, <?php echo $name; ?>. Welcome to foursquare check-in challenge. Make a challenge with a list of locations and set the point values. See who can get the most points! Set a theme for the places to go and see how you compare with your best friends or strangers! </p>
		 <br>
		 </br>
		 <div class = "createbutton">
		 <p><a href = "create.php"> Get started! Create a Challenge</a></p>
		 </div>
   	 </div>
     </section>
    </body>
</html>
=======
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
>>>>>>> 33a14ee97f8f932eaa5c3977ab55304121f8fd3d

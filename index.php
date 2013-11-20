<?php
<<<<<<< HEAD
include_once "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <title>Foursquare Check-In Challenge!</title>
   	 <meta http-equiv="content-type" content="text/html;charset=utf-8" />
     <link rel="stylesheet" type="text/css" href="static/style.css">
     <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
    <body>
	<div class="header">
			<div class="wrapper clear">
				<div class="logo">
					<a href="index.php"><img src="img/logo.png" height="40px" width="50px"/></a>
					<h1><a href="index.php">Check-In Challenge</a></h1>
				</div>
				<ul class="navigation">
					<li><a href="index.php">Home</a></li>
				</ul>
			</div>
	</div>
	<section>
    <div id="content">
   	 <h2>Welcome to the Foursquare Check-In Challenge!</h2><br>
   	 <p></p>
   	 <p><a href="https://foursquare.com/oauth2/authenticate?client_id=<?php echo $client_id; ?>&response_type=code&redirect_uri=<?php echo $redirect; ?>" title="Login with Foursquare!"><img src="img/signin_foursquare.png" alt="Login with Foursquare!"></a></p>
    </div>
	<br>
    <div id="desc">
        <h2>Description</h2>
        <p>Foursquare Check-In Challenge allows friends and strangers to compete to see who can get to a certain place first within a time limit. You receive points for going to places listed on the challenges. See who wins!</p>
    </div>
    <div id="footer">
   	 <p class="left">This application uses Foursquare to deliver content.</p>
   	 <p class="right"></p>
    </div>
    </section>
    </body>
</html>
=======

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
>>>>>>> 33a14ee97f8f932eaa5c3977ab55304121f8fd3d

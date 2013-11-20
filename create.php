<?php
include_once "config.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Create!</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="static/style.css">
	<script>
	$( document ).ready(function(){
	    var oauth = encodeURI('<?php echo $_SESSION['access_token']; ?>');
	    console.log("LOLOL");
	    $("#test").click(function() {
		var place = $("#place").val();
		var keyw = $("#keyw").val();
		var venueSearch = "https://api.foursquare.com/v2/venues/search&intent=checkin&near="+encodeURIComponent(place)+"&query="+encodeURIComponent(keyw)+"&oauth_token="+oauth; 
	        $.getJSON(venueSearch, function(){
		}) 
		.done(function (id, name) {
		console.log(id, name);
		})
	    }); 
	});
	</script>
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
    	<h2> Let's play a game... New challenge!</h2>
		<br>
    	<form action="prototype.html" method="post">
    		Name of Challenge: <input name="venue" type="text" value="" id="keyw">
    		Genre: <input name="place" type="text" value="" id="place">
        <input type="submit" value ="Submit" id='test' />
    	</form>
		<br>
		</br>
		<br>
    	<h1>Add a new challenge for your friends or strangers!</h1>
	<br>
	<p>Input the name that you want to call your challenge. What type of theme do you want this challenge to be? Be creative! Include some comments about your challenge!</p>
    </div>
    </section>
    </body>
 </html>

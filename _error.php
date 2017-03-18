<?php 
	session_start();
	$serverErrors = $_SESSION['serverErrors'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Error Page</title>
	<link rel="stylesheet" type="text/css" href="other.css">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Orbitron:400,700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script type="text/javascript">
		var secs = 10;
		var countdown = function(){
			setInterval(function(){
				$('#top').text("You will be redirected back to the main page in " + (--secs) + " seconds.");
			}, 1000);
			setTimeout(function (){
				window.location.href= 'index.php'
			},	10000);
		};
	</script>
</head>

<body onload="countdown()">
	<div id="letter">
		<h2>We're sorry :(</h2>
		<div id="divider"></div>
		<p>&emsp;A system error has occurred and your contact form can't be sent at this time. <?php echo $serverErrors[2]?><br><br>We're sorry for the inconvenience.<br><br><br><i>-Sundance Transport, Inc.</i></p>
	</div>
	<div id="countDiv">
		<h6 id="top">You will be redirected back to the main page in 10 seconds.</h6>
		<h6>If the page fails to redirect, click <a href="index.php">here</a>.</h6>
	</div>

</body>
</html>
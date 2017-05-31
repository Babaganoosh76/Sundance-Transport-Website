<?php 
	session_start();
	$serverErrors = isset($_SESSION['serverErrors']) ? $_SESSION['serverErrors'] : [];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>We're Sorry :(</title>
	<link rel="stylesheet" type="text/css" href="css/redirect.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Orbitron:400,700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/countdown.js"></script>
</head>

<body onload="countdown()">
	<div id="letter">
		<h2>We're Sorry :(</h2>
		<div id="divider"></div>
		<p>&emsp;A system error has occurred and your contact form can't be sent at this time.</p>
		<p id="autoError" style="display: none;">If your seeing this, the webmaster has already been notified of the problem, and it will be seen to as soon as possible.</p>
		<p id="manualError" style="display: none;">An email to the webmaster (<a href="mailto:amiller5233@gmail.com">amiller5233@gmail.com</a>) would be greatly appriciated.</p>
		<br>
		<p>We're sorry for the inconvenience.</p>
		<br><br>
		<p><i>-Sundance Transport, Inc.</i></p>
	</div>
	<div id="countDiv">
		<h6 id="top">You will be redirected back to the main page in 10 seconds.</h6>
		<h6>If the page fails to redirect, click <a href="./">here</a>.</h6>
	</div>
</body>
</html>

<?php  
  if(in_array('auto', $serverErrors)){
    echo '<script type="text/javascript">$("#autoError").show();</script>';
  }
  if(in_array('manual', $serverErrors)){
    echo '<script type="text/javascript">$("#manualError").show();</script>';
  }

  unset($_SESSION['serverErrors']);
?>
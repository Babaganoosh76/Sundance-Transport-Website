<?php 
	session_start();
	$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>

<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>Thank You!</title>
	<link rel="stylesheet" type="text/css" href="css/other.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Orbitron:400,700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script type="text/javascript">
		var secs = 10;
		var countdown = function(){
			setInterval(function(){
				$('#top').text("You will be redirected back to the main page in " + (--secs) + " seconds.");
			}, 1000);
			setTimeout(function (){
				window.location.href= 'index.php#footer'
			},	10000);
		};
	</script>
	<script type="text/javascript">
		var w;
		$(window).on("load resize", function(){
		    w = $('#spinner').width();
		    $('#spinner').css({"height": w/2 +"px"});
		});
		$(window).on("load", function(){
			$('#sunburst').attr("src", "pics/sunburst.png");
		});
	</script>
</head>

<body onload="countdown()">
	
	<div id="letter">
		<div id="spinnerContainer">
			<h4>I</h4>
			<div id="spinner">
		    	<img src="pics/blank.png" id="sunburst" alt="sunburst">
		    </div>
	    </div>
		<h1>Sundance Transport, Inc.</h1>
		<h2>thanks you for getting in touch, <?php echo $fields['name']?>!</h2>
		<div id="divider"></div>
		<p>&emsp;We have received your message and would like to thank you for contacting us.<br>We will reply by email within 24 hours.<br><br>Have a great day!<br><br><br><i>-Sundance Transport, Inc.</i></p>
	</div>
	<div id="countDiv">
		<h6 id="top">You will be redirected back to the main page in 10 seconds.</h6>
		<h6>If the page fails to redirect, click <a href="index.php#footer">here</a>.</h6>
	</div>
</body>
</html>

<?php  
  unset($_SESSION['fields']);
?>

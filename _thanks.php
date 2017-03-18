<?php 
	session_start();
	$fields = $_SESSION['fields'];
?>

<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

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
	<style type="text/css">
		* {
    		margin: 0;
    		padding: 0;
    		font-family: 'Open Sans', sans-serif;
    		font-weight: 300;
    	}
    	body {
    		background-color: #f6f6f6;
    	}
    	h1 {
    		font-family: 'Orbitron', sans-serif;
    		font-weight: 700;
    		font-size: 40px;
    		font-style: italic;
    		margin-top: 20px;
    	}
    	h2{
    		font-size: 24px;
    		margin: 10px 0 20px;
    	}
    	/*h3 {
    		font-family: 'Orbitron', sans-serif;
    		font-size: 50px;
    	}*/
    	h4 {
    		font-size: 12px;
    	}
    	h6 {
    		font-size: 12px;
    	}
    	p {
    		margin: 10px 0;
    	}
		
    	#letter {
    		position: relative;
    		padding: 20px;
    		margin: 10px 15%;
    		background-color: #ffffff;
    		text-align: center;
    		overflow: hidden;
    		box-shadow: 3px 3px 20px #888888;
    		border-radius: 5px;
    	}
    	#header {
    		padding: 0;
    		margin: 0;
    		position: relative;
    	}
    	#spinnerContainer {
    		position: relative;
    		padding: 0 30%;
    		text-align: center;
    		width: 40%;
    	}
    	#divider {
    		height: 1px;
    		border-top: 1px solid gray;
    		width: 60%;
    		margin: 0 20%;
    	}
    	#spinner {
    		bottom: 0;
    		width: 100%;
    		overflow: hidden;
    	}
    	#sunburst {
    		animation: tick 5s ease-in 0s 3;
    		width: 100%;
			position: relative;
			max-width: 100%;
			border-radius: 50%;
		}
		#countDiv {
			text-align: center;
			color: #e4742e;
		}
		@keyframes tick {
			0% { transform: rotate(2deg) }
			2% { transform: rotate(-2deg) }
			4% { transform: rotate(0deg) }
			10% { transform: rotate(0deg) }

			20% { transform: rotate(24.5deg) }
			22% { transform: rotate(20.5deg) }
			24% { transform: rotate(22.5deg) }
			30% { transform: rotate(22.5deg) }
			
			40% { transform: rotate(47deg) }
			42% { transform: rotate(43deg) }
			44% { transform: rotate(45deg) }
			50% { transform: rotate(45deg) }

			60% { transform: rotate(69.5deg) }
			62% { transform: rotate(65.5deg) }
			64% { transform: rotate(67.5deg) }
			70% { transform: rotate(67.5deg) }
			
			80% { transform: rotate(92deg) }
			82% { transform: rotate(88deg) }
			84% { transform: rotate(90deg) }
			90% { transform: rotate(90deg) }

			100% { transform: rotate(112.5deg) }
		}

		@media screen and (max-width: 991px) {
			html { 
				background: red; 
			}
	    	h1 {
	    		font-size: 30px;
	    	}
	    	h2 {
	    		font-size: 18px;
	    	}
		}
	</style>
</head>

<body onload="countdown()">
	
	<div id="letter">
		<div id="spinnerContainer">
			<h4>I</h4>
			<div id="spinner">
		    	<img src="pics/blank.png" id="sunburst" alt="sunburst">
		    </div>
		    <!-- <div id="counter" style="position: absolute; width: inherit; bottom: 0; text-align: center;">
		    	<h3>10</h3>
		    </div> -->
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

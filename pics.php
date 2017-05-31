<?php
$directory = "pics_good/";
$images = glob($directory . "*.jpg");
shuffle($images);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pics</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/gallery.js"></script>
	<script>
		$(document).ready(function() {
			var images = <?php echo json_encode($images);?>,
				i = 0,
				delay = 50;

			var populate = setInterval(function(){
				// console.log($('#gallery').outerHeight(), i);
				var col = shortest();
				addDiv(col, (i+1), images[i++]);
			}, delay);

			setTimeout(function() {
				clearInterval(populate); 
			}, (delay*images.length));
		});
	</script>

	<link rel="stylesheet" type="text/css" href="css/equipment.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="jumbotron">SUNDANSSS</div>
	<div id="gallery" class="container-fluid">
		<div id="col1" class="col col-sm-4"></div>
		<div id="col2" class="col col-sm-4"></div>
		<div id="col3" class="col col-sm-4"></div>
	</div>
</body>
</html>
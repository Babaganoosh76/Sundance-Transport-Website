<?php
$directory = "../pics/gallery/";
$images = glob($directory . "*.jpg");
shuffle($images);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sundance Transport | Gallery</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Adam Miller">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/template.css">
  <link rel="stylesheet" type="text/css" href="../css/equipment.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Orbitron:400,700" rel="stylesheet">
  <link rel="canonical" href="https://sundancetransportinc.com/template">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/gallery.js"></script>

  <script>
    $(document).ready(function() {
      var images = <?php echo json_encode($images);?>,
          i = 0,
          delay = 50;

      var populate = setInterval(function(){
        var col = shortest();
        addDiv(col, (i+1), images[i++]);
      }, delay);

      setTimeout(function() {
        clearInterval(populate);
      }, (delay*images.length));
    });
  </script>
  <script type="text/javascript" src="../js/lightbox.js"></script>
  
  <!-- <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="16x16" href="icons/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="icons/favicon-96x96.png">
  <link rel="manifest" href="icons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="icons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff"> -->
</head>

<body id="myPage" data-spy="scroll" data-offset="60">

<div class="jumbotron">
  <div id="header">
    <div id="sunburst">
      <img src="../pics/sunburst.png">
    </div>
    <div id="title">
      <h1><span class="firstLetter">S</span>undance <span class="firstLetter">T</span>ransport, Inc.</h1>
    </div>
  </div>
</div>

<div id="template" class="main container-fluid">
  <div id="back">
    <a href="./" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    </a>
    <a href="../">
      <p>Back</p>
    </a>
  </div>
  
  <div class="row">
    <div class="col-sm-offset-2 col-sm-8 text-center">
      <h2><span class="firstLetter">G</span>allery</h2>
      <div id="gallery">
        <div id="col1" class="col col-sm-4 col-xs-6"></div>
        <div id="col2" class="col col-sm-4 col-xs-6"></div>
        <div id="col3" class="col col-sm-4 hidden-xs"></div>
      </div>
    </div>
  </div>

  <div id="myModal" class="modal">
    <span id="close" class="glyphicon glyphicon-remove" aria-hidden="true" onclick="closeModal(this)"></span>
    <div class="modal-content">
      <div class="mySlides">
        <img src="">
      </div>
    </div>
  </div>

</div>

</body>
</html>
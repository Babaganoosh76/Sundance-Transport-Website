<?php 
  session_start();
  $userErrors = $_SESSION['userErrors'];
  $serverErrors = $_SESSION['serverErrors'];
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>Sundance Transport, Inc</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Orbitron:400,700" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script type="text/javascript" src="js/spinner.js"></script>
  <script type="text/javascript" src="js/lightbox.js"></script>
  <script type="text/javascript" src="js/bottom.js"></script>
  <script type="text/javascript" src="js/resize.js"></script>
  
  <link rel="apple-touch-icon" sizes="57x57" href="icons/apple-icon-57x57.png">
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
  <meta name="theme-color" content="#ffffff">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav id="banner2" class="navbar navbar-default navbar-fixed-top hidden-lg hidden-md hidden-sm">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">
        <div class="spinner" id="one">
          <img src="pics/blank.png" class="sunburst" height="100">
        </div>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#subhaul">SUBHAUL INFO</a></li>
        <li><a href="#equipment">EQUIPMENT</a></li>
        <li><a href="#team">MEET THE TEAM</a></li>
        <li><a href="#testimonials">TESTIMONIALS</a></li>
        <li><a href="#footer">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="banner1" class="col-sm-3 hidden-xs">
  <div id="visible">
    <div class="spinner" id="two">
      <img src="pics/blank.png" class="sunburst">
    </div>
    <nav class="navbar">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav nav-stacked">
          <li><a href="#services">SERVICES</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li><a href="#subhaul">SUBHAUL INFO</a></li>
          <li><a href="#equipment">EQUIPMENT</a></li>
          <li><a href="#team">MEET THE TEAM</a></li>
          <li><a href="#testimonials">TESTIMONIALS</a></li>
          <li><a href="#footer">CONTACT US</a></li>
        </ul>
      </div>
    </nav>
  </div>
</div>

<div id="title" class="container-fluid">
  <div class="col-sm-offset-3 col-sm-9">
    <h1>Sundance Transport, Inc.</h1>
  </div>
</div>

<!-- Services -->
<div id="services" class="container-fluid text-center bg-white">
  <div class="col-sm-offset-3 col-sm-9">
    <h2>SERVICES</h2>
    <div class="row slideanim slide">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-resize-horizontal"></span>
        <h3>WIDE LOADS</h3>
        <p>Our fleet is certified to haul 12-foot wide loads</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-map-marker"></span>
        <h3>DISTANCE</h3>
        <p>We transport all throughout Northern/Central California</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-cog"></span>
        <h3>FORKLIFTS</h3>
        <p>All of our trucks can carry piggy-back forklifts</p>
      </div>
    </div>
    <div class="row slideanim slide">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-certificate"></span>
        <h3>CERTIFICATIONS</h3>
        <p>Sundance is a WMBE/SBE certified business</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-leaf"></span>
        <h3>SUSTAINABILITY</h3>
        <p>All of our trucks are CARB compliant</p>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-wrench"></span>
        <h3>EQUIPMENT</h3>
        <p>We have flatbed, beavertail, and drop-deck trailers</p>
      </div>
    </div>
  </div>
</div>

<!-- Services (Other)
<div id="services_other" class="container-fluid">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-9">
      <h2>Our Services</h2>
      <ul>
        <li>Sundance Transport has been a family owned business since 1995 and is located in El Dorado Hills, California.</li>
        <li>Our fleet consists of CARB compliant trucks with flatbed, equipment hauling, and drop-deck trailers that can haul your building materials including, but not limited to: pipe, shoring, slide rail, erosion control materials, lumber, pre-cast concrete, masonry block, brick, mortar, wall board, tile, roofing materials, asphalt, steel plate, aluminum, K-rail, coils, scaffolding and more.</li>
        <li>We can deliver to where you need to go! No supply yard or jobsite is too much for our piggy-back forklifts. We also have permits to haul up to 12’ wide loads.</li>
        <li>We have beaver-tail equipment trailers to move your equipment.</li>
        <li>We currently service the entire Northern and Central California area including, but not limited to: Sacramento, Stockton, Modesto, Roseville, Folsom, El Dorado Hills, Pittsburg, Dublin, Walnut Creek, Sunnyvale, Gilroy, Newark, Santa Rosa, Turlock, Fresno, San Francisco, San Ramon, San Mateo, American Canyon, Vacaville, Fairfield, Vallejo, San Rafael, Livermore, Petaluma, Dixon, Napa, and more.</li>
        <li>Sundance Transport is a WMBE/SBE Certified Business; we can help contactors meet their diversity goals. </li>
        <li>HEY</li>
      </ul>
      <br><button class="btn btn-default btn-lg">Learn More</button>
    </div>
  </div>
</div> -->

<!-- About Us -->
<div id="about" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-offset-3 col-sm-9">
      <h2>A Little Bit About Us</h2>
      <ul>
        <li>Sundance Transport is a family owned business based in El Dorado Hills, California.</li>
        <li>At Sundance, we have prided ourselves on excellent customer service and competitive prices since 1995. We never forget that our success depends on how well we service our customers. That's why our foremost commitment is to you.</li>
        <li>We are proud of our extensive fleet of trucks with 45’ flatbed trailers. No supply yard or jobsite is too much for our piggy-back forklifts. We specialize in delivering building materials, and can also deliver 12’ wide loads. We regularly transport throughout Northern and Central California, and are happy to deliver in and out of Southern California as well.</li>
        <li>We pride ourselves on exceeding our customer’s expectations with adaptability, timely deliveries and amicable service.</li>
        <li>We realize that you have a choice when choosing your transport expert, and understand that you may already have established relationships with an existing vendor. However, we invite you to contact us to compare service and pricing. We promise that you won’t be disappointed! We look forward to the opportunity to speak with you about hauling material for your business.</li>
      </ul>
    </div>
  </div>
</div>

<!-- Subhaul Info -->
<div id="subhaul" class="container-fluid bg-white">
  <div class="row">
    <div class="col-sm-offset-3 col-sm-9">
      <h2>Subhaul Information</h2>
      <h4>Sundance Transport is always looking for qualified Owner-Operators. If you are interested in hauling for us, please provide the following:</h4>
      <ul>
        <li>Current DMV Printout</li>
        <li>Proof of enrollment in B.I.T. Program</li>
        <li>Certificate of Liability Insurance naming Sundance Transport, Inc. as additional insured</li>
        <li>$50,000 Minimum Cargo Insurance</li>
        <li><a href="http://www.irs.gov/pub/irs-pdf/fw9.pdf">W-9 form</a></li>
        <li>Proof of enrollment in D.O.T. Drug Consortium</li>
        <li>Copy of Motor Carrier Permit</li>
      </ul>
      <h4>We require all sub-haulers to have the following:</h4>
      <ul>
        <li>Annual Wide Load Permit</li>
        <li>Chains and Binders</li>
        <li>Straps</li>
        <li>PPE (hard hat, safety glasses, safety vest)</li>
      </ul>
    </div>
  </div>
</div>

<!-- Equipment -->
<div id="equipment" class="container-fluid text-center bg-grey">
  <div class="row text-center">
    <div class="col-sm-offset-3 col-sm-9">
      <h2>Equipment</h2>
      <div class="col-sm-4">
        <div id="truckCarousel" class="carousel" data-ride="carousel">
          
          <div class="carousel-inner thumbnail" role="listbox" onclick="openModal(this)">
            <div class="item active">
              <img src="pics/trucks/truck_1.jpg" alt="Truck">
            </div>
            <div class="item">
              <img src="pics/trucks/truck_2.jpg" alt="Truck">
            </div>
            <div class="item">
              <img src="pics/trucks/truck_3.jpg" alt="Truck">
            </div>
            <div class="item">
              <img src="pics/trucks/truck_4.jpg" alt="Truck">
            </div>
          </div>
          
          <a class="left carousel-control" href="#truckCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#truckCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
        <h3>Tractors</h3>
      </div>
      <div class="col-sm-4">
        <div id="trailerCarousel" class="carousel slide" data-ride="carousel">
          
          <div class="carousel-inner thumbnail" role="listbox" onclick="openModal(this)">
            <div class="item active">
              <img src="pics/trailers/trailer_1.jpg" alt="Trailers">
            </div>
            <div class="item">
              <img src="pics/trailers/trailer_2.jpg" alt="Trailers">
            </div>
            <div class="item">
              <img src="pics/trailers/trailer_3.jpg" alt="Trailers">
            </div>
            <div class="item">
              <img src="pics/trailers/trailer_4.jpg" alt="Trailers">
            </div>
          </div>
          
          <a class="left carousel-control" href="#trailerCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#trailerCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <h3>Trailers</h3>
      </div>
      <div class="col-sm-4">
        <div id="liftCarousel" class="carousel slide" data-ride="carousel">
          
          <div class="carousel-inner thumbnail" role="listbox" onclick="openModal(this)">
            <div class="item active">
              <img src="pics/forklifts/lift_1.jpg" alt="Forklift">
            </div>
            <div class="item">
              <img src="pics/forklifts/lift_2.jpg" alt="Forklift">
            </div>
            <div class="item">
              <img src="pics/forklifts/lift_3.jpg" alt="Forklift">
            </div>
            <div class="item">
              <img src="pics/forklifts/lift_4.jpg" alt="Forklift">
            </div>
          </div>
          
          <a class="left carousel-control" href="#liftCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#liftCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <h3>Forklifts</h3>
      </div>
    </div>
  </div>
</div>

<div id="myModal" class="modal">
  <span id="close" class="glyphicon glyphicon-remove" aria-hidden="true" onclick="closeModal(this)"></span>
  <div class="modal-content">

    <div id="next" class="arrow" onclick="plusSlides(1)">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    </div>
    <div id="prev" class="arrow" onclick="plusSlides(-1)">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    </div>

    <div class="numberText">1 / 4</div>

    <div class="mySlides image">
      <div style="position:absolute; top:0; width:50px; height:50px;"></div>
      <img src="">
    </div>

  </div>
</div>

<!-- Meet the Team -->
<div id="team" class="container-fluid bg-white">
  <div class="row">
    <div class="col-sm-offset-3 col-sm-9 text-center">
      <h2>Meet the Team</h2>
      <div class="col-sm-6 col-xs-12 profile">
       <div class="col-sm-4 col-xs-12 profpic">
          <img src="pics/blank-profile-picture.png">
          <a href="https://www.linkedin.com/in/rebecca-miller-905b8714" target="_blank">
            <img src="pics/linkedin.png" id="linkedin">
          </a>
        </div>
        <div class="col-sm-8 col-xs-12">
          <h3>Rebecca Miller</h3>
          <p>CEO / Customer Relations<br>Office: <a href="tel:19169332870">(916) 933-2870</a><br>Mobile: <a href="tel:19162755915">(916) 275-5915</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-xs-12 profile">
        <div class="col-sm-4 col-xs-12 profpic">
          <img src="pics/blank-profile-picture.png">
          <a href="https://www.linkedin.com/in/bryan-miller-1643506a" target="_blank">
            <img src="pics/linkedin.png" id="linkedin">
          </a>
        </div>
        <div class="col-sm-8 col-xs-12 ">
          <h3>Bryan Miller</h3>
          <p>COO / Dispatcher<br>Office: <a href="tel:19169332870">(916) 933-2870</a><br>Mobile: <a href="tel:19168708885">(916) 870-8885</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Testimonials -->
<div id="testimonials" class="container-fluid text-center bg-grey">
  <div class="col-sm-offset-3 col-sm-9">
    <h2>What People Are Saying About Us</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <p>Hey, that's pretty good.<br>Solid 8/10.</p>
          <p><i>-Bob</i></p>
        </div>
        <div class="item">
          <p>I'm speechless<br>I don't even know what to say</p>
          <p><i>-Jerry</i></p>
        </div>
        <div class="item">
          <p>Fan-f*ckin-tastic.<br>'Nuff said.</p>
          <p><i>-Dude</i></p>
        </div>
        <div class="item">
          <p>AYYYYYYYY<br>LMAO</p>
          <p><i>-Joe</i></p>
        </div>
      </div>
      
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
    </div>
  </div>
</div>

<!-- Contact Us -->
<div id="footer" class="container-fluid bg-white">
  <div class="row">
    <div id="contact" class="col-sm-6 text-center">
      <h2>Contact Info</h2>
      <span class="glyphicon glyphicon-envelope logo-small"></span>
      <p><u>Mailing Address</u><br>Sundance Transport, Inc.<br>P.O. Box 5605<br>El Dorado Hills, CA 95762</p>
      <br>
    </div>
    <div class="col-sm-6">
      <h2>Get In Touch</h2>
      <h6 id="setError" style="text-align: center; margin-bottom: 10px;">Please make sure all fields are completed.</h6>
      <form action="redirect.php" method="post">
        <div class="col-sm-12 form-group">
          <input class="form-control" name="name" autocomplete="off" placeholder="Name"> <!-- type="text" required=""> -->
          <h6 id="nameError">Please provide your name.</h6>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" name="email" autocomplete="off" placeholder="Email Address"> <!-- type="email" required=""> -->
          <h6 id="emailError">Please provide a valid email address.</h6>
        </div>
        <div class="col-sm-12 form-group">
          <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
          <h6 id="messageError">Please provide a message.</h6>
        </div>
        <div class="col-sm-12 form-group">
          <div class="g-recaptcha" data-sitekey="6LcQfRcUAAAAAFwRPsxlWhcZDRMSmVpg5aSeyRFx"></div>
          <h6 id="recaptchaError" style="text-align: center;">Don't forget to check the recaptcha!</h6>
        </div>
        <div class="col-sm-12 form-group text-center">
          <button class="btn btn-default" type="submit">Send</button>
        </div>
      </form>
      
    </div>
  </div>
</div>

</body>
</html>

<?php  
  if(in_array('name', $userErrors)){
    echo '<script type="text/javascript">$("#nameError").show();</script>';
  }
  if(in_array('email', $userErrors)){
    echo '<script type="text/javascript">$("#emailError").show();</script>';
  }
  if(in_array('message', $userErrors)){
    echo '<script type="text/javascript">$("#messageError").show();</script>';
  }
  if(in_array('recaptcha', $userErrors)){
    echo '<script type="text/javascript">$("#recaptchaError").show();</script>';
  }
?>
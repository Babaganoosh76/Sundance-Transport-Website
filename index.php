<?php 
  session_start();
  require_once "lib/security.php";
  $fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
  $userErrors = isset($_SESSION['userErrors']) ? $_SESSION['userErrors'] : [];
  $serverErrors = isset($_SESSION['serverErrors']) ? $_SESSION['serverErrors'] : [];
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>Sundance Transport, Inc.</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sundance Transport, Inc. has been a family owned business since 1995 and is located in El Dorado Hills, California. Our fleet consists of CARB compliant trucks with flatbed, equipment hauling, and...">
  <meta name="keywords" content="sundance, transport, trucking, forklift, delivery, hauling, subhaul, sacramento, california">
  <meta name="author" content="Adam Miller">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Orbitron:400,700" rel="stylesheet">
  <link rel="canonical" href="https://sundancetransportinc.com/">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script type="text/javascript" src="js/spinner.js"></script>
  <script type="text/javascript" src="js/lightbox.js"></script>
  <script type="text/javascript" src="js/scroll.js"></script>
  <script type="text/javascript" src="js/navbanner.js"></script>
  <script type="text/javascript" src="js/bio.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#banner2 li").on('click', function() {
        $('#myNavbar').collapse("toggle");
      });
    });
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-96226529-1', 'auto');
    ga('send', 'pageview');
  </script>
  
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

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav id="banner2" class="navbar navbar-default navbar-fixed-top mobile">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">
        <div class="spinner">
          <img src="pics/blank.png" class="sunburst" height="100">
        </div>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#services">SERVICES</a></li>
        <!-- <li><a href="#about">ABOUT US</a></li> -->
        <li><a href="#trucking">TRUCKING</a></li>
        <li><a href="#rentals">RENTALS</a></li>
        <li><a href="#equipment">GALLERY</a></li>
        <li><a href="#team">MEET THE TEAM</a></li>
        <!-- <li><a href="#testimonials">TESTIMONIALS</a></li> -->
        <li><a href="#contact">CONTACT US</a></li>
      </ul>
    </div>
    <a href="subhaul">
      <div id="subhaul">
        <p>We are seeking Owner-Operators!</p>
        <p class="asterisk">Click for more info.</p>
      </div>
    </a>
  </div>
</nav>

<div id="banner1" class="col-sm-3 desktop">
  <div id="visible">
    <div class="spinner">
      <img src="pics/blank.png" class="sunburst">
    </div>
    <nav class="navbar">
      <ul class="nav nav-stacked">
        <li><a href="#services">SERVICES</a></li>
        <!-- <li><a href="#about">ABOUT US</a></li> -->
        <li><a href="#trucking">TRUCKING</a></li>
        <li><a href="#rentals">RENTALS</a></li>
        <li><a href="#equipment">GALLERY</a></li>
        <li><a href="#team">MEET THE TEAM</a></li>
        <!-- <li><a href="#testimonials">TESTIMONIALS</a></li> -->
        <li><a href="#contact">CONTACT US</a></li>
      </ul>
    </nav>
  </div>
  <div id="subhaul">
    <p>We are seeking<br>Owner-Operators!</p>
    <a href="subhaul" class="btn btn-outline-primary">More Info</a>
  </div>
</div>

<div id="title" class="container-fluid">
  <div class="col-sm-offset-3 col-sm-9">
    <h1><span class="firstLetter">S</span>undance <span class="firstLetter">T</span>ransport, Inc.</h1>
  </div>
</div>

<!-- Services -->
<div id="services" class="container-fluid text-center bg-white">
  <div class="col-sm-offset-3 col-sm-9">
    <h2><span class="firstLetter">S</span>ERVICES</h2>
    <div class="row slide">
      <div class="col-sm-6">
        <span><img src="pics/trucking.jpg"></span>
        <h3>TRUCKING</h3>
        <p>Sundance is a family-owned &amp; operated flatbed trucking company that specializes in jobsite delivery. Our single-point-of-contact strategy ensures adaptability needed to follow contractors’ specifications.</p>
        <a href="#trucking" class="mobile">Learn More</a>
      </div>
      <div class="col-sm-6">
        <span><img src="pics/certification2.png"></span>
        <h3>RENTALS/SERVICES</h3>
        <p>Sundance has superior industry knowledge, customer relationships, and WMBE/SBE Certifications to help contractors meet their diversity goals.</p>
        <a href="#rentals" class="mobile">Learn More</a>
      </div>
    </div>
    <div class="row slide desktop">
      <div class="col-sm-6">
        <a href="#trucking">Learn More</a>
      </div>
      <div class="col-sm-6">
        <a href="#rentals">Learn More</a>
      </div>
    </div>
  </div>
</div>

<!-- About Us -->
<!-- <div id="about" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-offset-3 col-sm-9">
      <h2><span class="firstLetter">A</span>bout <span class="firstLetter">U</span>s</h2>
      <p>Coming soon!</p>
    </div>
  </div>
</div> -->

<!-- Trucking -->
<div id="trucking" class="container-fluid text-center bg-white">
  <div class="col-sm-offset-3 col-sm-9">
    <h2><span class="firstLetter">T</span>rucking</h2>
    <div class="row">
      <div class="col-sm-4 addSlide">
        <span class="glyphicon glyphicon-time"></span>
        <h3>FLEXIBILITY</h3>
        <p>We can accommodate next day deliveries and adapt to dynamic construction schedule changes.</p>
      </div>
      <div class="col-sm-4 addSlide">
        <span id="glyphicon-trailer"><img src="pics/glyphicon-trailer.png" height="54"></span>
        <h3>TRAILERS</h3>
        <p>Sundance can provide flatbed and beavertail trailers to deliver your products and equipment. Additionally, we have extra trailers for preloading.</p>
      </div>
      <!-- <div class="col-sm-4 addSlide">
        <span class="glyphicon glyphicon-map-marker"></span>
        <h3>DELIVERY RANGE</h3>
        <p>We service Northern &amp; Central California.</p>
      </div> -->
      <div class="col-sm-4 addSlide">
        <span class="glyphicon glyphicon-resize-horizontal"></span>
        <h3>WIDE LOADS</h3>
        <p>All of our trucks carry the necessary permits to haul loads up to 12 feet wide.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 addSlide">
        <span class="glyphicon glyphicon-leaf"></span>
        <h3>SUSTAINABILITY</h3>
        <p>All of our trucks are CARB-compliant.</p>
       <!--  <p>*www.carbcompliance.info</p> -->
      </div>
      <!-- <div class="col-sm-4 addSlide">
        <span id="glyphicon-trailer"><img src="pics/glyphicon-trailer.png" height="54"></span>
        <h3>TRAILERS</h3>
        <p>Sundance can provide flatbed and beavertail trailers to deliver your products and equipment. Additionally, we have extra trailers for preloading.</p>
      </div> -->
      <div class="col-sm-4 addSlide">
        <span class="glyphicon glyphicon-map-marker"></span>
        <h3>DELIVERY RANGE</h3>
        <p>We service Northern &amp; Central California.</p>
      </div>
      <div class="col-sm-4 addSlide">
        <span id="glyphicon-forklift"><img src="pics/glyphicon-forklift.png" height="54"></span>
        <h3>FORKLIFTS</h3>
        <p>We have piggy-back forklifts to handle jobsite delivery.</p>
      </div>
    </div>
  </div>
</div>

<!-- Rental Services -->
<div id="rentals" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-offset-3 col-sm-9">
      <h2><span class="firstLetter">R</span>entals/<span class="firstLetter">S</span>ervices</h2>
      <p>Sundance Transport, Inc. is a certified WMBE/SBE business that provides competitive pricing for your equipment, material and service needs. We have existing long-term business relationships with many vendors that you already are using on your projects. Simply put – <i>Your vendors are our customers!</i>  Not only can we provide the products and services you need, Sundance can deliver them directly to your project.</p>
      <p>Sundance Transport has experience with the unique billing requirements of municipality projects and can tailor our invoices to your specifications. We also provide timely billing and will work with you to resolve any issues that may arise.</p>
      <p>Here are just some of the products and services we offer:</p>
      <div class="col-sm-6">
        <ul>
          <li>Shoring Products</li>
          <li>Trench Plates</li>
          <li>Pumps and Filtration Tanks</li>
          <li>Sheet Pile &amp; steel beams</li>
          <li>Hydrovac Truck Excavation and Vacuum Truck services</li>
          <li>Radar location services</li>
        </ul>
      </div>
      <div class="col-sm-6">
        <ul>
          <li>Traffic signs, barricades &amp; cones</li>
          <li>K-Rail</li>
          <li>Slide Rail Systems</li>
          <li>Erosion Control</li>
          <li>Pipe</li>
          <li>Heavy Equipment/ Machinery rental</li>
          <li>Training Classes</li>
        </ul>
      </div>
      <div class="container" style="width: 100%"></div>
      <div class="bottomLink">
        <a href="#contact">Contact us to discuss your specific needs.</a>
      </div>
    </div>
  </div>
</div>

<!-- Equipment -->
<div id="equipment" class="container-fluid bg-white">
  <div class="row">
    <div class="col-sm-offset-3 col-sm-9">
      <h2><span class="firstLetter">G</span>allery</h2>
      <div class="col-sm-4">
        <div id="truckCarousel" class="carousel slide" data-ride="carousel">
          
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
      <div class="container"></div>
      <div class="bottomLink">
        <a href="equipment">See the full gallery.</a>
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

    <div class="mySlides">
      <!-- <div class="image"></div> -->
      <img src="">
    </div>
  </div>
</div>

<!-- Meet the Team -->
<div id="team" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-offset-3 col-sm-9 text-center">
      <h2><span class="firstLetter">M</span>eet the <span class="firstLetter">T</span>eam</h2>
      <div class="col-sm-6 col-xs-12 profileParent">
        <div class="col-sm-12 profile">
          <div class="profpic">
            <img src="pics/reb_mil.jpg">
            <a href="https://www.linkedin.com/in/rebecca-miller-905b8714" target="_blank">
              <img src="pics/linkedin.png" id="linkedin">
            </a>
          </div>
          <div>
            <h3>Rebecca Miller</h3>
            <p>CEO / Accounting<br>Office: <a href="tel:19169332870">(916) 933-2870</a><br>Mobile: <a href="tel:19162755915">(916) 275-5915</a></p>
          </div>
        </div>
        <div class="bottomLink">
          <a onclick="showBio(this, '.reb')">Read my bio.</a>
        </div>
      </div>

      <div class="col-xs-12 bio mobile">
        <div class="reb">
          <img src="pics/tooltip_mid.svg">
          <p>Rebecca Miller has over 25 years of accounting experience.  She has a background in residential construction billing and several years of experience as an Account Manager for a Pension Administration firm.  Originally hired in 1998 by the founder of Sundance Transport, Rebecca began as Bookkeeper but soon became entrenched in all aspects of the business.  Rebecca’s comprehensive involvement in the business led her to becoming the majority owner of Sundance Transport in 2006.  Rebecca obtained the WBME and SBE certifications for Sundance and has earned a reputation for her accuracy and transparency in business and ethical business practices.</p>
        </div>
      </div>

      <div class="col-sm-6 col-xs-12 profileParent">
        <div class="col-sm-12 profile">
          <div class="profpic">
          <img src="pics/bry_mil.jpg">
            <a href="https://www.linkedin.com/in/bryan-miller-1643506a" target="_blank">
              <img src="pics/linkedin.png" id="linkedin">
            </a>
          </div>
          <div>
            <h3>Bryan Miller</h3>
            <p>COO / Dispatcher<br>Office: <a href="tel:19169332870">(916) 933-2870</a><br>Mobile: <a href="tel:19168708885">(916) 870-8885</a></p>
          </div>
        </div>
        <div class="bottomLink">
          <a onclick="showBio(this,'.bry')">Read my bio.</a>
        </div>
      </div>
      
      <div class="col-sm-12 bio desktop">
        <div class="reb">
          <img src="pics/tooltip_side.svg">
          <p>Rebecca Miller has over 25 years of accounting experience.  She has a background in residential construction billing and several years of experience as an Account Manager for a Pension Administration firm.  Originally hired in 1998 by the founder of Sundance Transport, Rebecca began as Bookkeeper but soon became entrenched in all aspects of the business.  Rebecca’s comprehensive involvement in the business led her to becoming the majority owner of Sundance Transport in 2006.  Rebecca obtained the WBME and SBE certifications for Sundance and has earned a reputation for her accuracy and transparency in business and ethical business practices.</p>
        </div>
      </div>
      <div class="col-xs-12 bio">
        <div class="bry">
          <img src="pics/tooltip_side.svg" class="desktop">
          <img src="pics/tooltip_mid.svg" class="mobile">
          <p>For over 25 years, Bryan Miller has been working in transportation, equipment rental and construction.  The experience he has acquired while holding these management positions make Bryan very well qualified to handle the daily operations for Sundance Transport.  Along with his vast network of relationships, Bryan’s industry knowledge and expertise allow him to support customers in a unique way.  Bryan understands the importance of communication and timely service instrumental to the success of every construction project.</p>
        </div>
      </div>


    </div>
  </div>
</div>

<!-- Testimonials -->
<!-- <div id="testimonials" class="container-fluid text-center bg-grey">
  <div class="col-sm-offset-3 col-sm-9">
    <h2>What People Are Saying About Us</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <p>Hey, that's pretty good.<br>Solid 8/10.</p>
          <p><i>-Bob</i></p>
        </div>
        <div class="item">
          <p>I'm speechless<br>I don't even know what to say.</p>
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
</div> -->

<!-- Contact Us -->
<div id="contact" class="container-fluid bg-white">
  <div class="row">
    <div id="contactInfo" class="col-sm-6 text-center">
      <h2><span class="firstLetter">C</span>ontact <span class="firstLetter">I</span>nfo</h2>
      <span class="glyphicon glyphicon-envelope"></span>
      <p><u>Phone Number:</u><br><a href="tel:19169332870">(916) 933-2870</a></p>
      <p><u>Email Address:</u><br><a href="mailto:sundancetransportinc@gmail.com">sundancetransportinc@gmail.com</a></p>
      <p><u>Mailing Address:</u><br>Sundance Transport, Inc.<br>P.O. Box 5605<br>El Dorado Hills, CA 95762</p>
      <br>
    </div>
    <div id="contactForm" class="col-sm-6">
      <h2><span class="firstLetter">G</span>et In <span class="firstLetter">T</span>ouch</h2>
      <h6 id="setError" style="text-align: center; margin-bottom: 10px;">Please make sure all fields are completed.</h6>
      <form action="redirect.php" method="post">
        <div class="col-sm-12 form-group">
          <input class="form-control" name="name" autocomplete="off" placeholder="Name" type="text" required <?php echo isset ($fields['name'])? 'value="'.security($fields['name']).'"':''?>>
          <h6 id="nameError">Please provide your name.</h6>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" name="email" autocomplete="off" placeholder="Email Address" type="email" required <?php echo isset ($fields['email'])? 'value="'.security($fields['email']).'"':''?>>
          <h6 id="emailError">Please provide a valid email address.</h6>
        </div>
        <div class="col-sm-12 form-group">
          <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5" required><?php echo isset ($fields['message'])? security($fields['message']):''?></textarea>
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
  <div id="footer" class="bg-black">
    <p>Copyright &copy; 2017 Sundance Transport, Inc. All Rights Reserved.</p>
    <p>Website Developed by <a href="https://www.linkedin.com/in/adam-miller-3b2b71127/" target="_blank" style="font-style: normal">Adam Miller</a></p>
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

  unset($_SESSION['fields']);
  unset($_SESSION['userErrors']);
  unset($_SESSION['serverErrors']);
?>
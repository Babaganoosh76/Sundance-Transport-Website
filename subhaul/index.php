<?php 
  session_start();
  require_once "../lib/security.php";
  $fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
  $userErrors = isset($_SESSION['userErrors']) ? $_SESSION['userErrors'] : [];
  $serverErrors = isset($_SESSION['serverErrors']) ? $_SESSION['serverErrors'] : [];
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>Sundance Transport | Subhaul</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Adam Miller">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/template.css">
  <link rel="stylesheet" type="text/css" href="../css/subhaul.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Orbitron:400,700" rel="stylesheet">
  <link rel="canonical" href="https://sundancetransportinc.com/subhaul">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script type="text/javascript" src="../js/scroll.js"></script>
  <script type="text/javascript">
    function showContact(){
      $('#contact').show();
      scrollTo('#contact');
    }
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

<body>

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

<!-- Subhaul -->
<div id="subhaul" class="main container-fluid">
  <div id="back">
    <a href="./#subhaul" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    </a>
    <a href="../">
      <p>Back</p>
    </a>
  </div>
  
  <div class="col-sm-offset-2 col-sm-8">
    <h2><span class="firstLetter">S</span>ubhaul <span class="firstLetter">I</span>nformation</h2>

    <p>Sundance is always looking for qualified owner-operators.<br>We provide our subhaulers with:</p>
    <ul class="pros">
      <li>Better-paying loads</li>
      <li>Weekly Pay</li>
      <li>Full-time available</li>
      <li>Monday through Friday</li>
      <li>Home every night</li>
      <li>Local runs</li>
    </ul>
    <!-- <p class="asterisk">*Payment terms are net 30</p> -->
    <br>
    <p>If you are interested in hauling for us, please provide:</p>
    <div class="row">
      <div class="col-sm-6">
        <ul class="req">
          <li>A current DMV Printout</li>
          <li>Proof of enrollment in B.I.T. Program</li>
          <li>A Certificate of Liability Insurance naming Sundance Transport, Inc. as additional insured</li>
        </ul>
      </div>
      <div class="col-sm-6">
        <ul class="req">
          <li>$50,000 Minimum Cargo Insurance</li>
          <li>A <a href="http://www.irs.gov/pub/irs-pdf/fw9.pdf" target="_blank">W-9 form</a></li>
          <li>Proof of enrollment in D.O.T. Drug Consortium</li>
          <li>A copy of Motor Carrier Permit</li>
        </ul>
      </div>
    </div>
    <br>
    <p>All sub-haulers are required to have the following:</p>
    <ul class="req">
      <li>An Annual Wide Load Permit</li>
      <li>Chains and Binders</li>
      <li>Straps</li>
      <li>PPE (hard hat, safety glasses, safety vest)</li>
    </ul>
    <br>
    <a class="btn btn-outline-primary" role="button" onclick="showContact()">Become a Subhauler!</a>
  </div>
</div>

<div id="contact" class="container-fluid">
  <div class="col-sm-offset-2 col-sm-8">
    <h2><span class="firstLetter">B</span>ecome a <span class="firstLetter">S</span>ubhauler!</h2>
    <p>Fill out this form with your information, and we'll get back to you as soon as possible!</p>
    <div id="contactForm" class="col-sm-12">
      <h6 id="setError" style="margin-bottom: 10px;">*Please make sure all fields are completed*</h6>
      <form action="redirect_subhaul.php" method="post">
        <div class="col-sm-12 form-group">
          <input class="form-control" name="name" autocomplete="off" placeholder="Name" type="text" required <?php echo isset ($fields['name'])? 'value="'.security($fields['name']).'"':''?>>
          <h6 id="nameError">Please provide your name.</h6>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" name="phone" autocomplete="off" placeholder="Phone Number" type="tel" required <?php echo isset ($fields['phone'])? 'value="'.security($fields['phone']).'"':''?>>
          <h6 id="phoneError">Please provide a phone number.</h6>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" name="email" autocomplete="off" placeholder="Email Address" type="email" required <?php echo isset ($fields['email'])? 'value="'.security($fields['email']).'"':''?>>
          <h6 id="emailError">Please provide a valid email address.</h6>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" name="company" autocomplete="off" placeholder="Company Name" type="text" required <?php echo isset ($fields['company'])? 'value="'.security($fields['company']).'"':''?>>
          <h6 id="companyError">Please provide your company name.</h6>
        </div>
        <div class="col-sm-12 form-group">
          <textarea class="form-control" id="message" name="message" placeholder="Additional comments..." rows="5" required><?php echo isset ($fields['message'])? security($fields['message']):''?></textarea>
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
  if(in_array('phone', $userErrors)){
    echo '<script type="text/javascript">$("#phoneError").show();</script>';
  }
  if(in_array('email', $userErrors)){
    echo '<script type="text/javascript">$("#emailError").show();</script>';
  }
  if(in_array('company', $userErrors)){
    echo '<script type="text/javascript">$("#companyError").show();</script>';
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
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Yogurt Hill</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/yogurthill.css" />
  <script src="js/vendor/modernizr.js"></script>
  
</head>

<body>
   
<?php include 'navigation.html'; ?>


  <!-- MAIN BANNER -->
  <img data-interchange="
  [images/yogurthill-large2.png, (default)],
  [images/yogurthill-small2.png, (small)],
  [images/yogurthill-medium2.png, (medium)], 
  [images/yogurthill-large2.png, (large)]" class="shadow" src="images/yogurthill-large2.png" alt="yogurt hill banner">   
   
   <div class="row push">
    <div class="small-12 large-6 columns">
      <img src="images/thumbups.jpg" data-wow-delay="0.5s" class="wow fadeIn text center" alt="rasberries"/>
    </div>
      <div class="small-12 large-6 columns">
    <a href="http://www.yelp.com/biz/yogurt-hill-hayward"><img src="images/yelp-logo.png" class="center text" alt="yelp"></a>  
    <h2> Social Media Discounts</h2>
	<h3>Yelp! Check-In offers</h3>
	<p>Yelp Discount: 15% off</p>
    </div>    
  </div>
   
<?php include 'footer.html'; ?>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  <script src="js/wow.min.js"></script>
  <script>
  wow = new WOW( {
      boxClass:     'wow',
      animateClass: 'animated',
      offset:       100
      }
  );
  
  wow.init();
  </script>
  </body>
</html>

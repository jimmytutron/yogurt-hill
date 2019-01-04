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
  [images/yogurthill-large2.png, (large)]" class="shadow" src="images/yogurthill-large2.png" alt="yogurt hill banner" >   
   
  <div class="row push">
    <div class="small-12 large-6 columns">
      <img src="images/tallcup.jpg" data-wow-delay="0.5s" class="wow fadeIn center" alt="rasberries"/>
    </div>
    
    <div class="small-12 large-6 columns">
      <h2> We happily offer discounts to</h2>
      <h3>CSUEB Students</h3> 
      <p>Student Discount: 5% off</p>
      <h3>Yelp! Check-In offers</h3>
      <p>Yelp Discount: 15% off</p>
      <h3>Spot on Rewards</h3>
      <p>Allows our customers whom scan their barcode over 15 times
      to receive $3.00 off their purchase 
      Along with four other participating offers. Call for details .
  ​	SpotOn allows customers to scan their card ONCE PER HOUR on yogurt their purchase.
      Linking your SpotOn account to your Facebook account will  automatically give you 5 spots​!
      </p>
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

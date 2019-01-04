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
      <img src="images/students.jpg" data-wow-delay="0.5s" class="wow fadeIn text center" alt="rasberries"/>
    </div>
      <div class="small-12 large-6 columns">
    <h2> Student Discounts</h2>
	<h3>CSUEB Students</h3> 
	<p>Student Discount: 5% off</p>
	<a href="http://www20.csueastbay.edu/students/index.html"><img src="images/CSUEB.png" class="center text" alt="csueb"></a>
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

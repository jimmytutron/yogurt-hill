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
      <img src="images/about.png" class="text wow fadeIn center" alt="yogurt hill"><br>
      <img src="images/about2.png" class="wow fadeIn center" alt="yogurt hill">
    </div>
    
    <div class="small-12 large-6 text columns">
      <h2>About Us</h2>
      <p>We are a family run business, who opened up in Fall 2012 and have proudly served the downtown Hayward area for 3 years. This is our first store but we plan to
      in the future expand to have more stores and even more flavors and toppings!</p>
      <h2>Yogurt with a Twist</h2>
      <p>At Yogurt Hill, we offer a twist to the traditional concept of 'self-serve' yogurt. In addition to our delicious flavors, we offer something we call the bottom bar.
      The bottom bar allows for toppings and other treats at the bottom of their yogurt cups. This way all our customers can have something sweet as a topping and a suprise inside
      when they eat their yogurt. The bottoms bar includes Fudge Brownies, Chocolate Chip Cookies, Love Letters, Vanilla and Strawberry Wafers, and Sugar Cones. </p>
      <h2>Healthy Choices</h2>
      <p>All of our flavors are gluten free and kosher certified. We also have sugar free options, non fat options and low fat options. We are committed to keeping our options fresh and healthy!</p>
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

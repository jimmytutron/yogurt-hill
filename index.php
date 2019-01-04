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
  [images/yogurthill-large.png, (default)],
  [images/yogurthill-small.png, (small)],
  [images/yogurthill-medium.png, (medium)], 
  [images/yogurthill-large.png, (large)]" class="shadow" src="images/yogurthill-large.png" alt="yogurt hill banner">    
    
   <!--MAIN PAGE CONTENT-->
   
   <!--SPACER-->
  <div class="box">
    <div class="row fullWidth">
      <div class="small-12 large-12 large-centered columns">
        <h1 class="intro-quote wow animated fadeInLeftBig">Treat Yourself, to deliciousness, daily!</h1>
        <h2 class="intro-flavor wow animated fadeInRightBig">With over 40 flavors and 30 toppings to choose from</h2>
      </div>
    </div>
  </div>
  
  <!--Circle Images-->
  <div class="row push">
    <div class="small-12 large-4 columns">
      <img src="images/gummy.jpg" data-wow-delay="0.5s" class="circle wow fadeIn" alt="rasberries"/>
    </div>
      <div class="small-12 large-4 columns">
    <p data-wow-delay="0.5s" class="circle wow fadeIn circle circleText color-cream">Unique Toppings</p>
    </div>  
      <div class="small-12 large-4 columns">
    <img src="images/yogurtcup.jpg" data-wow-delay="0.5s" class="circle wow fadeIn" alt="cherries"/>
    </div>      
  </div>
  
  <div class="row">
    <div class="small-12 large-4 columns">
      <p data-wow-delay="0.5s" class="circle wow fadeIn circle circleText color-berry">Fresh Ingredients</p>
    </div>
    <div class="small-12 large-4 columns">
      <img src="images/toppings.jpg" data-wow-delay="0.5s" class="circle wow fadeIn" alt="honey"/>
    </div>  
    <div class="small-12 large-4 columns">
      <p data-wow-delay="0.5s" class="circle wow fadeIn circle circleText color-cherry">Awesome Flavors</p>
    </div>  
  </div>    
  
  <!--MAP-->
		<div data-interchange="[maps/small.html, (small)], [maps/medium.html, (medium)], [maps/large.html, (large)]">
		  <div data-alert class="alert-box secondary radius">
			This is the default content.
			<a href="#" class="close">&times;</a>
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

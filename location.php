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
      <h2>Location</h2>
      <p>We are located right next to Century Theaters Hayward in the heart of the downtown! Grab some yogurt after your movie!
      Currently we only have 1 location but are planning to expand in the near future! </p>
      <h2>Hours</h2>
      <p>Mondays-Thursdays: 11am-9pm<br>
      Fridays-Saturdays: 11am-10pm<br>
      Sundays: 12:30pm-8pm<br>
      Closed on Major Holidays
      </p>   
      <h2>WiFi Hotspot</h2>
      <p>In addition to the yougurt we also offer free wifi!</p>
    </div>
    
    <div class="small-12 large-6 columns">
      <div data-interchange="[maps/small.html, (small)], [maps/medium.html, (medium)], [maps/large2.html, (large)]">
        <div data-alert class="alert-box secondary radius">
        This is the default content.
        <a href="#" class="close">&times;</a>
        </div>
      </div>
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

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
  [images/yogurthill-large2.png, (large)]" class="shadow" >  
   
    <div class="row push">
      <div class="small-12 large-6 columns">
        <img src="images/callus.jpg" data-wow-delay="0.5s" class="wow fadeIn text center" alt="rasberries"/>
      </div>
        <div class="small-12 large-6 columns">
      <p>Got a Question? Just want to say Hello? Call Us @ <span class="phone">1-510-733-5205</p> 
  ​	  <p>Or Email Us at YogurtHill@gmail.com <br> and fill out the form below!</p>
      
       <form id="myForm" method="post" data-abide>  
          
          <h5>Contact Us</h5>
          <label>Name</label>
          <small class="error">Your full name is required.</small>
          <input type="text" placeholder="Full Name" required>
          
          <label>Email</label>
          <small class="error">An email address is required.</small>

          <input type="email" placeholder="username@address.com" required>
          
          
          <label>Your Message</label>
          <small class="error">Your message is required.</small>
          <textarea placeholder="Enter your message here" required></textarea>
          
        <input type="submit" class="nice radius button" value="Send Message"></button></a>
        </form>
        
      </div>    
  </div>
  
  
<?php include 'foottest.html'; ?>
    
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

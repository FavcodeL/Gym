<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <!-- iconscout css -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <!-- stylesheets -->
  <link rel="stylesheet" href="css/nav_style.css">
  <link rel="stylesheet" href="css/style.css">
  <title>myGym</title>
</head>

<body>
  <nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo"><i>my<span class=".gym-text"><strong>Gym</strong></span></i></div>
    <ul class="links">
      <li><a href="index.php">Home</a></li>
      <li><a href="contact_us.html">Contact Us</a></li>
      <li><a href="about-us.html">About Us</a></li>
      <li><a href="login-page.php">Login</a></li>
      <li><a href="register-page.php">Sign Up</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>

  <div id="hero">
    <img src="img/strength.jpg" alt="left hand extended holding a weight">
  </div>
  <main>
    <div class="tablet">

      <p>Welcome to myGym. Our Mission
        is to help our clients meet their fitness
        and nutrition goals.
      </p>

      <p>If you have struggled with getting healthy and
        need motivation and resources to make a healthy lifestyle change,
        contact us today. Our facility includes state-of-the-art equipment,
        convenient group training classes, and nutrition tips and information
        to keep you healthy.
      </p>

      <p>We provide FREE one-week membership so you can experience the benefit of
        our equipment and facility. This one-week trial gives you complete access to
        our equipment, training classes, and nutrition planning. Contact us today
        to start your free trial
      </p>
      <h3>FREE One-Week Trial Membership</h3>
      <p>Call Us Today to Get Started</p>
      <p class="tel-link"><a href="tel:8145559608">(814) 555-9608</a></p>

      <h4>Fitness Club Hours:</h4>
      <ul class="hours">
        <li>Mon-Thu: 6:00am-6:00pm</li>
        <li>Friday: 6:00am-4:00pm</li>
        <li>Saturday: 8:00am-6:00pm</li>
        <li>Sunday: Closed</li>
      </ul>
    </div>

    <span class="action">start your free trial</span>
  </main>
  <footer>
    <p>&copy; Copyright 2022. All Rights Reserved</p>
    <p><a href="mailto: mygym@club.net">myGym@club.net</a></p>
  </footer>
</body>

</html>

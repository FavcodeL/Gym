<?php
require 'db_conn.php';

        $login_error = "";
        $password_error = "";

/**** calling variables****/
		if (isset($_POST['login'])){
		$user=$_POST['username'];
		$pass=$_POST['password'];

		$query = $conn->query("SELECT * FROM registration WHERE USERNAME ='$user'") or die(mysqli_connect_error());
		$count = $query->fetch_array();
        
        $correct = $conn->query("SELECT * FROM registration WHERE USERNAME ='$user' && PASSWORD = '$pass'") or die(mysqli_connect_error());
		$check = $correct->fetch_array();

		if ($count <= 0){ 
            $login_error = "INCORRECT USERNAME OR PASSWORD";
        }
        else{
            if($check==0 ){
                 $password_error = "PASSWORD DOESN'T MATCH, TRY AGAIN!";
            }
            else{
                echo "<script> window.location.assign('payment.html');</script>";
        }
    }
     }

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <!-- iconscout css -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="css/nav_style.css">
  <link rel="stylesheet" href="css/register_style.css">
  <title>myGym</title>
</head>

<body>
  <nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo"><i>my<span class=".gym-text"><strong>Gym</strong></span></i></div>
    <ul class="links">
      <li><a href="index.html">Home</a></li>
      <li><a href="contact_us.html">Contact Us</a></li>
      <li><a href="about-us.html">About Us</a></li>
      <li><a href="register-page.php">Sign Up</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>

  <section>
    <div class="login-container">
      <div class="forms">
        <div class="form login">
          <span class="title">Login</span>
          <form name="loginForm" class="form-fields" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="input-field">
              <input id="user" name="username" type="text" placeholder="User Name" required>
              <i class="uil uil-user icon"></i>
            </div>

            <div class="input-field">
              <input id="pass" name="password" type="password" class="password" placeholder="Enter password" required>
              <i class="uil uil-lock icon"></i>
              <i class="uil uil-eye-slash showHidePw"></i>
            </div><br>

            <!-- <div class="checkbox-text">
              <div class="checkbox-content">
                <input type="checkbox" id="logCheck">
                <label for="logCheck" class="text">Remember me</label>
              </div>

              <a href="#" class="text">Forgot password?</a>
            </div> -->
            <center>
            <span style="color:red" class="text-red-600"><?php echo $login_error; ?></span>
            <span style="color:red" class="text-red-600"><?php echo $password_error; ?></span>
    </center>

            <div class="input-field button">
            <input id="submit" type="submit" value="LOGIN NOW" name="login"><br> 
            </div>
            
          </form>

          <div class="login-signup">
            <span class="text">Don't have an account?
              <a href="register-page.php" class="text signup-link">Signup now</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <p>&copy; Copyright 2022. All Rights Reserved</p>
    <p> <a href="mailto:forwardfitness@club.net">forwardfitness@club.net</a> </p>
  </footer>
  <script src="script.js"></script>
</body>

</html>
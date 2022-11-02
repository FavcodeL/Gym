<?php
require 'db_conn.php';

    $user_name_exist_error = "";
    $password_error = "";
    $new_user_success = "";
    $pass_length_error ="";
    $registration_success="";

if(isset($_POST['save'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $passcon=$_POST['re_password'];

    $em=$_POST['email'];

    $query = $conn->query("SELECT * FROM registration WHERE USERNAME ='$user'") or die(mysqli_connect_error());
    $count = $query->fetch_array(); 

    if ($count  > 0){ 
            $user_name_exist_error = "USERNAME ALREADY EXIST";
       }
       else{
            if($pass != $passcon){
                 $password_error = "PASSWORD DOESN'T, MATCH TRY AGAIN!";
		}
          else{
            if(strlen($pass)<6){
              $pass_length_error ="PASSWORD IS TOO SHORT";
            }
            else{ 
				  	$conn->query("insert into registration(USERNAME,PASSWORD,EMAIL)VALUES('$user','$pass','$em')");
            $registration_success ="USER SUCCESSFULLY REGISTERED";
						}
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
      <li><a href="login-page.php">Login</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>
  <section>
    <div class="login-container">
      <div class="form signup">
        <span class="title">Sign up</span>
        <form name="registerForm" class="form-fields" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="input-field">
            <input id="user" name="username" type="text" placeholder="Enter username" required>
            <i class="uil uil-user"></i>
          </div>

          <div class="input-field">
            <input id="em" name="email" type="email" placeholder="Enter email" required>
            <i class="uil uil-envelope icon"></i>
          </div>

          <div class="input-field">
            <input id="pass" name="password" type="password" class="password" placeholder="Enter password" required>
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
          </div>

          <div class="input-field">
            <input id="passcon "name="re_password" type="password" class="password" placeholder="Confirm password" required>
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
          </div><br>
          <center>
            <span style="color:red" class="text-red-600"><?php echo $user_name_exist_error; ?></span>
            <span style="color:red" class="text-red-600"><?php echo $password_error; ?></span>
            <span style="color:red" class="text-red-600"><?php echo $pass_length_error; ?></span>
            <span style="color:green" class="text-red-600"><?php echo $registration_success; ?></span>
          </center>
          <div class="input-field button">
            <input id="submit" type="submit" value="Join" name="save" >

          </div>
        </form>

        <div class="login-signup">
          <span class="text">Already have an account?
            <a href="login-page.php" class="text login-link">Login now</a>
          </span>
        </div>
      </div>
    </div>
    </section>
    <script src="script.js"></script>
    </body>
</html>
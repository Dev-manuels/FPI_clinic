<?php
  include 'connection.php';
  session_start();

  $output=$_SESSION['message'];
  $_SESSION['message'] = "";

  if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if(empty($email)){
      $output .= "Email address can not be Empty";
    } else if(empty($password)){
      $output .= "Enter valid Password";
    } else {
      $query = " SELECT * FROM admin WHERE email='$email' AND password = '$password'";
      $res = mysqli_query($con,$query);

      if(mysqli_num_rows($res) == 1){
        $_SESSION['valid'] = true;
        $_SESSION['username'] = $email;
        header('location:dashboard.php');
      }else {
          $output .= "Enter valid user credentials";
      }

    }

  }

?>


<html lang="en">
    <head>
        <?php include 'links.php';?>
        <title>Login</title>
    </head>
    <body>
        <nav class="nav-bar login-bar">
            <div class="logo-container">
            <a href="https://federalpolyilaro.edu.ng"><img class="logo" src="https://federalpolyilaro.edu.ng/images/header-logo.png" alt="FPI logo" height="70px" width="180px"></a>
            </div>
            <ul class="main-nav login-links">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="appointment.php">Appointment</a></li>
            </ul> 
        </nav>

        <main class="main">
            <form method="post" class="form-container">
                <div class="login-main-text">
                    <h2 class="hero-text-main">The Medical Centre</h2>
                    <h2 class="hero-text">Login Portal</h2>
                </div>
                <div class="form-input-container">
                <div style="color: red;, font-size: 2rem;"><b><?php echo $output  ?></b></div>
                    <div class="form-input">
                        <label for="Email">Email:</label>
                        <input class="large" type="email" name="email" placeholder="Enter your Email" required>
                    </div>

                    <input type="text" name="username" style="display: none;">
                    <div class="form-input">
                        <label for="Password">Password:</label>
                        <input class="large" type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Login" name="Login">
                    </div>
                </div>
            </form>

        </main>
        
    </body>
</html>
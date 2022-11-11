<?php
  include 'connection.php';
  if(!$_SESSION) { 
    session_start();
} 

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
    <?php include 'nav.php';?>

        <main class="main login-main">
            <form method="post" class="form-container">
                <div class="login-main-text">
                    <h2 class="hero-text-main">The Medical Centre</h2>
                    <h2 class="hero-text">Login Portal</h2>
                </div>
                <div class="form-input-container">
                <div class="error"><b><?php echo $output  ?></b></div>
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
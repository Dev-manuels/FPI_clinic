<?php
    include 'connection.php';
    session_start();
    include 'access.php';

    
    
    $output=$_SESSION['message'];

    if(isset($_POST['Register'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query = "SELECT * FROM admin WHERE email ='$email'";
        $res = mysqli_query($con,$query);
    
    if(empty($email)){
      $output .= "Email address can not be Empty";
    } else if(empty($password)){
      $output .= "Enter valid Password";
    } else if(mysqli_num_rows($res) >= 1){
        $output .= "Email is already in use, use a diffrent Email";
    } else {

        $sql="insert into `admin` (name,email,password) values('$name','$email','$password')";

        $result=mysqli_query($con,$sql);
  
  
        if ($result) {
          $_SESSION['message'] = "Registration Successful";
          header('location:dashboard.php');
        } else {
          die(mysqli_error($con));
        }

    }

  }

?>


<html lang="en">
    <head>
        <?php include 'links.php';?>
        <title>Register Admin</title>
    </head>
    <body>
        <?php include 'nav.php'; ?>

        <main class="main login-main">
            <form method="post" class="form-container">
                <div class="login-main-text">
                    <h2 class="hero-text-main">The Medical Centre</h2>
                    <h2 class="hero-text">REGISTER NEW ADMIN</h2>
                </div>
                <div class="form-input-container">
                <div style="color: red;, font-size: 2rem;"><b><?php echo $output  ?></b></div>
                    <div class="form-input">
                        <label for="Name">Name:</label>
                        <input class="large" type="text" name="name" placeholder="Enter Staff FullName" required>
                    </div>
                    <div class="form-input">
                        <label for="Email">Email:</label>
                        <input class="large" type="email" name="email" placeholder="Enter Staff  Email" required>
                    </div>
                    <input type="text" name="username" style="display: none;">
                    <div class="form-input">
                        <label for="Password">Password:</label>
                        <input class="large" type="password" name="password" placeholder="Enter Password For Staff" required>
                    </div>
                    <div class="form-submit">
                        <input type="submit" value="Login" name="Register">
                    </div>
                </div>
            </form>

        </main>
        
    </body>
</html>
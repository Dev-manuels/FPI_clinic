<?php
  include 'connection.php';
  session_start();

  $output=$_SESSION['message'];
  $_SESSION['message'] = "";

  if(isset($_POST['check'])){
    $regNo=$_POST['regNo'];
    
    if(empty($regNo)){
      $output .= "Registration number can not be Empty";
    } else {
      $query = " SELECT * FROM appointment WHERE regNo='$regNo' ";
      $res = mysqli_query($con,$query);
      
      if(mysqli_num_rows($res) == 1){
        $row=mysqli_fetch_assoc($res);
        $time=$row['time'];
        $date=$row['date'];
        $status=$row['status'];
        $output .= "$regNo reservation status is $status <br> Date = $date and time = $time";
      } else {
        $output .= "$regNo has no found appointments";
      }
    }
  }

?>


<html lang="en">
    <head>
        <?php include 'links.php';?>
        <title>Checker</title>
    </head>
    <body>
        <?php include 'nav.php'; ?>

        <main class="main login-main">
            <form method="post" class="form-container">
                <div class="login-main-text">
                    <h2 class="hero-text-main">The Medical Centre</h2>
                    <h2 class="hero-text">Status checker</h2>
                </div>
                <div class="form-input-container">
                  <div class="error">
                    <b><?php echo $output  ?></b>
                  </div>
                  <div class="form-input">
                      <label for="Registration Number">Registration Number:</label>
                      <input class="large" type="text" name="regNo" 
                      placeholder="Enter your Registration number" required>
                  </div>
                  <div class="form-submit">
                      <input type="submit" value="Check" name="check">
                  </div>
                </div>
            </form>

        </main>
        
    </body>
</html>
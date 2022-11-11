<?php
  include 'connection.php';
  if(!$_SESSION) { 
    session_start();
  } 

  $output=$_SESSION['message'];
  $_SESSION['message'] = "";

  if(isset($_POST['check'])){
    $regNo=$_POST['regNo'];
    $regNo = trim($regNo);
    
    if(empty($regNo)){
      $output .= "Registration number can not be Empty";
    } else {
      $query = "SELECT * FROM appointment WHERE regNo='$regNo' ";
      $res = mysqli_query($con,$query);
      
      if(mysqli_num_rows($res) == 1){
        $row=mysqli_fetch_assoc($res);
        $name=$row['name'];
        $time=$row['time'];
        $date=$row['date'];
        $status=$row['status'];
        if ($status == "Pending") {
          $output .= "dear $name,<br>your reservation is $status <br> Date is $date and time is $time.";
        } else {
          $output .= "dear $name,<br>your reservation has been $status <br> Date is $date and time is $time.";
        }
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
    <?php include 'nav.php';?>

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
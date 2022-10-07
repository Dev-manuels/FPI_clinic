<?php
      include 'connection.php';
      session_start();
      
      if(isset($_POST['logout'])){
        unset($_SESSION['valid']);
        unset($_SESSION['username']);
        session_destroy();
        header('location:login.php');
      }
    
          
      if ($_SESSION['valid'] != true) {
        echo '
        <nav class="nav-bar">
            <div class="logo-container">
                <a href="https://federalpolyilaro.edu.ng"><img class="logo" src="https://federalpolyilaro.edu.ng/images/header-logo.png" alt="FPI logo" height="70px" width="180px"></a>
            </div>
            <ul class="main-nav">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="appointment.php">Appointment</a></li>
            </ul> 
        </nav>';
      }else{  
        echo '
        <nav class="nav-bar">
            <div class="logo-container">
                <a href="https://federalpolyilaro.edu.ng"><img class="logo" src="https://federalpolyilaro.edu.ng/images/header-logo.png" alt="FPI logo" height="70px" width="180px"></a>
            </div>
            <ul class="main-nav">
                <li><a class="active" href="dashboard.php">DASHBOARD</a></li>
                <li><a href="admin.php">Add Admin</a></li>
                <li><form method="post"><input class="logout" type="submit" value="Logout" name="logout"></form></li>
            </ul> 
        </nav>';
      }

?>
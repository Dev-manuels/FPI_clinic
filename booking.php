<?php
    include 'connection.php';
    session_start();
?>
<html lang="en">
<head>
  <?php include 'links.php';?>
  <title>Bookings</title>
</head>
<body>
  <nav class="nav-bar login-bar">
    <div class="logo-container">
      <a href="https://federalpolyilaro.edu.ng"><img class="logo" src="https://federalpolyilaro.edu.ng/images/header-logo.png" alt="FPI logo" height="70px" width="180px"></a>
    </div>
    <ul class="main-nav login-links">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
    </ul> 
  </nav>
  <main>
    <h1>Bookings</h1>
  </main>
  
</body>
</html>
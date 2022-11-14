<?php
    include 'connection.php';
    if(!$_SESSION) { 
      session_start();
  }
  $stat = $_SESSION['stat'];
  $_SESSION['stat']="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'links.php';?>
  <title>Successful</title>
</head>
<body>
<?php include 'nav.php';?>
  <main>
    <div class="success-container">
    <img class="success-img" src="Images/Success.png">
     <?php 
      if ($stat == "no") {
      } else {
        echo '<p class="success-text"><b>Note:</b> Visit the clinic with <br>your school fees recepit<br>and passport photograph
        <br>to collect your clinic pass.</p>';
      }
     ?>
    </div>
  </main>

    <?php include 'scripts.php'; ?>
</body>
</html>
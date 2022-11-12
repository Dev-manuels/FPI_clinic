<?php
    include 'connection.php';
    if(!$_SESSION) { 
      session_start();
  }
  $stat=$_GET['stat'];
  if ($stat = 1) {
    $message = "";
  } else {
    $message = "<b>Note:</b> Visit the clinic with <br>your school fees recepit<br>and passport photograph
    <br>to collect your clinic pass.";
  }
  

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
    <p class="success-text"><?php echo $message;?></p>
    </div>
  </main>

    <?php include 'scripts.php'; ?>
</body>
</html>
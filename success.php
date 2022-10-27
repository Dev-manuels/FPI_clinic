<?php
    include 'connection.php';
    session_start();

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
    <p class="success-text"><b>Note:</b> Visit the clinic with <br>your school fees recepit<br>and passport photograph
    <br>to collect your clinic pass.</p>
    </div>
  </main>

    <?php include 'scripts.php'; ?>
</body>
</html>
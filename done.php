<?php
  include 'connection.php';
  if(!$_SESSION) { 
    session_start();
} 
  if ($_SESSION['valid'] != true) {
    $_SESSION['message'] = "Please login!";
    header("Location:login.php");
}else{
    $_SESSION['message'] = "";
}

  $id=$_GET['doneid'];
  $status="Registered";
  $sql="UPDATE `student` SET `status` = '$status' WHERE `student`.`id`=$id";

    $result=mysqli_query($con,$sql);

    if ($result) {
      
      header('location:dashboard.php');
    } else {
      die(mysqli_error($con));
    }

?>
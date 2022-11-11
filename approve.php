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

  $id=$_GET['approveid'];
  $status="Approved";
  $sql="UPDATE `appointment` SET `status` = '$status' WHERE `appointment`.`id`=$id";

    $result=mysqli_query($con,$sql);

    if ($result) {
      
      header('location:booking.php');
    } else {
      die(mysqli_error($con));
    }

?>
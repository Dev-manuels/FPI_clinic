<?php
  include 'connection.php';

  $id=$_GET['approveid'];
  $status="Registered";
  $sql="UPDATE `appointment` SET `status` = '$status' WHERE `appointment`.`id`=$id";

    $result=mysqli_query($con,$sql);

    if ($result) {
      
      header('location:booking.php');
    } else {
      die(mysqli_error($con));
    }

?>
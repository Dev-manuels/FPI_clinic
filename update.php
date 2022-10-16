<?php
  include 'connection.php';

  $id=$_GET['doneid'];
  $status="Registered";
  $sql="UPDATE `student` SET `status` = '$status' WHERE `student`.`id`=$id";

    $result=mysqli_query($con,$sql);

    if ($result) {
      
      header('location:Rstudents.php');
    } else {
      die(mysqli_error($con));
    }

?>
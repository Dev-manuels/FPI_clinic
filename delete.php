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


  if (isset($_GET['deleteid'])&&!(isset($_GET['table']))) {
    $id=$_GET['deleteid'];

    $sql="delete from student where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      header('location:dashboard.php');
    }else{
      die(mysqli_error($con));
    }
  }
  if (isset($_GET['deleteid'])&&isset($_GET['table'])) {
    $id=$_GET['deleteid'];
    $table=$_GET['table'];
    $sql="delete from $table where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      header('location:booking.php');
    }else{
      die(mysqli_error($con));
    }
  }

?>
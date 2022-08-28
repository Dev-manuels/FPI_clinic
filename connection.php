<?php

$con=new mysqli('localhost','root','','clinic');

if(!$con){
  die(mysqli_error($con));
}

?>
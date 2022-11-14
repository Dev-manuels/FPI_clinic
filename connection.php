<?php
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 1);

// LOCALHOST DATABSE CONNECTION
// $con=new mysqli('localhost','root','','clinic');

// if(!$con){
//   die(mysqli_error($con));
// }

// HEROKU DATABSE CONNECTION
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;

$con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


?>
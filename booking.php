<?php
  include 'connection.php';

  $output="";

  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $date=$_POST['date'];
    $time=$_POST['time'];

      $sql="insert into `appointment` (name,date,time) values('$name','$date','$time')";

      $result=mysqli_query($con,$sql);

      if ($result) {
        echo("sucess");
      } else {
        die(mysqli_error($con));
      
    }
    }


?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTER</title>
  </head>
  <body>
  <?php include 'sheader.php'; ?>
    <div class="Container mt-5 mx-3">
      <div class="col-md-12">
        <div class="row d-flex justify-content-center">
          <div class="col-md-6 shadow-sm">
            <h1 class= "text-center">WELCOME TO THE FEDERAL POLYCHNIC ILARO CLINIC</h1>
            <h2 class= "text-center">REGISTER</h2>
            <div class="text-center text-dark"><b><?php echo $output  ?></b></div>
            <form method="post">
              <div class="form-group">
                <label>name:</label>
                <input type="text" class="form-control" placeholder="Enter your Matric number" autocomplete="off" name="name">
              </div>
              <div class="form-group">
                <label>date:</label>
                <input type="date" class="form-control" autocomplete="off" name="date">
              </div>
              <div class="form-group">
                <label>Time:</label>
                <input type="time" min="08:00" max="18:00" class="form-control" autocomplete="off" name="time">
              </div>
              <button type="submit" class="btn btn-success mt-1 mb-1" name="submit">Submit</button>
            </form>
          </div>
      
        </div>
      </div> 
    </div>




    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
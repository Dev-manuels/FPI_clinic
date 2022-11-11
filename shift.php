
<?php
    include 'connection.php';
    if(!$_SESSION) { 
      session_start();
      $_SESSION['valid'] = false;
    } 
    $output="";

    $id=$_GET['shiftid'];
    $output="";

    $sql="select * from `appointment` where id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $regNo=$row['regNo'];
    $department=$row['department'];
    $time=$row['time'];
    $date=$row['date'];


  if(isset($_POST['shift'])){
    $name=$_POST['name'];
    $regNo=$_POST['regNo'];
    $department=$_POST['department'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $status="Shifted";



    if(empty($regNo)){
      $output .= "Registration number can not empty";
    } else if(empty($name)){
      $output .= "Name can not empty";
    } else if(empty($department)){
      $output .= "Please select Department";
    } else if(empty($time)){
      $output .= "Please pick a time";
    }  else if(empty($date)){
      $output .= "Please select a date";
    } else {
        $id=$row['id'];
        $sql="UPDATE `appointment` SET date='$date',time='$time', status='$status' WHERE id=$id" ;
        $result=mysqli_query($con,$sql);

      if ($result) {
        header('location:booking.php');
      } else {
        die(mysqli_error($con));
      }
    }
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php';?>
    <title>Reservations</title>
</head>
<body>
  <?php include 'nav.php';?>
    <main class="main">
        <form method="post" class="form-container" >
            <div class="login-main-text">
                <h2 class="hero-text-main">The Medical Centre</h2>
                <h2 class="hero-text">Reservations</h2>
            </div>
            <div class="form-input-container">
            <div class="error"><b><?php echo $output  ?></b></div>
                <div class="form-input">
                    <label for="name">Full Name</label>
                    <input class="large" type="text" name="name" placeholder="Enter your Full name" minlength="5" required readonly value="<?php echo $name;?>">
                </div>
                <div class="form-input">
                        <label for="regNo">Registration No:</label>
                        <input type="text" name="regNo" placeholder="Enter your Matric number" minlength="4" required readonly value="<?php echo $regNo;?>">
                </div>
               <div class="form-input">
                    <label for="Department">Department:</label>
                    <input type="text" name="department" required readonly value="<?php echo $department;?>">
                </div>
                <div class="form-row">
                    <div class="form-input">
                        <label for="Time">Time:</label>
                        <input type="time" name="time" required>
                    </div>
                    <div class="form-input">
                        <label for="date">Date:</label>
                        <?php $now = date("Y-m-d");
                            $date=date_create($now);
                            $now = date_format($date,"Y-m-d");
                            echo '<input type="date" name="date" min="'.$now.'" required> '   
                        ?>
                    </div>
               </div>
                    <div class="form-submit">
                        <input type="submit" value="Shift" name="shift">
                    </div>
            </div>
        </form>
        

    </main>
    
    <?php include 'scripts.php'; ?>
</body>
</html>
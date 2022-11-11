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

    $output=$_SESSION['message'];
    

    if ($_SESSION['valid'] != true) {
        $_SESSION['message'] = "Please login";
        header("Location:login.php");
    }else{
        $_SESSION['message'] = "";
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'links.php';?>
    <title>Reservations</title>
  </head>
  <body class="main-dashboard">
  <?php include 'nav.php';?>
    <main>
      <a class="dashboard-link" href="dashboard.php"><button class="btn-update">Back to Dashboard</button></a>
      
   
      <div class="main-text">
      <div style="color: red;, font-size: 2rem;"><b><?php echo $output  ?></b></div>
        <h2 class="hero-main">Requested appointment</h2>
      </div>
      <div class="table-container">
      <table class="table" border="1px">
      <thead class="">
        <tr>
          <!-- <th scope="col">#</th> -->
          <th scope="col">NAME</th>
          <th scope="col">REGISTATION NO</th>
          <th scope="col">DEPARTMENT</th>
          <th scope="col">DATE</th>
          <th scope="col">TIME</th>
          <th scope="col">RESERVATION-STATUS</th>
          <th scope="col">OPERATIONS</th>
        </tr>
      </thead>
      <tbody>




        <!-- php code to read from database and display-->
        <?php 
          $sql= "SELECT * from `appointment` WHERE status = 'Pending' ORDER BY `appointment`.`date` ASC";
          $result = mysqli_query($con,$sql);
          
          if($result){
            while ($row=mysqli_fetch_assoc($result)) {
              $id=$row['id'];
              $name=$row['name'];
              $regNo=$row['regNo'];
              $department=$row['department'];
              $time=$row['time'];
              $date=$row['date'];
              $status=$row['status'];
              
              
              //<th scope="row">'.$id.'</th>
              echo ' <tr>
              
              <td>'.$name.'</td>
              <td>'.$regNo.'</td>
              <td>'.$department.'</td>
              <td>'.$time.'</td>
              <td>'.$date.'</td>
              <td>'.$status.'</td>
              <td>
                  <a href="shift.php?shiftid='.$id.'&table=appointment" ><button class="btn-update">Shift</button></a>
                  <a href="approve.php?approveid='.$id.'&table=appointment" ><button class="btn-update">APPROVE</button></a>
              </td>
            </tr>' ;   
            }
          }
        ?>
        </tbody>
        </table>
      </div>


      <div class="main-text">
      <div class="error"><b><?php echo $output  ?></b></div>
        <h2 class="hero-main">Approved appointments</h2>
      </div>
      <div class="table-container">
      <table class="table" border="1px">
      <thead class="">
        <tr>
          <!-- <th scope="col">#</th> -->
          <th scope="col">NAME</th>
          <th scope="col">REGISTATION NO</th>
          <th scope="col">DEPARTMENT</th>
          <th scope="col">DATE</th>
          <th scope="col">TIME</th>
          <th scope="col">RESERVATION-STATUS</th>
          <th scope="col">OPERATIONS</th>
        </tr>
      </thead>
      <tbody>



      <?php 
          $sql= "SELECT * from `appointment` WHERE status = 'shifted' ORDER BY `appointment`.`date` ASC";
          $result = mysqli_query($con,$sql);
          
          if($result){
            while ($row=mysqli_fetch_assoc($result)) {
              $id=$row['id'];
              $name=$row['name'];
              $regNo=$row['regNo'];
              $department=$row['department'];
              $time=$row['time'];
              $date=$row['date'];
              $status=$row['status'];
              
              
              //<th scope="row">'.$id.'</th>
              echo ' <tr>
              
              <td>'.$name.'</td>
              <td>'.$regNo.'</td>
              <td>'.$department.'</td>
              <td>'.$time.'</td>
              <td>'.$date.'</td>
              <td>'.$status.'</td>
              <td>
              <a href="shift.php?shiftid='.$id.'&table=appointment" ><button class="btn-update">Shift</button></a>
              <a href="delete.php?deleteid='.$id.'&table=appointment" ><button class="btn-delete">DELETE</button></a>
              </td>
            </tr>' ;   
            }
          }
        ?>
        <!-- php code to read from database and display-->
        <?php 
          $sql= "SELECT * from `appointment` WHERE status = 'Approved' ORDER BY `appointment`.`date` ASC";
          $result = mysqli_query($con,$sql);
          
          if($result){
            while ($row=mysqli_fetch_assoc($result)) {
              $id=$row['id'];
              $name=$row['name'];
              $regNo=$row['regNo'];
              $department=$row['department'];
              $time=$row['time'];
              $date=$row['date'];
              $status=$row['status'];
              
              
              //<th scope="row">'.$id.'</th>
              echo ' <tr>
              
              <td>'.$name.'</td>
              <td>'.$regNo.'</td>
              <td>'.$department.'</td>
              <td>'.$time.'</td>
              <td>'.$date.'</td>
              <td>'.$status.'</td>
              <td>
              <a href="shift.php?shiftid='.$id.'&table=appointment" ><button class="btn-update">Shift</button></a>
              <a href="delete.php?deleteid='.$id.'&table=appointment" ><button class="btn-delete">DELETE</button></a>
              </td>
            </tr>' ;   
            }
          }
        ?>
        </tbody>
        </table>
      </div>
    </main>
    
    <?php include 'scripts.php'; ?>
  </body>
</html>
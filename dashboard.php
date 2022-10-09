<?php
    include 'connection.php';
    session_start();

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
    <title>DASHBOARD</title>
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <main>
      <a href="booking.php"><button>Manage Appointments</button></a>
      
   
      <div class="main-text">
      <div style="color: red;, font-size: 2rem;"><b><?php echo $output  ?></b></div>
        <h2 class="hero-main">Pending Registrations</h2>
      </div>
      <div class="table-container">
      <table class="table" border="1px">
      <thead class="">
        <tr>
          <!-- <th scope="col">#</th> -->
          <th scope="col">NAME</th>
          <th scope="col">MATRIC NO</th>
          <th scope="col">DOB</th>
          <th scope="col">PARENT NAME</th>
          <th scope="col">PARENT ROLE</th>
          <th scope="col">PARENT NUMBER</th>
          <th scope="col">GENOTYPE</th>
          <th scope="col">BLOOD GROUP</th>
          <th scope="col">REGISTATION-STATUS</th>
          <th scope="col">OPERATIONS</th>
        </tr>
      </thead>
      <tbody>




        <!-- php code to read from database and display-->
        <?php 
          $sql= "SELECT * from `student` ORDER BY `student`.`date` ASC";
          $result = mysqli_query($con,$sql);
          
          if($result){
            while ($row=mysqli_fetch_assoc($result)) {
              $id=$row['id'];
              $name=$row['name'];
              $matric=$row['matric'];
              $dob=$row['dob'];
              $parent=$row['parent'];
              $role=$row['role'];
              $phone=$row['phone'];
              $genotype=$row['genotype'];
              $bloodgroup=$row['bloodgroup'];
              $status=$row['status'];
              
              
              //<th scope="row">'.$id.'</th>
              echo ' <tr>
              
              <td>'.$name.'</td>
              <td>'.$matric.'</td>
              <td>'.$dob.'</td>
              <td>'.$parent.'</td>
              <td>'.$role.'</td>
              <td>'.$phone.'</td>
              <td>'.$genotype.'</td>
              <td>'.$bloodgroup.'</td>
              <td>'.$status.'</td>
              <td>
              <a href="done.php?doneid='.$id.'&table=student" ><button>DONE</button></a>
              </td>
            </tr>' ;   
            }
          }
        ?>
        </table>
      </div>


      <div class="main-text">
      <div style="color: red;, font-size: 2rem;"><b><?php echo $output  ?></b></div>
        <h2 class="hero-main">Registered Students</h2>
      </div>
      <div class="table-container">
      <table class="table" border="1px">
      <thead class="">
        <tr>
          <!-- <th scope="col">#</th> -->
          <th scope="col">NAME</th>
          <th scope="col">MATRIC NO</th>
          <th scope="col">DOB</th>
          <th scope="col">PARENT NAME</th>
          <th scope="col">PARENT ROLE</th>
          <th scope="col">PARENT NUMBER</th>
          <th scope="col">GENOTYPE</th>
          <th scope="col">BLOOD GROUP</th>
          <th scope="col">REGISTATION-STATUS</th>
          <th scope="col">OPERATIONS</th>
        </tr>
      </thead>
      <tbody>




        <!-- php code to read from database and display-->
        <?php 
          $sql= "SELECT * from `student` WHERE status = 'Registered' ORDER BY `student`.`date` ASC";
          $result = mysqli_query($con,$sql);
          
          if($result){
            while ($row=mysqli_fetch_assoc($result)) {
              $id=$row['id'];
              $name=$row['name'];
              $matric=$row['matric'];
              $dob=$row['dob'];
              $parent=$row['parent'];
              $role=$row['role'];
              $phone=$row['phone'];
              $genotype=$row['genotype'];
              $bloodgroup=$row['bloodgroup'];
              $status=$row['status'];
              
              
              //<th scope="row">'.$id.'</th>
              echo ' <tr>
              
              <td>'.$name.'</td>
              <td>'.$matric.'</td>
              <td>'.$dob.'</td>
              <td>'.$parent.'</td>
              <td>'.$role.'</td>
              <td>'.$phone.'</td>
              <td>'.$genotype.'</td>
              <td>'.$bloodgroup.'</td>
              <td>'.$status.'</td>
              <td>
              <a href="done.php?doneid='.$id.'&table=student" ><button>DONE</button></a>
              </td>
            </tr>' ;   
            }
          }
        ?>
        </table>
      </div>
    </main>
    
    <?php include 'scripts.php'; ?>
  </body>
</html>
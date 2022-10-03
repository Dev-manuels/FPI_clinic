<?php
    session_start();
    include 'connection.php';

    if ($_SESSION['valid'] != true) {
        $_SESSION['message'] = "Please login";
        header("Location:login.php");
    }else{
        $_SESSION['message'] = "";
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php';?>
    <title>Dashboard</title>
</head>
<body>
    <nav class="nav-bar login-bar">
        <div class="logo-container">
          <a href="https://federalpolyilaro.edu.ng"><img class="logo" src="https://federalpolyilaro.edu.ng/images/header-logo.png" alt="FPI logo" height="70px" width="180px"></a>
        </div>
        <ul class="main-nav login-links">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="#"></a>
                <form method="post">
                    <input class="btn-logout" type="submit" value="LOGOUT">
                </form>
            </li>
        </ul> 
    </nav>

    <main>
    <div class="table-container">
    <table class="" border="1px">
    <thead class="t">
      <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">MATRIC NO</th>
        <th scope="col">SURNAME</th>
        <th scope="col">OTHER NAMES</th>
        <th scope="col">PHONE NO</th>
        <th scope="col">MAC ADDRESS</th>
        <th scope="col">REGISTATION-STATUS</th>
        <th scope="col">ENTRY-DATE</th>
        <th scope="col">OPERATIONS</th>
      </tr>
    </thead>
    <tbody>




      <!-- php code to read from database and display-->
      <?php 
        $sql= "SELECT * from `studentRecord`";
        $result = mysqli_query($con,$sql);
        
        if($result){
          while ($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $matric=$row['matric'];
            $surname=$row['surname'];
            $other=$row['other'];
            $phone=$row['phone'];
            $mac=$row['mac'];
            $status=$row['status'];
            $date=$row['date'];
            
            //<th scope="row">'.$id.'</th>
            echo ' <tr>
            
            <td><b>'.$matric.'</b></td>
            <td><b>'.$surname.'</b></td>
            <td><b>'.$other.'</b></td>
            <td><b>'.$phone.'</b></td>
            <td><b>'.$mac.'</b></td>
            <td><b>'.$status.'</b></td>
            <td><b>'.$date.'</b></td>
            <td>
            <a href="update.php?updateid='.$id.'"" ><button>UPDATE</button></a>
            <a href="delete.php?deleteid='.$id.'" ><button>DELETE</button></a>
            <a href="done.php?doneid='.$id.'" ><button>DONE</button></a>
            </td>
          </tr>' ;   
          }
        }
      ?>
    </div>
    </main>
    
</body>
</html>
<?php
  include 'connection.php';

  $output="";

  if(isset($_POST['register'])){
    $name=$_POST['name'];
    $matric=$_POST['matric'];
    $dob=$_POST['dob'];
    $parent=$_POST['parent'];
    $role=$_POST['role'];
    $phone=$_POST['phone'];
    $genotype=$_POST['genotype'];
    $bloodgroup=$_POST['bloodgroup'];
    $status="Pending";

    
    $query = " SELECT * FROM student WHERE matric = '$matric'";
    $res = mysqli_query($con,$query);



    if(empty($matric)){
      $output .= "Matric number can not empty";
    } else if(empty($name)){
      $output .= "Name can not empty";
    } else if(empty($dob)){
      $output .= "Please select Date of Birth";
    } else if(empty($parent)){
      $output .= "Parent name can not empty";
    }  else if(empty($role)){
      $output .= "Please select Parent role";
    } else if(empty($phone)){
        $output .= "Parent number can not empty";
    } else if(empty($genotype)){
        $output .= "Please select Genotype";
    } else if(empty($bloodgroup)){
        $output .= "Please select Blood group";
    } else if(mysqli_num_rows($res) == 1){
        $output .= "Matric number has already been registred, Visit the clinic to update your details";
    }
     else {
    $sql="insert into `student` (name,matric,dob,parent,role,phone,genotype,bloodgroup,status) 
    values('$name','$matric','$dob','$parent','$role','$phone','$genotype','$bloodgroup','$status')";
      $result=mysqli_query($con,$sql);

      if ($result) {
        header('location:success.php');
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
    <title>Register</title>
</head>
<body>
<?php include 'nav.php';?>
    <main class="main register-main">
        <form method="post" class="form-container">
            <div class="login-main-text">
                <h2 class="hero-text-main">The Medical Centre</h2>
                <h2 class="hero-text">Student Registration</h2>
            </div>
            <div class="form-input-container">
            <div class="error"><b><?php echo $output  ?></b></div>
                <div class="form-input">
                    <label for="name">Full Name</label>
                    <input class="large" type="text" name="name" placeholder="Enter your Full name" minlength="10" required>
                </div>
                <div class="form-row">
                    <div class="form-input">
                        <label for="matric">Matric No:</label>
                        <input type="text" name="matric" placeholder="Enter your Matric number" minlength="8" required>
                    </div>
                    <div class="form-input">
                        <label for="DOB">Date of Birth</label>
                        <input type="date" name="dob" required>
                    </div>
               </div>
                
                <div class="form-input">
                    <label for="parent name">Parent name:</label>
                    <input class="large" type="text" name="parent" placeholder="Enter your parent's fullname" minlength="10" required>
                </div>

                <div class="form-row">
                    <div class="form-input">
                        <label for="Parent">Select Parent Role</label>
                        <select name="role" required>
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                        </select>
                    </div>
                    <div class="form-input">
                        <label for="parent number">Parent number:</label>
                        <input type="tel" name="phone" placeholder="Parent's number" minlength="11" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-input">
                        <label for="Genotype">Genotype</label>
                        <select name="genotype" required>
                            <option value="AA">AA</option>
                            <option value="AC">AC</option>
                            <option value="AS">AS</option>
                            <option value="SS">SS</option>
                            <option value="SC">SC</option>
                        </select>
                    </div>
                    <div class="form-input">
                        
                        <label for="Blood Group">Blood Group</label>
                        <select name="bloodgroup" required>
                            <option value="+A">+A</option>
                            <option value="-A">-A</option>
                            <option value="+AB">+AB</option>
                            <option value="-AB">-AB</option>
                            <option value="+B">+B</option>
                            <option value="-B">-B</option>
                            <option value="+O">+O</option>
                            <option value="-O">-O</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-submit">
                    <input type="submit" value="Register" name="register">
                </div>
            </div>
        </form>
        

    </main>
    
    
    <?php include 'scripts.php'; ?>
</body>
</html>
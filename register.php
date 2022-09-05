<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php';?>
    <title>Register</title>
</head>
<body>
    <nav class="nav-bar login-bar">
        <div class="logo-container">
          <a href="https://federalpolyilaro.edu.ng"><img class="logo" src="https://federalpolyilaro.edu.ng/images/header-logo.png" alt="FPI logo" height="70px" width="180px"></a>
        </div>
        <ul class="main-nav login-links">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="appointment.php">Appointment</a></li>
        </ul> 
    </nav>
    <main class="main register-main">
        <form method="post" class="form-container">
            <div class="login-main-text">
                <h2 class="hero-text-main">The Medical Centre</h2>
                <h2 class="hero-text">Student Registration</h2>
            </div>
            <div class="form-input-container">
                <div class="form-input">
                    <label for="name">Full Name</label>
                    <input class="large" type="text" name="name" placeholder="Enter your Full name">
                </div>
                <div class="form-row">
                    <div class="form-input">
                        <label for="matric">Matric No:</label>
                        <input type="text" name="matric" placeholder="Enter your Maric number">
                    </div>
                    <div class="form-input">
                        <label for="DOB">Date of Birth</label>
                        <input type="date" name="DOB">
                    </div>
               </div>
                
                <div class="form-input">
                    <label for="parent name">Parent name:</label>
                    <input class="large" type="text" name="p_name" placeholder="Enter your parent's name">
                </div>

                <div class="form-row">
                    <div class="form-input">
                        <label for="Parent">Select Parent Role</label>
                        <select name="parent">
                            <option value="Father">Father</option>
                            <option value="Mother">Mother</option>
                        </select>
                    </div>
                    <div class="form-input">
                        <label for="parent number">Parent number:</label>
                        <input type="tel" name="p_number" placeholder="Parent's number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-input">
                        <label for="Genotype">Genotype</label>
                        <select name="genotype">
                            <option value="AA">AA</option>
                            <option value="AC">AC</option>
                            <option value="AS">AS</option>
                            <option value="SS">SS</option>
                        </select>
                    </div>
                    <div class="form-input">
                        
                        <label for="Blood Group">Blood Group</label>
                        <select name="bloodG">
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
                    <input type="submit" value="Register">
                </div>
            </div>
        </form>
        

    </main>
    
    
    
</body>
</html>
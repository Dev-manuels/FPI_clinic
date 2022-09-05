<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php';?>
    <title>Appointments</title>
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
    <main class="main">
        <form method="post" class="form-container" >
            <div class="login-main-text">
                <h2 class="hero-text-main">The Medical Centre</h2>
                <h2 class="hero-text">Appointments</h2>
            </div>
            <div class="form-input-container">
                <div class="form-input">
                    <label for="name">Full Name</label>
                    <input class="large" type="text" name="name" placeholder="Enter your Full name">
                </div>
                <div class="form-input">
                        <label for="matric">Matric No:</label>
                        <input type="text" name="matric" placeholder="Enter your Maric number">
                </div>
               <div class="form-input">
                        <label for="parent number">Department:</label>
                        <input type="text" name="dept" placeholder="Enter your Department">
                </div>
                <div class="form-row">
                    <div class="form-input">
                        <label for="Time">Time:</label>
                        <input type="time" name="time">
                    </div>
                    <div class="form-input">
                        <label for="DOB">Date</label>
                        <input type="date" name="DOB">
                    </div>
               </div>
               
                <div class="form-submit">
                    <input type="submit" value="Book">
                </div>
            </div>
        </form>
        

    </main>
    
    
    
    
</body>
</html>
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
    <main class="login-main">
        <form method="post" class="form-container">
            <div class="login-main-text">
                <h2 class="hero-text-main">The Medical Centre</h2>
                <h2 class="hero-text">Registration Portal</h2>
            </div>
            <div class="form-input-container">
                <div class="form-input">
                    <label for="Email">Email:</label>
                    <input type="email" name="email" placeholder="Enter your Email">
                </div>
                <div class="form-input">
                    <label for="Password">Position:</label>
                    <input type="text" name="position" placeholder="Enter your position">
                </div>

                <input type="text" name="username" style="display: none;">
                <div class="form-input">
                    <label for="Password">Password:</label>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
                <div class="form-submit">
                    <input type="submit" value="Register">
                </div>
            </div>
        </form>
        

    </main>
    
    
    
</body>
</html>
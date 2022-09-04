<html lang="en">
<head>
    <?php include 'links.php';?>
    <title>Login</title>
</head>
<body>
    <nav class="nav-bar login-bar">
        <div class="logo-container">
          <a href="https://federalpolyilaro.edu.ng"><img class="logo" src="https://federalpolyilaro.edu.ng/images/header-logo.png" alt="FPI logo" height="70px" width="180px"></a>
        </div>
        <ul class="main-nav login-links">
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="appointment.php">Appointment</a></li>
        </ul> 
    </nav>

    <main class="login-main">
        <form method="post" class="form-container">
            <div class="login-main-text">
                <h2 class="hero-text-main">The Medical Centre</h2>
                <h2 class="hero-text">Portal Login</h2>
            </div>
            <div class="form-input-container">
                <div class="form-input">
                    <label for="Email">Email:</label>
                    <input type="email" name="email" placeholder="Enter your Email">
                </div>

                <input type="text" name="username" style="display: none;">
                <div class="form-input">
                    <label for="Password">Password:</label>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
                <div class="form-submit">
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>

    </main>
    
</body>
</html>
<?php
$date = new DateTime();
$now = date_format($date,"Y-m-d");
?>

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
                    <input class="large" type="text" name="name" placeholder="Enter your Full name" minlength="15" required>
                </div>
                <div class="form-input">
                        <label for="matric">Matric No:</label>
                        <input type="text" name="matric" placeholder="Enter your Matric number" minlength="8" required>
                </div>
               <div class="form-input">
                        <label for="parent number">Department:</label>
                        <select name="department">
                            <option value="ACCOUNTANCY">ACCOUNTANCY</option>
                            <option value="AGRICULTURAL AND BIO-ENVIRONMENTAL ENGINEERING TECHNOLOGY">
                                AGRICULTURAL AND BIO-ENVIRONMENTAL ENGINEERING TECHNOLOGY
                            </option>
                            <option value="AGRICULTURAL TECHNOLOGY">
                                AGRICULTURAL TECHNOLOGY
                            </option>
                            <option value="ARCHITECTURAL TECHNOLOGY">
                                ARCHITECTURAL TECHNOLOGY
                            </option>
                            <option value="ARTS AND DESIGN">
                                ARTS AND DESIGN
                            </option>
                            <option value="BANKING AND FINANCE">
                                BANKING AND FINANCE
                            </option>
                            <option value="BUILDING TECHNOLOGY">
                                BUILDING TECHNOLOGY
                            </option>
                            <option value="BUSINESS ADMINISTRATION & MANAGEMENT">
                                BUSINESS ADMINISTRATION & MANAGEMENT
                            </option>
                            <option value="CIVIL ENGINEERING TECHNOLOGY">
                                CIVIL ENGINEERING TECHNOLOGY
                            </option>
                            <option value="COMPUTER ENGINEERING">
                                COMPUTER ENGINEERING
                            </option>
                            <option value="COMPUTER SCIENCE">
                                COMPUTER SCIENCE
                            </option>
                            <option value="ELECTRICAL/ELECTRONIC ENGINEERING TECHNOLOGY">
                                ELECTRICAL/ELECTRONIC ENGINEERING TECHNOLOGY
                            </option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                </div>
                <div class="form-row">
                    <div class="form-input">
                        <label for="Time">Time (8:30am to 3pm):</label>
                        <input type="time" name="time" min="08:30" max="15:00" required>
                    </div>
                    <div class="form-input">
                        <label for="date">Date</label>
                        <?php $now = date("Y-m-d");
                            $date=date_create($now);
                            date_add($date,date_interval_create_from_date_string("1 day"));
                            $now = date_format($date,"Y-m-d");
                            echo '<input type="date" name="date" min="'.$now.'" required> '   
                        ?>
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
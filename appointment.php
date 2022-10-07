<!-- 
<?php
    include 'connection.php';
    session_start();
?>
-->

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
                            <option value="ESTATE MANAGEMENT AND VALUATION">
                                ESTATE MANAGEMENT AND VALUATION
                            </option>
                            <option value="FOOD TECHNOLOGY">
                                FOOD TECHNOLOGY
                            </option>
                            <option value="HOSPITALITY MANAGEMENT">
                                HOSPITALITY MANAGEMENT
                            </option>
                            <option value="INSURANCE">
                                INSURANCE
                            </option>
                            <option value="LEISURE AND TOURISM MANAGEMENT">
                                LEISURE AND TOURISM MANAGEMENT
                            </option>
                            <option value="LIBRARY AND INFORMATION SCIENCE">
                                LIBRARY AND INFORMATION SCIENCE
                            </option>
                            <option value="MARKETING">
                                MARKETING
                            </option>
                            <option value="MASS COMMUNICATION">
                                MASS COMMUNICATION
                            </option>
                            <option value="MECHANICAL ENGINEERING TECHNOLOGY">
                                MECHANICAL ENGINEERING TECHNOLOGY
                            </option>
                            <option value="MUSIC TECHNOLOGY">
                                MUSIC TECHNOLOGY
                            </option>
                            <option value="NUTRITION AND DIETETICS">
                                NUTRITION AND DIETETICS
                            </option>
                            <option value="OFFICE TECHNOLOGY AND MANAGEMENT">
                                OFFICE TECHNOLOGY AND MANAGEMENT
                            </option>
                            <option value="PUBLIC ADMINISTRATION">PUBLIC ADMINISTRATION</option>
                            <option value="QUANTITY SURVEYING">QUANTITY SURVEYING</option>
                            <option value="SCIENCE LABORATORY TECHNOLOGY">SCIENCE LABORATORY TECHNOLOGY</option>
                            <option value="STATISTICS">STATISTICS</option>
                            <option value="SURVEYING AND GEO-INFORMATICS">SURVEYING AND GEO-INFORMATICS</option>
                            <option value="TAXATION">TAXATION</option>
                            <option value="TRANSPORTATION PLANNING & MANAGEMENT">TRANSPORTATION PLANNING & MANAGEMENT</option>
                            <option value="URBAN AND REGIONAL PLANNING">URBAN AND REGIONAL PLANNING</option>
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
                    <input type="submit" value="Reserve" name="submit">
                </div>
            </div>
        </form>
        

    </main>
    
    
    
    <?php include 'scripts.php'; ?>
</body>
</html>
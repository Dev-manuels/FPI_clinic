<?php
    include 'connection.php';
    if(!$_SESSION) { 
      session_start();
      $_SESSION['valid'] = false;
    } 
     
   
?>

<!DOCTYPE html>
<html>
  <head>
    <title>FPI Medical Center</title>
    <?php include 'links.php';?>
  </head>
  <body>
  <?php include 'nav.php';?>

    <main>
    <header id="header">
      <div class="hero-content">
        <div class="hero-main">
          <div>
            <h2 class="hero-text">Welcome to</h2>
            <h2 class="hero-text-main">The Medical Centre,</h2>
            <h2 class="hero-text-main">Federal Polytechnic Ilaro.</h2>
          </div>
          <div class="hero-text-details">
            <p>A National Health Insurance Scheme approved primary  health provider with registration number <span>OG/104/P</span>. It is a 24 hours operating Medical Centre with highly qualified and dedicated staffs.</p>
            <a href="tel:+2348063727471"><i class="fa-solid fa-phone"> 08063727471</i></a>
          </div>
        </div>
      </div>
    </header>
    </main>
    <section class="departments">
      <h2 class="dept-header">Our Departments</h2>

      <div class="list">
      <ul class="depts-list">
        <li class="depts">Outpatient Care Unit</li>
        <li class="depts">Nursing Unit</li>
        <li class="depts">Pharmacy Unit</li>
      </ul>
      <ul class="depts-list">
        <li class="depts">Medical Laboratory Unit</li>
        <li class="depts">Medical Records Unit</li>
        <li class="depts">Inpatient Care Unit</li>
      </ul>
      <ul class="depts-list">
        <li class="depts">NHIS / TISHIP Unit</li>
        <li class="depts">Family Planning Unit</li>
        <li class="depts">Ambulance Services</li>
      </ul>
      </div>

    </section>
    <footer>
      <div class="footer-main">
        <div class="footer-main-text">
          <h2>OUR VISION</h2>
          <p>To be the best primary health care provider to all our patients and clients.</p>
        </div>
        <div class="footer-main-text">
          <h2>OUR MISSION</h2>
          <p>To provide first class health care services to all staffs, students and other NHIS enrollees.</p>
        </div>
        <div class="footer-main-text">
        <h2>OUR OBJECTIVE</h2>
          <p>To give our patients and clients the best comfort and service whether as outpatient or inpatient.</p>
        </div>
      </div>
      <div class="footer-final">
        <a href="#header"> Back to Top</a>
      </div>
      
      
    </footer>



    <?php include 'scripts.php';?>
  </body>
</html>

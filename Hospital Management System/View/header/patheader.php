
<?php
      session_start();
	 include('../Controller/userval.php');
if (!isLoggedIn()) {

  header('location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patient Panel</title>
    <link rel="stylesheet" href="PatientPanel.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
 
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Patient ~ <?php echo $_SESSION["loggedinuser"];?></header>
  <ul>
  <li><a href="PatientPanel.php"><i class="fas fa-tachometer-alt"></i>DASHBOARD</a></li>
    <li><a href="PatientProfile.php"><i class="fas fa-qrcode"></i>My Profile</a></li>
    <li><a href="PatientCurrentStatus.php"><i class="fas fa-link"></i>Apointment Status</a></li>
    <li><a href="PatientTest.php"><i class="fas fa-stream"></i>Tests</a></li>
	<li><a href="Request.php"><i class="fas fa-stream"></i>Request</a></li>
    <li><a href="DoctorMedicine.php"><i class="fas fa-calendar-week"></i>Doctor and Medicine</a></li>
    <li><a href="MakeAppoinment.php"><i class="far fa-question-circle"></i>Make an Appoinment</a></li>
    <li><a href="ViewAppoinment.php"><i class="fas fa-sliders-h"></i>View All Appoinment</a></li>
    
	<li><a href="../Controller/logout.php"><i class="far fa-envelope"></i>Logout</a></li>
</ul>
</div>
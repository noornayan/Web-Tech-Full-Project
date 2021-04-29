
<?php
      session_start();
	  include('../Controller/userval.php');
if (!isLoggedIn()) {

  header('location: ../index.php');
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Receptionist</title>
    <link rel="stylesheet" type="text/css" href="Receptionist.css" />
    <link
      href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic"
	  href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans"
      rel="stylesheet"
	 
    />
	 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bgimage">
      <div class="menu">
        <div class="leftmenu">
          <h3><a href="Receptionist.php">Receptionist~<?php echo $_SESSION["loggedinuser"];?></a></h3>
        </div>
        <div class="rightmenu">
          <ul>
            <li><a href="ReceptionistProfile.php">My Profile</a></li>
            
            <li><a href="PatientRequest.php">Patient Request</a></li>
            <li><a href="RoomAvailable.php">Room Available</a></li>
            <li><a href="AllDocTime.php">Doctor & Time</a></li>
            <li><a href="SignupDoc.php">Sign-Up Doctor</a></li>
			<li><a href="../Controller/logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
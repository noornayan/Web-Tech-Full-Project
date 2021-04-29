<?php

  require_once '../Models/db_connect2.php';

$query ="Delete from appointmentlist where sl='$_GET[id]'";
  execute($query);
	header("Location:../View/PatientCurrentStatus.php");




  ?>

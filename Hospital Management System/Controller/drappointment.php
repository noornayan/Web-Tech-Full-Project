<?php
$var;
  require_once '../Models/db_connect2.php';

if(isset($_POST["appointment"]))
  {
    appoint();
  }
  
  
  function appoint()
{ session_start();

  if(!empty('$_SESSION["loggedinuser"]')){
    $var=$_SESSION["loggedinuser"];

  }

  $drname=$_POST["drname"];
  


  $query="INSERT INTO appointmentlist(username,drname,status) VALUES ('$var','$drname','Active')";

execute($query);
//echo $query;
header("Location:../View/MakeAppoinment.php");


}

function getdetailsapointment()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM appointmentlist WHERE username='$var' AND status='Active'";
    $product=get($query);
    return $product;


  }


  ?>
<?php
$var;
  require_once '../Models/db_connect2.php';


function patienttest()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM patienttest WHERE username='$var'";
    $product=get($query);
    return $product;


  }


  ?>
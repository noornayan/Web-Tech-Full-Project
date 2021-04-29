<?php
$var;
  require_once '../Models/db_connect2.php';


  



  function getmedicine()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM medinfo WHERE patientid='$var'";
    $product=get($query);
    return $product;


  }







  ?>
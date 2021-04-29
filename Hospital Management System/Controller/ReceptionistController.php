<?php
$var;
  require_once '../Models/db_connect2.php';

 if(isset($_POST["Updateprofile"]))
  {
    Profileupdate();
  }
  



  function getdetails()
  {
   

    if(!empty('$_SESSION["loggedinuser"]')){
      $var=$_SESSION["loggedinuser"];

    }

    $query="SELECT * FROM login WHERE username='$var'";
    $product=get($query);
    return $product[0];


  }


function Profileupdate()
  {

      session_start();

      if(!empty('$_SESSION["loggedinuser"]')){
        $var=$_SESSION["loggedinuser"];

      }



            $name=$_POST["name"];
            $phone=$_POST["phone"];
            $address=$_POST["address"];

            $npassword=$_POST["npass"];
           
    $query="UPDATE login SET name='$name',phone='$phone',address='$address',password='$npassword' WHERE username='$var'";
    execute($query);

    echo '<script language="javascript">';
    echo 'alert("your profile updated!!!!")';
    echo '</script>';

    header("Location:../View/Receptionist.php");
}


 function getpatientreq()
  {
   

   

    $query="SELECT * FROM patientreq";
    $product=get($query);
    return $product;


  }


 function getfreeroom()
  {
   

   

    $query="SELECT * FROM room where status='Free'";
    $product=get($query);
    return $product;


  }




  ?>
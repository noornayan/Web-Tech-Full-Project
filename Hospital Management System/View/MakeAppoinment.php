<?php
include('header/patheader.php');
//require "../Models/db_connect.php";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "patient";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);





    $query = "SELECT * from drinfo where appointment='Active'";
    $result1 = mysqli_query($conn, $query);
	$result2 = mysqli_query($conn, $query);
	 $options="";
  while ($row2=mysqli_fetch_array($result2))
  {
   $options=$options."<option>$row2[2]</option>";
	
    
   
  


  }






?>



<style>
body {
  margin: 0;
  padding: 0;
  background-color: #004882;
}

.box {
  position: absolute;
  top: 29%;
    left: 53%;
  transform: translate(-50%, -50%);
}

.box select {
  background-color: #0563af;
  color: white;
  padding: 12px;
  width: 339px;
  border: none;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;
  appearance: button;
  outline: none;
}

.box::before {
  
  font-family: FontAwesome;
  position: absolute;
  top: 0;
  right: 0;
  width: 20%;
  height: 100%;
  text-align: center;
  font-size: 28px;
  line-height: 45px;
  color: rgba(255, 255, 255, 0.5);
  background-color: rgba(255, 255, 255, 0.1);
  pointer-events: none;
}

.box:hover::before {
  color: rgba(255, 255, 255, 0.6);
  background-color: rgba(255, 255, 255, 0.2);
}

.box select option {
  padding: 30px;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white;
    color: black;
    /* padding-left: 10px; */
    margin-left: 108px;
    margin-top: 17px;
    /* padding: 12px; */
    border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}


</style>

<section>
<form id="myform" method="post" onsubmit="return alart();"action="../Controller/drappointment.php" >
<div class="box">
<center><h2 style="color:red">Dr Serial</h2></center>
  <select name="drname">
  <?php while($row1=mysqli_fetch_array($result1));?>
    <?php echo $options;?>
  
  
  </select><br>
  
 <button class="button button1" type="submit"name="appointment">Appoint</button>
</div>
 
</section>
  </body>
</html>
<script>
function alart(){
	
	 alert("Appointment Done check your serial in status!");
  return true;
	
	
}

</script>
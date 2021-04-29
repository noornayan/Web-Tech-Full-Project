
<?php
include('header/Resheader.php');
include ('../Models/db_connect.php');
$roomnoget="$_GET[id]";

 $flag=0;
  $name=$fullname=$phone=$space=$pass=$sql=$age=$roomno=$problem=$gender=$address=$error="";
  if(isset($_POST['patientsignup'])){
    if(!empty($_POST['ouname'])){
      $name = mysqli_real_escape_string($con, $_POST['ouname']);
    }
    else{

      $error="user name can not be empty";
      $flag=1;
    
    }


    if(!empty($_POST['pname'])){
      $fullname = mysqli_real_escape_string($con, $_POST['pname']);

    }
    else{

      $error="user full name can not be empty";
      $flag=1;
    
    }
    if(!empty($_POST['ophone'])){
      $phone = mysqli_real_escape_string($con, $_POST['ophone']);

    }
    else{

      $error="user phone number can not be empty";
      $flag=1;
    
    }
    if(!empty($_POST['gender'])){
      $gender = mysqli_real_escape_string($con, $_POST['gender']);

    }
    else{

      $error="Gender can not be empty";
      $flag=1;

    }
	
	 if(!empty($_POST['age'])){
      $age = mysqli_real_escape_string($con, $_POST['age']);

    }
    else{

      $error="Age can not be empty";
      $flag=1;

    }


    if(!empty($_POST['oaddress'])){
      $address = mysqli_real_escape_string($con, $_POST['oaddress']);

    }
    else{

      $error="user address can not be empty";
      $flag=1;
    
    }

    if(!empty($_POST['ocpass'])){
      $pass = mysqli_real_escape_string($con, $_POST['ocpass']);

    }
    else{

      $error="user password can not be empty";
      $flag=1;
    
    }
	 if(!empty($_POST['problem'])){
      $problem = mysqli_real_escape_string($con, $_POST['problem']);

    }
    else{

      $error="user problem can not be empty";
      $flag=1;
    
    }
	 if(!empty($_POST['roomno'])){
      $roomno = mysqli_real_escape_string($con, $_POST['roomno']);

    }
    else{

      $error="roomno can not be empty";
      $flag=1;
    
    }
    if(!empty($_POST['ouname'])&&!empty($_POST['pname'])&&!empty($_POST['ophone'])&&!empty($_POST['gender'])&&!empty($_POST['oaddress'])&&!empty($_POST['ocpass'])&&!empty($_POST['problem'])&&!empty($_POST['roomno']))
    {
    $sql = "INSERT INTO patient (username,fullname,phone,age,password,gender,problem,address,roomno)
              VALUES ('$name','$fullname','$phone','$age','$pass','$gender','$problem','$address','$roomno');";

      mysqli_query($con, $sql);

    //  header("Location:../login.html");



  echo '<script>alert("Your account created")</script>';

    }

  }

?>

<style>

.box {
  width: 328px;
    padding: 19px;
    position: absolute;
    top: 57%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;
}
.box h1 {
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type="text"],
.box input[type="password"] {
  border: 0;
  background: none;
  display: block;
  margin: 3px  auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type="text"]:focus,
.box input[type="password"]:focus {
  width: 280px;
  border-color: yellowgreen;
}
.box input[type="submit"] {
  border: 0;
  background: none;
  display: block;
  margin: 3px  auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type="submit"]:hover {
  background: #ff4500;
}

#Error_Message{
    margin-bottom: 20px;
    background: #fe8b8e;
    padding: 0px;
    text-align: center;
    font-size: 14px;
    transition: all 0.5s ease;
  }

</style>
<form class="box" action="" method="post">
   
    <div id="Error_Message"><?php echo $error ?>
    </div>
      <h1>Patient Registration</h1>
      <input type="text" name="ouname" placeholder="User Name" />
      <input type="text" name="pname" placeholder="Full Name" />
	   <input type="text" name="gender" placeholder="Gender"/>
      <input type="text" name="ophone" placeholder="Phone Number">
      <input type="text" name="age" placeholder="Age" />
      <input type="text" name="oaddress" placeholder="Address" />
      <input type="password" name="ocpass" placeholder="Password" />
	  <input type="text" name="problem" placeholder="problem" />
	   <input readonly type="text" name="roomno" placeholder="Roomno" value="<?php echo $roomnoget;?>"/>
      <input type="submit" name="patientsignup" value="Sign-Up" />
    </form>
	
  </body>
</html>
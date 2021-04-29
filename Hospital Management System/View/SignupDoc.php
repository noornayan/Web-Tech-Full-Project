
<?php
include('header/Resheader.php');

?>

<style>

.box {
  width: 328px;
    padding: 19px;
    position: absolute;
    top: 56%;
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
  margin: 05px auto;
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
  margin: 5px auto;
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

#error_message{
  margin-bottom: 20px;
  background: #fe8b8e;
  padding: 0px;
  text-align: center;
  font-size: 14px;
  transition: all 0.5s ease;
}

</style>
<form class="box" action="../Controller/adddr.php"onsubmit="return validation()" method="post">

      <div id="error_message"></div>
      <h1>Doctor Registration</h1>
      <input type="text"id="uname" name="ouname" placeholder="User Name" />
      <input type="text"id="user" name="pname" placeholder="Full Name" />
      <input type="text"id="mobileNumber" name="ophone" placeholder="Phone Number">
      <input type="text"id="nid" name="pnid" placeholder="Nid No" />
      <input type="text"id="emails" name="oaddress" placeholder="Address" />
      <input type="password" id="pass" name="ocpass" placeholder="Password" />
	  <input type="text"id="spe" name="dspecial" placeholder="speciality" />
	   <input type="text" id="rono"name="roono" placeholder="Roomno" />
      <input type="submit" name="drsignup" value="Sign-Up" />
    </form>


	</div>
  </body>
</html>
<script type="text/javascript">


		function validation(){

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;

			var mobileNumber = document.getElementById('mobileNumber').value;
			var emails = document.getElementById('emails').value;
      	var uid = document.getElementById('uname').value;
        	var speciality = document.getElementById('spe').value;
          	var Roomno = document.getElementById('rono').value;
            	var nid = document.getElementById('nid').value;



              error_message.style.padding = "10px";



			if(user == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the name field";
				return false;
			}
			if((user.length <= 2) || (user.length > 25)) {
				document.getElementById('error_message').innerHTML =" ** name lenght must be between 2 and 25";
				return false;
			}
			if(!isNaN(user)){
				document.getElementById('error_message').innerHTML =" ** only characters are allowed";
				return false;
			}







			if(pass == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('error_message').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;
			}







			if(mobileNumber == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('error_message').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=11){
				document.getElementById('error_message').innerHTML =" ** Mobile Number must be 11 digits only";
				return false;
			}



			if(speciality == ""){
				document.getElementById('error_message').innerHTML =" ** Please fill the specialty field";
				return false;
			}

			if((speciality.length <= 2) || (speciality.length > 20)) {
				document.getElementById('error_message').innerHTML =" ** Specialty lenght must be between 2 and 20";
				return false;
			}
      if(!isNaN(speciality)){
        document.getElementById('error_message').innerHTML =" ** only characters are allowed";
        return false;
      }



      if(uid == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the username field";
        return false;
      }

      if((uid.length <= 2) || (uid.length > 10)) {
        document.getElementById('error_message').innerHTML =" ** username lenght must be between 2 and 10";
        return false;
      }




      if(emails == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the Address field";
        return false;
      }

      if((emails.length <= 2) || (emails.length > 30)) {
        document.getElementById('error_message').innerHTML =" ** Address lenght must be between 2 and 30";
        return false;
      }




      if(Roomno == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the Room no field";
        return false;
      }

      if((Roomno.length <= 2) || (Roomno.length > 10)) {
        document.getElementById('error_message').innerHTML =" ** Room no lenght must be between 2 and 10";
        return false;
      }




      if(nid == ""){
        document.getElementById('error_message').innerHTML =" ** Please fill the nid NUmber field";
        return false;
      }
      if(isNaN(nid)){
        document.getElementById('error_message').innerHTML =" ** user must write digits only not characters";
        return false;
      }
      if(nid.length!=13){
        document.getElementById('error_message').innerHTML =" ** nid  Number must be 13 digits only";
        return false;
      }
      alert("Dr Account Create Successfully!");
      return true;
		}

	</script>

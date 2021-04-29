<?php
include('header/patheader.php');
require_once ('../Controller/patientinfo.php');
$data=patientdetails();
?>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    font-family: 'Josefin Sans', sans-serif;
  	    font-weight: bold;
		   
  }

  body{

  }

  .wrapper{
    position: absolute;
    top: 54%;
    left: 50%;
    transform: translate(-50%,-50%);
    max-width: 350px;
    width: 100%;
        background: #f4fdf5;
    padding: 25px;
    border-radius: 5px;
    box-shadow: 4px 4px 2px rgba(254,236,164,1);
  }

  .wrapper h2{
    text-align: center;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: #332902;
  }

  .wrapper .input_field{
    margin-bottom: 10px;
  }

  .wrapper .input_field input[type="text"],
  .wrapper textarea{
    border: 1px solid #e0e0e0;
    width: 100%;
    padding: 10px;
  }

  .wrapper textarea{
    resize: none;
    height: 80px;
  }

  .wrapper .btn input[type="submit"]{
    border: 0px;
    margin-top: 15px;
    padding: 10px;
    text-align: center;
    width: 100%;
    background: #fece0c;
    color: #332902;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-weight: bold;
    border-radius: 25px;
    cursor: pointer;
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
<div class="main-section">
        <div class="dashbord">
          <div class="icon-section">

            <div class="wrapper">
              <h2>Contact Receptionist</h2>
              <div id="error_message"></div>
              <form id="myform" onsubmit="return validate();" method="post" action="../Controller/requestcon.php" >
                <div class="input_field">
            			<label for="Name">From:</label >
                    <input type="text" placeholder="" value="<?php echo $_SESSION["loggedinuser"];?>" id="huh" readonly >
                </div>
                <div class="input_field">
            			<label for="subject">Room no:</label>
                    <input type="text" placeholder="" name="rno" id="room"value="<?php echo $data["roomno"]?>"readonly><br><br>
                </div>
               
<div class="input_field">

                    <textarea placeholder="Message" name="msg" id="message"></textarea>
                </div>
                <div class="btn">
                    <input type="submit" name="insertreq" value="Send">
                </div>



			   </div>
            		

                
              </form>
            </div>




          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<script>

function validate(){

  var room = document.getElementById("room").value;
  var message = document.getElementById("message").value;

  var error_message = document.getElementById("error_message");

  error_message.style.padding = "10px";

  var text;

  

  if(message.length <= 3){
    text = "Please Write your problem in details";
    error_message.innerHTML = text;
    return false;
  }
  alert("Request Sent Successfully!");
  return true;
}
</script>
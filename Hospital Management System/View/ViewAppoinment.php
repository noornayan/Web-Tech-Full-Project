<?php
include('header/patheader.php');
require_once ('../Controller/allapointment.php');
$info=getallapointment();
?>



<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Appointment details</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="search">
      <table class="table table-hover">
      <thead>
        <tr>
          <th>Sl.</th>
                  <th>UserName</th>
                <th>Dr Name</th>
               
                <th>Appointment time</th>
        </tr>
      </thead>
      <tbody id="output">
         <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                       echo "<td>".$infos["sl"]."</td>";
                        echo "<td>".$infos["username"]."</td>";
                      echo "<td>".$infos["drname"]."</td>";
					   echo "<td>".$infos["datetime"]."</td>";
					  
					 
            

           
                    echo "</tr>";
                  }
                ?>
      </tbody>
    </table>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $("#search").keypress(function(){
      $.ajax({
        type:'POST',
        url:'../Controller/search.php',
        data:{
          name:$("#search").val(),
        },
        success:function(data){
          $("#output").html(data);
        }
      });
    });
  });
</script>

</body>
</html>

<?php
include('header/patheader.php');
require_once ('../Controller/drappointment.php');
$info=getdetailsapointment();
?>
<style>
  table {
   padding-top: 115px;
  margin-left: 542px;
  color: white;
  border: transparent;
  }

  th, td {
    text-align: left;
    padding: 8px;
    background: black;
}
  }

  tr:nth-child(even){background-color: #f2f2f2}

  th {
    background-color: #4CAF50;
    color: white;
  }

  table tr:not(:first-child){
                 cursor: pointer;transition: all .25s ease-in-out;
             }
             table tr:not(:first-child):hover{background-color: #ddd;}

             .btn {
   background-color: red;
    border: none;
    color: white;
    padding: 4px 16px;
    font-size: 26px;
    cursor: pointer;
    border-radius: 16px;
   }


   .btn:hover {
     background-color: RoyalBlue;
   }

   a:link{


     color: white;
     text-decoration: none;

   }
   a:visited{

  color: white;

   }

  </style>
    <section>
	<form id="myform" method="post" action="" >
      <div class="main-section">
        <div class="dashbord">
          <div class="icon-section">





            <table id="table" border="1">
              <thead>
               
                  <th>UserName</th>
                <th>Dr Name</th>
               
                <th>Appointment time</th>
                
				
  <th>Sl.</th>
   <th>Delete apointment</th>

              </thead>


              <tbody>
                <?php
                  foreach($info as $infos)
                  {
                    echo "<tr>";
                     
                        echo "<td>".$infos["username"]."</td>";
                      echo "<td>".$infos["drname"]."</td>";
					   echo "<td>".$infos["datetime"]."</td>";
					  
					   echo "<td>".$infos["sl"]."</td>";
            

            echo '<td><button class="btn"><a href="../Controller/Deleteoapointment.php?id='.$infos["sl"].'" i class="fa fa-trash">  delete</a></td>';
                    echo "</tr>";
                  }
                ?>

              </tbody>








            </table>
          </div>
        </div>
      </div>
	  </form>
</section>
  </body>
</html>
<script>
function alart(){
	
	 alert("Appointment Deleated");
  return true;
	
	
}

</script>
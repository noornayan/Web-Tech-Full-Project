
<?php
include('header/Resheader.php');

require_once ('../Controller/ReceptionistController.php');

$info=getfreeroom();
?>


<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('https://www.w3schools.com/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;

}

#myTable {
  border-collapse: collapse;
    width: 50%;
    border: 1px solid #ddd;
    font-size: 18px;

    color: white;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: mediumseagreen;
}

.container {
  border-radius: 5px;

  padding: 84px;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-right: 47%;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.btn:hover {
     background-color: black;
   }

   a:link{


     color: #05b30a;
     text-decoration: none;

   }
   a:visited{

  color: white;

   }
</style>
 <form  method="post" action="" enctype="multipart/form-data">
           

          <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for room.." title="Type in a name"></center>

<center><table id="myTable">
  <tr class="header">

    <th style="color:black">Sl </th>
    <th style="color:black">Type</th>

    <th style="color:black">Location</th>
<th style="color:black">Catagory</th>
    <th style="color:black">Room No</th>
	 <th style="color:black">        </th>


  </tr>
  <tbody>
    <?php
      foreach($info as $info)
      {
        echo "<tr>";

        echo "<td>".$info["sl"]."</td>";
        echo "<td>".$info["type"]."</td>";
  echo "<td>".$info["location"]."</td>";

echo "<td>".$info["catagory"]."</td>";

            echo "<td>".$info["roomno"]."</td>";
echo '<td><button class="btn"><a href="AdmitPatient.php?id='.$info["roomno"].'" i class="fa fa-plus">  Add</a></td>';

        echo "</tr>";
      }
    ?>

  </tbody>

</table></center>



            </form>
	</div>
	<script>
 function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

        </script>

  </body>
</html>
<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "patient");
$sql = "SELECT * FROM appointmentlist WHERE drname LIKE '%".$_POST['name']."%'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		
                 echo "	<tr>
		          <td>".$row['sl']."</td>
		          <td>".$row['username']."</td>
		          <td>".$row['drname']."</td>
		          <td>".$row['datetime']."</td>
		        </tr>";
                  }
             
	}

else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>
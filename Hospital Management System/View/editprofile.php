<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/createStudent.php" method="POST" enctype="multipart/form-data">
  <label for="name"> Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="mobilenumber">Mobile Number:</label><br>
  <input type="mobilenumber" id="mobilenumber" name="mobilenumber"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createStudent" value="Create">
  <input type="reset">
</form>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

 <form action="controller/createTeacher.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="gender">Gender:</label><br>
  <input type="text" id="gender" name="gender"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="username">User Name:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="course">Course:</label><br>
  <input type="text" id="course" name="course"><br>
  <label for="section">Section:</label><br>
  <input type="text" id="section" name="section"><br>
  <label for="image">Image:</label><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createTeacher" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

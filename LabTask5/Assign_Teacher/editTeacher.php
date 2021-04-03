<?php 

require_once 'controller/teacherInfo.php';
$teach = fetchTeacher($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

 <form action="controller/updateTeacher.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $teach['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="gender">Gender:</label><br>
  <input value="<?php echo $teach['Gender'] ?>" type="text" id="gender" name="gender"><br>
   <label for="email">Email:</label><br>
  <input value="<?php echo $teach['Email'] ?>" type="text" id="email" name="email"><br>
  <label for="username">User Name:</label><br>
  <input value="<?php echo $teach['Username'] ?>" type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input value="<?php echo $teach['Password'] ?>" type="password" id="password" name="password"><br>
  <label for="course">Course:</label><br>
  <input value="<?php echo $teach['Course'] ?>" type="text" id="course" name="course"><br>
  <label for="section">Section:</label><br>
  <input value="<?php echo $teach['Section'] ?>" type="text" id="section" name="section"><br>
  <label for="image">Image:</label><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateTeacher" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>


<!DOCTYPE html>
<html>
<body>

<div class="menu">
<?php include 'menu.php';?>
<form action="upload.php" method="post" enctype="multipart/form-data">
 <h1> Profile Picture</h1>
 <br><br>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
<?php include 'account.php';?>  
 <?php include 'footer.php';?> 

</body>
</html>
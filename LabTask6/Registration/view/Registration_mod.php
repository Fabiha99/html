<div class="menu">
<?php include 'menu.php';?>
<!DOCTYPE html>  
 <html>  
 <head>  
 <style>
.error {color: #FF0000;}
</style>
</head>  
<body> 

<p><span class="error">* required field</span></p>
<form method="post" action="../controller/RegCheck.php">  
  Name: <input type="text" name="name">
  <br /> <br />
  E-mail: <input type="text" name="email">
  <br /> <br />
  UserName: <input type="text" name="uname">
  <br /> <br />
  Gender:
  <input type="radio" name="gender"  value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender"  value="other">Other
  <br><br> 
Password: <input type="text" name="pass">
 <br /> <br />
Confirm Password: <input type="text" name="cpass">
 <br /> <br />
  Date of Birth: <input type="text" size="1" placeholder="dd" name="birthDate"> /
  <input type="text" size="1" placeholder="mm" name="birthMonth"> /
  <input type="text" size="2" placeholder="yyyy" name="birthYear">
 <br /> <br />
  <input type="submit" name="submit" value="Submit"> 


</form> 
<?php include 'footer.php';?>     
</body>  
 </html>  
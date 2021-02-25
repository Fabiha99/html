<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<div class="menu">
<?php include 'menu.php';?>
</div>
<?php
$emailErr = "";
$email = "";
 if (empty($_POST["email"])) {
    $EmailErr = "Email is required";
  }
    else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}
  ?>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 Enter Email: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 <input type="submit" name="submit" value="Submit">  

</form>
<?php include 'footer.php';?>

</body>
</html>
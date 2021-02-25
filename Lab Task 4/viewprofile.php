<div class="menu">
<div class="menu">
<?php include 'menu.php';?>
<?php  
  
 $nameErr = $emailErr =$unameErr= $genderErr = $dobErr =$cpassErr = $passErr= ""; 
 $name = $email = $uname= $gender =$dob =$cpass = $pass="";
 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    } 
     if (str_word_count($name)<2) {
      $nameErr = "Should contain atleast 2 words";
    } 

  }
}
      
 if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
    else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["uname"])) {
    $unameErr = "User Name is required";
  } else {
    $uname = test_input($_POST["uname"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z-'_ ]*$/",$uname)) {
      $unameErr = "User Name can contain alpha numeric characters, period, dash or underscore only";
    } 
     if (strlen($_POST["uname"])<2) {
      $unameErr = "Should contain atleast 2 characters";
    } 

  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["pass"])) {
    $passErr = " Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
    // check if password is well-formed
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["cpass"])) {
    $cpassErr = "Retyped Password is required";
  } 
else if(empty($_POST["pass"]))
{
  $cpassErr = "Password is required";

}
  else {
    $cpass = test_input($_POST["cpass"]);
    // check if password is well-formed
     if ($pass!=$cpass) {
      $cpassErr = "Retyped password did not match with new password";
    }
  }
}
if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
   if (empty($_POST["dob"])) {
    $dobErr = "Date of birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
    }   
       
  
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
 <style>

</style>
</head>  
<body>  
            
      
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <?php  echo "Fabiha Khaled" ?>
  <br /> <br />
  E-mail: <?php  echo "fabihakhaled111@gmail.com" ?>
  <br /> <br />
UserName: <?php  echo "Fabiha99" ?>
<br /> <br />
Password: <?php  echo "admin" ?>
 <br /> <br />
  Gender: <?php  echo "Female" ?>
  
  <br /> <br />
  Date Of Birth : <?php  echo "18/10/21" ?>
  <br /> <br />
  

</form>              
                <?php include 'account.php';?>  
                <?php include 'footer.php';?>  
           </div>  
           <br />  
      </body>  
 </html>  
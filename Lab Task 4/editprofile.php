<div class="menu">
<div class="menu">
<?php include 'menu.php';?>
<?php  
 
$nameErr = $emailErr =$unameErr= $genderErr = $dobErr =$cpassErr = $passErr= ""; 
$name =$email = $gender =$dob =$pass=$cpass="";


 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  }  else {
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
.error {color: #FF0000;}
</style>
</head>  
<body>  
            
 <p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:<input type="text" name="name" value="Fabiha Khaled">
   <span class="error">* <?php echo $nameErr;?></span>
  <br /> <br />
  E-mail: <input type="text" name="email" value="fabihakhaled111@gmail.com">
   <span class="error">* <?php echo $emailErr;?></span>
  
  <br /> <br />
UserName: <input type="text" name="uname" value="Fabiha99">
<span class="error">* <?php echo $unameErr;?></span>

<br /> <br />
Password: <input type="text" name="pass" value="admin">
<span class="error">* <?php echo $passErr;?></span>

 
 <br /> <br />
 Confirm Password: <input type="text" name="cpass" value="admin">
 <span class="error">* <?php echo $cpassErr;?></span>

 <br /> <br />
  Gender:
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="gender">Male
  <input type="radio" name="gender" value="gender">Other
  <span class="error">* <?php echo $genderErr;?></span>
 
  <br /> <br />
  Date Of Birth <input type="Date" name="dob" value="dob">
  <span class="error"><?php echo $dobErr;?></span>
 
  <br /> <br />
  <input type="submit" name="submit" value="Submit">  

</form>    
         
                  <?php include 'account.php';?>     
                <?php include 'footer.php';?>  
           </div>  
           <br />  
      </body>  
 </html>  
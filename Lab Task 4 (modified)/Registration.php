<div class="menu">
<?php include 'menu.php';?>
<?php  
 $message = '';  
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
if(empty($_POST["pass"]))
    {
      $passErr = "Password is required";
    }
    else {
      $pass=test_input($_POST["pass"]);
      if(strlen($pass)<8)
      {
        $passErr="Password must not be less than eight (8) characters";
      }
      else {
        if(substr_count($pass,"@")<1 || substr_count($pass,"#")<1 || substr_count($pass,"%")<1 || substr_count($pass,"$")<1)
        {
          $passErr="Password must contain at least one of the special characters (@, #, $,%)";
          
        }
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
       if(isset($_POST["submit"]))
    {
      
           if(file_exists('data2.json'))  
           {  
                $current_data = file_get_contents('data2.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'email'          =>     $_POST["email"],  
                     'uname'     =>     $_POST["uname"] ,
                     'pass'               =>     $_POST['pass'],  
                     'cpass'               =>     $_POST['cpass'], 
                     'gender'               =>     $_POST['gender'], 
                     'dob'               =>     $_POST['dob'], 
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data2.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
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
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Append Data to JSON File</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br /> <br />
 <p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br /> <br />
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br /> <br />
UserName: <input type="text" name="uname">
<span class="error">* <?php echo $unameErr;?></span>
<br /> <br />
Password: <input type="text" name="pass">
 <span class="error">* <?php echo $passErr;?></span>
 <br /> <br />
 Confirm Password: <input type="text" name="cpass">
 <span class="error">* <?php echo $cpassErr;?></span>
 <br /> <br />
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br /> <br />
  Date Of Birth <input type="Date" name="dob">
  <span class="error"><?php echo $dobErr;?></span>
  <br /> <br />
  <input type="submit" name="submit" value="Submit">  

</form>              
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>
                <?php include 'footer.php';?>  
           </div>  
           <br />  
      </body>  
 </html>  
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $dobErr =$degreeErr=$bgErr= "";
$name = $email = $gender =$dob =$degree = $bg="";

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
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["dob"])) {
    $dobErr = "Date of birth is required";
  } else {
    $dob = test_input($_POST["dob"]);
    }    


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

   
 if(!empty($_POST["degree"])){
    $countDegree = count($_POST["degree"]);
    if($countDegree<2){
      $degreeErr = "At least two of them must be selected";
    }

  }else{
     $degreeErr = "Degree is required";
  }
  
  

   if (empty($_POST["bg"])) {
    $bgErr = "Blood group is required";
  } else {
    $bg= test_input($_POST["bg"]);
}

    


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Date Of Birth <input type="Date" name="dob">
  <span class="error"><?php echo $dobErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  Degree:
  <input type="checkbox" name='degree[]' id="dg" value="SSC">SSC
  <input type="checkbox" name='degree[]' id="dg" value="HSC">HSC
  <input type="checkbox" name='degree[]' id="dg" value="BSc">BSc
  <input type="checkbox" name='degree[]' id="dg" value="MSc">MSc
  <span class="error">* <?php echo $degreeErr;?></span>
  <br><br>
  Blood Group
  <select name="bg">
    <option></option>
    <option value="A+">A+</option>
    <option value="AB+">AB+</option>
    <option value="B+">B+</option>
    <option value="O-">O-</option>
   </select>
   <span class="error">* <?php echo $bgErr;?></span>
   <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bg;

?>

</body>
</html>
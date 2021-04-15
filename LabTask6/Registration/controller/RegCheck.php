
<?php 
require_once('../model/model_r.php');

 if(isset($_POST["submit"])) 
 {                                                                                         
 $nameErr = $emailErr =$unameErr= $genderErr =$cpassErr = $passErr=  $birthErr =""; 
 $name = $email = $uname= $gender  =$cpass = $pass=$birthDate = $birthMonth = $birthYear="";
 $flag=1;


 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 

  if (empty($_POST["name"])) {
    $message= "Name is required";
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      echo "Only letters and white space allowed";
      $flag=0;
    } 
    else {
     if (str_word_count($name)<2) {
      echo "Should contain atleast 2 words";
      $flag=0;
    } 
}
  }

      
 if (empty($_POST["email"])) {
    echo "Email is required";
    $flag=0;
  }
    else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      $flag=0;
    }
  }
  
 if (empty($_POST["uname"])) {
    echo "User Name is required";
    $flag=0;
  } else {
    $uname = test_input($_POST["uname"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z-'_ ]*$/",$uname)) {
      echo "User Name can contain alpha numeric characters, period, dash or underscore only";
      $flag=0;
    } 
     if (strlen($_POST["uname"])<2) {
      echo "Should contain atleast 2 characters";
      $flag=0;
    } 

  }

if(empty($_POST["pass"]))
    {
      echo "Password is required";
      $flag=0;
    }
    else {
      $pass=test_input($_POST["pass"]);
      if(strlen($pass)<8)
      {
        echo "Password must not be less than eight (8) characters";
        $flag=0;
      }
     
    }
    

 if(empty($_POST["cpass"]))
    {
      echo "Confirm Password is required";
      $flag=0;
    }
    else {
      if(empty($_POST["pass"]))
      {
        echo "Password is required";
        $flag=0;
      }
      else {
        $cpass=test_input($_POST["cpass"]);

        if(strcmp($pass,$cpass))
        {
         echo "Password and confirm password have to be same";
          $flag=0;
        }
      }
    }

if (empty($_POST["gender"])) {
    echo "Gender is required";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }
   

    if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) {
    $birthErr = "Date Month and Year is required";
    $flag=0;
  } else {

    $birthDate=test_input($_POST["birthDate"]);
    $birthMonth=test_input($_POST["birthMonth"]);
    $birthYear=test_input($_POST["birthYear"]);

    if(!is_numeric($birthDate))
    {
      $birthErr="Please input Numeric Date";
      $flag=0;
    }
    else {

      if(!is_numeric($birthMonth))
      {
          $birthErr="Please input Numeric month";
          $flag=0;
      }
      else {
        if(!is_numeric($birthYear))
        {
          $birthErr="Please input Numeric Year";
          $flag=0;
        }
        else {
          if($birthDate>31 || $birthDate<1)
          {
              $birthErr=" Input Date between 1 to 31";
              $flag=0;
          }
          else {
              if($birthMonth>12 || $birthMonth<1)
              {
                  $birthErr=" Input Month between 1 to 12";
                  $flag=0;
              }
              else {
                  if($birthYear>1998 || $birthYear<1953)
                  {
                    $birthErr=" Input Year between 1953 to 1998";
                    $flag=0;
                  }
                  else {
                    $birthErr=" ";
                  }
              }
          }

        }
      }
    }
}

	if($flag==1)  
	{

    $pass = md5($_POST["pass"]);
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['uname'] = $_POST['uname'];
	$data['gender'] = $_POST['gender'];
	$data['pass'] = $_POST['pass'];
	
	

   if (addRegistration($data)) {
    echo 'Successfully added!!';
  }
 else {
    echo 'Could not add';
}	
}
    }

else
   {
	echo "You are not allowed to access this page.";

    }


?>
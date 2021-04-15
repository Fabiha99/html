<div class="menu">
<div class="menu">
<?php include 'menu.php';?>
<?php  
  
class student {
  public static $name = "Fabiha Khaled";
  public static $email = "fabihakhaled111@gmail.com";
  public static $uname = "Fabiha99";
  public static $pass = "admin";
   public static $gender = "Female";
    public static $dob = "18/10/21";

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
  Name: <?php  echo student::$name; ?>
  <br /> <br />
  E-mail: <?php  echo student::$email; ?>
  <br /> <br />
UserName: <?php  echo student::$uname; ?>
<br /> <br />
Password: <?php  echo student::$pass; ?>
 <br /> <br />
  Gender: <?php  echo student::$gender;?>
  
  <br /> <br />
  Date Of Birth : <?php  echo student::$dob; ?>
  <br /> <br />
  

</form>              
                <?php include 'account.php';?>  
                <?php include 'footer.php';?>  
           </div>  
           <br />  
      </body>  
 </html>  
<div class="menu">
<?php include 'header2.php';?>
</div>
<?php 

$username="Fabiha99";
$password="admin";

session_start();

if (isset($_SESSION['uname'])) {
	echo "<h1> Welcome ".$_SESSION['uname']."</h2>";

}
else{
	if ($_POST['uname']==$username && $_POST['pass']==$password) {
		$_SESSION['uname'] = $username;
		echo "<script>location.href='welcome.php'</script>";
	}
	else{
		echo "<script>alert(uname or pass incorrect!)</script>";
		echo "<script>location.href='login2.php'</script>";
	}
}

 ?>
 <?php include 'account.php';?>
 <?php include 'footer.php';?>
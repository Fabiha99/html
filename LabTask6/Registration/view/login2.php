
<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<div class="menu">
<?php include 'menu.php';?>
</div>
<html>
	<head>
		<title>Login</title>
		<style>
			body{
				background:#1dd1a1;
				
				
			}
			
		</style>
	</head>

<form action="welcome.php" method="post">
	<table align="center">
		<tr>
			<th colspan="2"><h2>Login</h2></th>
		</tr>
		<tr>
			<td>User name</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="submit"></td>
		</tr>
	</table>
	
</form>
<div style="text-align:center">
  <a href="forgotpassword.php">Forgot Password?</a>
</div>
<?php include 'footer.php';?>

</body>
</html>
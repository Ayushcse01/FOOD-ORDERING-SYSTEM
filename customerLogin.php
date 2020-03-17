<!DOCTYPE html>
<html>
<head>
	<title>Customer Login Page</title>
</head>
<body style="text-align:center;"style="font-size:300%;">
	<form action = "processCustomerLogin.php" method = "post">
		Customer ID: <input type="text" name="uname">
		<br><br>
		Password: <input type="password" name="pass">
		<br><br>
		<input type="submit" name="submit" value="Login">
	</form>

	<form action = "customerregister.php" method = "post">
	<input type="submit" name="submit" value="Register Now">
	</form>
</body>
</html>
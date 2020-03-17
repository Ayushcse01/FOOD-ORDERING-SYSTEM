<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body style="text-align:center;"style="font-size:300%;">
	<h1> WELCOME TO ONLINE FOOD ORDERING SYSTEM </h1>
	<h4> Click here to login to the system </h4>
	<form action = "customerLogin.php" method = "post">
		<input type="submit" name="submit" value="Customer Login">
	</form>
	<h4> Click here to Register!!! </h4>
	<form action = "customerRegister.php" method = "post">
		<input type="submit" name="submit" value="Customer Registration">
	</form>
	<h4> Click here to View user to the system </h4>
	<form action = "processCustomerRegisteredDisplay.php" method = "post">
		<input type="submit" name="submit" value="Registered Customers">
	</form>
</body>
</html>
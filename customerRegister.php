<!DOCTYPE html>
<html>
<head>
	<title>Customer Registration</title>
</head>
<body style="text-align:center;"style="font-size:300%;">
	<form action = "processCustomerRegister.php" method = "post">
		Name: <input type="text" name="name">
		<br>
		E-mail: <input type="email" name="email">
		<br>
		City: <input type="text" name="city">
		<br>
		State: <input type="text" name="state">
		<br>
		Pincode: <input type="text" name="pincode">
		<br>
		Contact Number: <input type="text" name="ph_no">
		<br>
		Password: <input type="password" name="password">
		<br>
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>
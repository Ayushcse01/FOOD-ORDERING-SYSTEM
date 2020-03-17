<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "food_booking";
	$table = "customer";


	$con = mysqli_connect($server, $user, $pass, $db);

	if (! $con) {
		die("Error");
	}

	$uname = $_POST['uname'];
	$pass = $_POST['pass'];

	$sqlPassCheck = "select * from customer where cid = $uname and password = '$pass';";
	$res = mysqli_query($con, $sqlPassCheck);
	$row = mysqli_fetch_assoc($res);
	if ($row['cid'] == $uname) {
		if ($row['password'] == $pass) {
			echo "Login Successful";

		}
	}
	else
		{
echo "Login Unsuccessfull! Try Again, ";
die(" Incorrect Username or Password");
}
	?>
		<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="text-align:center;"style="font-size:300%;">

	<form action = "order.php" method = "post">
		<input type="submit" name="submit" value="Order">
	</form>

	<form action = "customerlogin.php" method = "post">
		<input type="submit" name="submit" value="Sign Out">
	</form>

</body>
</html>



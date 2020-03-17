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
	$sqlShowAll = "select * from customer;";
		$resShowAll = mysqli_query($con, $sqlShowAll);
		echo "<h1> Registered Customers </h1><br>";
		echo "<table>";
			echo "<tr>";
				echo "<th>ID</th>";
				echo "<th>Name</th>";
				echo "<th>Email</th>";
				echo "<th>City</th>";
				echo "<th>State</th>";
				echo "<th>Pincode</th>";
				echo "<th>Phone</th>";
				echo "<th>Password</th>";
			echo "</tr>";
			echo "</tr><br>";
			while ($row = mysqli_fetch_assoc($resShowAll)) {
			echo "<tr>";

			foreach ($row as $cell) {
				echo "<td>$cell </td>";
			}

			echo "</tr><br>";
		}
		echo "</table>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="text-align:center;"style="font-size:300%;">
	<form action = "customerRegister.php" method = "post">
		<input type="submit" name="submit" value="Register Customers">
	</form>

	<form action = "customerLogin.php" method = "post">
		<input type="submit" name="submit" value="Customer Login">
	</form>
	

	<form action = "index.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>

</body>
</html>
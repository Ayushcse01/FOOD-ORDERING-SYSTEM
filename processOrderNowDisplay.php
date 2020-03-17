<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "food_booking";
	$table = "orderx";

	$con = mysqli_connect($server, $user, $pass, $db);

	if (! $con) {
		die("Error");
	}

		$sqlShowAll = "select * from orderx;";
		$resShowAll = mysqli_query($con, $sqlShowAll);
		echo "<h1> All Orders </h1><br>";
		echo "<table>";
 		echo "<tr>";
    		echo "<th>Order ID</th>";
    		echo "<th>Date</th>";
    		echo "<th>Time</th>";
    		echo "<th>Payment Mode</th>";
    		echo "<th>Payment Detail</th>";
    		echo "<th>Amount</th>";
    		echo "<th>Customer ID</th>";
    		echo "<th>Restaurant ID</th>";
    		echo "<th>Delivery ID</th>";
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
	<form action = "orderedFood.php" method = "post">
		<input type="submit" name="submit" value="Order Page">
	</form>

	<form action = "index.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>

</body>
</html>
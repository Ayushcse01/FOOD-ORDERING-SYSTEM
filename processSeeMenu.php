<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "food_booking";
	$table = "menu";

	$con = mysqli_connect($server, $user, $pass, $db);

	if (! $con) {
		die("Error");
	}
	$sqlShowAll = "select * from menu;";
		$resShowAll = mysqli_query($con, $sqlShowAll);
		echo "<table>";
  			echo "<tr>";
    			echo "<th>ID</th>";
    			echo "<th>Name</th>";
    			echo "<th>Price</th>";
    			echo "<th>Restaurant ID</th>";
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
	<h2></h2>
	<form action = "orderNow.php" method = "post">
		<input type="submit" name="submit" value="Order">
	</form>
	<h2>Click here to go to home page</h2>
	
	<form action = "index.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>

</body>
</html>
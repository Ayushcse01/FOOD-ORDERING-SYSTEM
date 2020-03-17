<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "food_booking";
	$table = "ordered_food";

	$con = mysqli_connect($server, $user, $pass, $db);

	if (! $con) {
		die("Error");
	}

	$oid = $_POST['oid'];
	$fid = $_POST['fid'];

	$sqlInsert = "insert into restaurant values($oid, $fid);";
	if($res = mysqli_query($con, $sqlInsert)) {
		echo "Insertion Successful";
		echo "<br>";
		$sqlShowAll = "select * from restaurant;";
		$resShowAll = mysqli_query($con, $sqlShowAll);
		echo "<h1> Registered Ordered Food </h1><br>";
		echo "<table>" ;
		echo "<tr>";
    		echo "<th><b>Order ID </b></th>";
    		echo "<th><b>Food ID </b></th>";
  		echo "</tr><br>";
		while ($row = mysqli_fetch_assoc($resShowAll)) {
			echo "<tr>";

			foreach ($row as $cell) {
				echo "<td>$cell </td>";
			}

			echo "</tr><br>";
		}
		echo "</table>";
	}
	else
		echo "Unsuccessful Insertion";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="text-align:center;"style="font-size:300%;">
	<form action = "registerOrderedFood.php" method = "post">
		<input type="submit" name="submit" value="Register">
	</form>

	<form action = "index.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>

</body>
</html>
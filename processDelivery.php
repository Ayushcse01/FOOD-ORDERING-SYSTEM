<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "food_booking";
	$table = "delivery_boy";

	$con = mysqli_connect($server, $user, $pass, $db);

	if (! $con) {
		die("Error");
	}

	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$ph_no = $_POST['ph_no'];
	$pincode_assigned = $_POST['pincode_assigned'];

	$sqlInsert = "insert into delivery_boy values($id, '$fname', '$lname', $ph_no, $pincode_assigned);";
	if($res = mysqli_query($con, $sqlInsert)) {
		echo "Insertion Successful";
		echo "<br>";
		$sqlShowAll = "select * from delivery_boy;";
		$resShowAll = mysqli_query($con, $sqlShowAll);
		echo "<h1> Registered Delivery personnels </h1><br>";
		echo "<table>";
			echo "<tr>";
    			echo "<th>ID</th>";
    			echo "<th>First Name</th>";
    			echo "<th>Last Name</th>";
    			echo "<th>Phone Number</th>";
    			echo "<th>Pincode Assigned</th>";
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
	<form action = "delivery.php" method = "post">
		<input type="submit" name="submit" value="Register Delivery boy">
	</form>

	<form action = "index.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>

</body>
</html>
<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "food_booking";
	$restaurant = "restaurant";


	$con = mysqli_connect($server, $user, $pass, $db);

	if (! $con) {
		die("hi");
	}

	
	$rname = $_POST['rname'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pincode = $_POST['pincode'];
	$ph_no = $_POST['ph_no'];


	$sqlInsert = "insert into restaurant values('', '$rname', '$city', '$state', $pincode, $ph_no);";
	if($res = mysqli_query($con, $sqlInsert)) {
		echo "Insertion Successful";
		echo "<br>";
		$sqlShowAll = "select * from restaurant;";
		$resShowAll = mysqli_query($con, $sqlShowAll);
		echo "<h1> Registered Restaurants </h1><br>";
		echo "<table>" ;
		echo "<tr>";
    		echo "<th><b>ID </b></th>";
    		echo "<th><b>Name </b></th>";
    		echo "<th><b>City </b></th>";
    		echo "<th><b>State </b></th>";
    		echo "<th><b>Pincode </b></th>";
    		echo "<th><b>Phone Number </b></th>";
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

	<form action = "restaurant.php" method = "post">
		<input type="submit" name="submit" value="Register Restaurants">
	</form>
	<form action = "index.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>

</body>
</html>
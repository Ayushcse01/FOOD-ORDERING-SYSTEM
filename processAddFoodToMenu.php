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

	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$rid = $_POST['rid'];

	$sqlInsert = "insert into menu values($id, '$name', '$price', $rid);";
	if($res = mysqli_query($con, $sqlInsert)) {
		echo "Insertion Successful";
		echo "<br>";
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
	<form action = "addFoodToMenu.php" method = "post">
		<input type="submit" name="submit" value="Add Food">
	</form>

	<form action = "index.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>

</body>
</html>
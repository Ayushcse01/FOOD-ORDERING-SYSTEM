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

	$payment_mode = $_POST['payment_mode'];
	$payment_detail = $_POST['payment_detail'];
	$amount = $_POST['amount'];
	$cid = $_POST['cid'];
	$rid = $_POST['rid'];
	$bid = $_POST['bid'];

	$sqlInsert = "insert into orderx values('', CURDATE(), CURTIME(), '$payment_mode', '$payment_detail', $amount, $cid, $rid, $bid);";
	if($res = mysqli_query($con, $sqlInsert)) {
		echo "Insertion Successful";
		echo "<br>";
	}
	else
		echo "Unsucessful Insertion";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="text-align:center;"style="font-size:300%;">
	<form action = "order.php" method = "post">
		<input type="submit" name="submit" value="Order More">
	</form>

	<form action = "index.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>

</body>
</html>
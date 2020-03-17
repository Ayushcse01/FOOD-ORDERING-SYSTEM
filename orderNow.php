<!DOCTYPE html>
<html>
<head>
	<title>Order Food</title>
</head>
<body style="text-align:center;"style="font-size:300%;">
	<form action="processOrderNow.php" method="POST">
		Payment Mode: <input type="text" name="payment_mode">
		<br>
		Payment Detail: <input type="text" name="payment_detail">
		<br>
		Amount: <input type="text" name="amount">
		<br>
		Customer ID: <input type="text" name="cid">
		<br>
		Restaurant ID: <input type="text" name="rid">
		<br>
		Delivery Boy ID: <input type="text" name="bid">
		<br>
		<input type="submit" name="submit" value="Confirm Order">
	</form>
</body>
</html>
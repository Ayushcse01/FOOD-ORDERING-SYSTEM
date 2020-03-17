<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Registration</title>
</head>
<body style="text-align:center;"style="font-size:300%;">
	<form action = "processRestaurant.php" method = "post">
		Restaurant Name: <input type="text" name="rname">
		<br>
		<p><b>Resturant Location</b>
		<br>
		City: <input type="text" name="city">
		<br>
		State: <input type="text" name="state">
		<br>
		Pincode: <input type="text" name="pincode">
		</p>
		<br>
		Contact Number: <input type="text" name="ph_no">
		<br>
		<input type="submit" name="submit" value="Register">
	</form>
	<h2> click here to add food to menu</h2>
	<form action = "addFoodToMenu.php" method = "post">
		<input type="submit" name="submit" value="Add Food To Menu">
	</form>
	<h2> Click here to display Registered Restaurants</h2>
	
	<form action = "processRestaurantRegisteredDisplay.php" method = "post">
		<input type="submit" name="submit" value="Display Registered Restaurants">
	</form>
	<h2>Click here to go to home page</h2>
	<form action = "index.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>

</body>
</html>


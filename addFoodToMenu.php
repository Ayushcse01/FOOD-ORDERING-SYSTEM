<!DOCTYPE html>
<html>
<head>
	<title>Add Food To Menu</title>
</head>
<body style="text-align:center;"style="font-size:300%;">
	<h1>Add food to menu</h1>
	<form action = "processAddFoodToMenu.php" method="post">
		Id: <input type="text" name="id">
		<br>
		Name: <input type="text" name="name">
		<br>
		Price: <input type="text" name="price">
		<br>
		Restaurant ID: <input type="text" name="rid">
		<br>
		<input type="submit" name="submit" value="Add">
	</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
	<form action="user-input.php" method="get">
		Name: <input type="text" name="username" placeholder="Enter name">
		<br>
		Age: <input type="text" name="age" placeholder="Enter age">
		<input type="submit">
	</form>
	<br>
	Your name is <?php echo $_GET["username"]; ?>
	and you are <?php echo $_GET["age"]; ?> years old.
</body>
</html>
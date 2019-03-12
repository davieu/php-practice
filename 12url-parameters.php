<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->

<form action="url-parameter.php" method="get">
	Name: <input type="text" name="name"> <br>
	<input type="submit">
</form>
<br><br>
<?php 
	echo $_GET["name"];
	echo $_GET["age"];
?>

</body>
</html>
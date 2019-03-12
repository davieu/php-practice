<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
<h1>GET</h1>
	<form action="post-get.php" method="get">
		<input type="password" name="password"> <br>
		<input type="submit">
		<br><br>
	</form>

	<?php 
		echo $_GET["password"];
	?>

<h1>POST</h1>
<form action="post-get.php" method="post">
		<input type="password" name="password2"> <br>
		<input type="submit">
		<br><br>
	</form>

	<?php 
		echo $_POST["password2"];
	?>
	
</body>
</html>
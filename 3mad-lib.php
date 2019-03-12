<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
	<form action="mad-lib.php" action="get">
		Color: <input type="text" name="color"> <br>
		Plural Noun:<input type="text" name="noun"> <br>
		Celebrity: <input type="text" name="celebrity"> <br>
		<input type="submit">
	</form>

	<?php
	$color = $_GET["color"];
	$noun = $_GET["noun"];
	$celebrity = $_GET["celebrity"];
		echo "Roses are $color <br>";
		echo "$noun are blue <br>";
		echo "I love $celebrity <br>";
	?>
</body>
</html>
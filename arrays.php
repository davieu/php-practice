<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
	<?php
		$friends = array("Kevin", "Karen", "Oscar", "Jim");
		echo "$friends[3] <br>";
		
		for ($i = 0; $i < count($friends); $i++) {
		echo "$friends[$i] <br>";
		};
	?>

</body>
</html>
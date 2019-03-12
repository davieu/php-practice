<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8">
    <title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
	<?php

		$name = "Davis";	
		$age = 26;

		echo("Hello world");
		echo "<h1> $name' Site</h1>";
		echo "<hr>";
		echo "<p>This is my site</p>";
		$name = "Dave";
		echo "<p>My name is $name and I am $age years old.</p>";

		$phrase = "Giraffe Academy";
		echo $phrase . "<br>";
		echo strtoupper($phrase) . "<br>";
		echo strtolower($phrase) . "<br>";
		echo strlen($phrase) . "<br>";
		echo strtoupper("dog") . "<br>";
		echo $phrase[0] . "<br>";
		echo $phrase[1] . "<br>";
		echo $phrase[2] . "<br>";
		echo "dog"[0] . "<br>";
		$phrase[0] = "Z";
		echo $phrase . "<br>";
		$phrase[0] = "G";
		//replace string
		echo str_replace("Giraffe", "Panda", $phrase) . "<br>"; //Panda Academy
		echo substr($phrase, 8) . "<br>"; //Academy
		echo substr($phrase, 8, 3) . "<br>"; //Aca
		echo substr($phrase, 0, 7) . "<br"; //Giraffe

	?>
</body>
</html>
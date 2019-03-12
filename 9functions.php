<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
  <?php
    function sayHi($name, $age){
      echo "Hello $name, you are $age <br>";
    };

    sayHi("Dave", 26);
    sayHi("Tim", 30);
    sayHi("Tom", 20);
  ?>
</body>
</html>
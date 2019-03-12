<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
  <?php 
    function cube($num) {
      echo "CUBED <br>";
      return $num * $num * $num;
    };

    $cubeResult = cube(3);
    echo $cubeResult;
  ?>
</body>
</html>
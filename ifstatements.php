<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
   <?php 
    /*$isMale = true;
    $isTall = false;
    if ($isMale && $isTall) {
      echo "You are a tall male";
    } else if ($isMale && !$isTall) {
      echo "You are a short male";
    } else if (!$isMale && $isTall) {
      echo "You are not male but are tall";
    } else {
      echo "You are not male and not tall";
    }*/

    function getMax($num1, $num2, $num3) {
      if ($num1 >= $num2 && $num1 >= $num3) {
        return $num1;
      } else if ($num2 >= $num1 && $num2 >= $num3) {
        return $num2;
      } else {
        return $num3;
      }
    }

    echo getMax(300, 3000, 400);
   ?>
</body>
</html>
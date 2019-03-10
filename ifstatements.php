<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
   <?php 
    $isMale = true;
    $isTall = false;
    if ($isMale && $isTall) {
      echo "You are a tall male";
    } else if ($isMale && !$isTall) {
      echo "You are a short male";
    } else if (!$isMale && $isTall) {
      echo "You are not male but are tall";
    } else {
      echo "You are not male and not tall";
    }
   ?>
</body>
</html>
<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
  <?php
    $index = 1;
    while ($index <= 5) {
      echo "$index <br>";
      $index++;
    }
    echo "<br>";


    $num = 6;
    do {
      echo "$num <br>";
      $num++;
    } while ($num <= 5);
    echo "<br>";

    for ($i = 0; $i <= 5; $i++) {
      echo $i;
    }
    echo "<br>";

    $numbers = array(4, 8, 14, 23, 42);
    for ($i = 0; $i <  count($numbers); $i++) {
      echo $numbers[$i];
    }

  ?>
</body>
</html>
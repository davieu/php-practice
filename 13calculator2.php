<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
  <form action="calculator2.php" method="post">
    First Num: <input type="number" step="0.001" name="num1"><br>
    OP: <input type="text" name="op"><br>
    Second Num: <input type="number" step="0.001" name="num2"><br>
    <input type="submit">
  </form>  

  <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    if ($op == "+") {
      echo $num1 + $num2;
    } else if ($op == "-") {
      echo $num1 - $num2;
    } else if ($op == "/") {
      echo $num1 / $num2;
    } else if ($op == "*") {
      echo $num1 * $num2;
    } else {
      echo "invalid Operator";
    }

    // function calc($number1, $number2) {
    //   return $number1 + $number2;
    // }

    // echo calc($num1, $num2);
  ?>
</body>
</html>
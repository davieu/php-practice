<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
  <form action="associative-array.php" method="post">
    <input type="text" name="student">
    <input type="submit">
  </form>

  <?php

    $grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
    echo $grades["Jim"];
    echo $grades["Oscar"];
    $grades["Jim"] = "F";
    echo $grades["Jim"];
    echo "<br>";
    echo $grades[$_POST["student"]];
  ?>

</body>
</html>
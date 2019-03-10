<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
  <form action="checkboxes.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit">
  </form>

  <?php
    $fruits = $_POST["fruits"];
    echo $fruits[0];
    echo $fruits[1];
    echo $fruits[2];
    for ($i = 0; $i < count($fruits);$i++) {
      echo "$fruits[$i] <br>";
    };
  ?>
</body>
</html>
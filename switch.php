<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
  <form action="switch.php" method="post">
    What was your grade?
    <input type="text" name="grade">
    <input type="submit">
  </form>

  <?php
    $grade = $_POST["grade"];
    switch ($grade) {
      case "A":
        echo "You did amazing!";
        break;
      case "B":
        echo "you did pretty good";
        break;
      case "C":
        echo "You did poorly";
        break;
      case "D": 
        echo "You did very bad";
        break;
      case "F":
        echo "YOU FAIL!";
        break;
      default:
        echo "Invalid grade";
    }
    echo $grade;
  ?>
</body>
</html>
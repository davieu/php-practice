<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
  <?php
  $title = "My first post";
  $author = "Mike";
  $wordCount = 400; 
    include "16article-header.php";
    echo "<br>";
    include "16useful-tools.php";
    echo sayHi("Dave");
    echo "<br>";
    echo $feetInMiles;
  ?>

</body>
</html>
<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
  <?php
    class Chef {
      function makeChicken() {
        echo "The chef makes chicken <br>";
      }

      function makeSalad() {
        echo "The chef makes salad <br>";
      }

      function makeSpecialDish() {
        echo "The chef makes bbq ribs<br>";
      }
    }

    class ItalianChef extends Chef{
      function makePasta() {
        echo "The chef makes pasta <br>";
      }
      //overriding the makeSpecialDish() function but only for the italian chef.
      function makeSpecialDish() {
        echo "The chef makes chicken parm <br>";
      }
    }

    $chef = new Chef();
    $chef->makeChicken();
    $chef->makeSpecialDish();

    $italianChef = new ItalianChef();
    $italianChef->makeChicken();
    $italianChef->makePasta();
    $italianChef->makeSpecialDish();
  ?>

</body>
</html>
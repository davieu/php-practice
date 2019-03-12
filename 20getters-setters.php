<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
  <?php
  //visibility modifiers
  //Private is so that any code outside of the Movie class cannot access it. Only code in the class can. It cannot be printed or changed
    class Movie {
      public $title;
      private $rating;

      function __construct($title, $rating) {
        $this->title = $title;
        //setRating() used here so that you cannot directly change rating at the object create level
        $this->setRating($rating);
      }

      function getRating() {
        return $this->rating;
      }

      function setRating($rating) {
        if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
          $this->rating = $rating;
        } else {
          $this->rating = "NR";
        }
      }
      
    }

    $avengers = new Movie("Avengers", "PG-13");

    echo $avengers->title;
    echo "<br>";
    echo $avengers->getRating();
    // echo $avengers->rating;
    //invalid rating set so rating set to NR
    echo $avengers->setRating("Dog");
    echo "<br>";
    echo $avengers->getRating();
  ?>

</body>
</html>
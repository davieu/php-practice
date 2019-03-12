<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>PHP Demo</title>
</head>
<body>
<!-- /code/php/php-practice/ -->
  <?php 
    //class is a blueprint. defining new datatype
    class Book {
      var $title;
      var $author;
      var $pages;
    }

    //creating objects - instance of a class
    //book objects
    $book1 = new Book;
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    $book2 = new Book;
    $book2->title = "Lord of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 700;

    echo $book1->author;
    echo "<br>";
    echo $book1->title;
    echo "<br>";
    echo $book2->author;
    echo "<br>";
    echo $book2->title;
  ?>

</body>
</html>
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

      function __construct($name, $aTitle, $aAuthor, $aPages) {
        // echo "New Book Created for $name <br>";
        // $this refers to the object being created. book1, book2 are objects that are created. $book1 = new Book()  $book1 is the object beinng created
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
      }
    }

    //creating objects - instance of a class
    //book objects
    //contructor is a function that is called when an object of the class is created
    $book1 = new Book("Mike", "Harry Potter", "JK Rowling", 400);
    // $book1->title = "Harry Potter";
    // $book1->author = "JK Rowling";
    // $book1->pages = 400;

    $book2 = new Book("Dave", "Lord of the Rings", "Tolkien", 700);
    // $book2->title = "Lord of the Rings";
    // $book2->author = "Tolkien";
    // $book2->pages = 700;

    echo $book1->title;
    echo "<br>";
    echo $book2->title;
    echo "<br>";
    echo $book2->author;
  ?>

</body>
</html>
<?php
$books = array(
    array("title" => "Harry Potter", "author" => "J.K. Rowling", "year" => 1997),
    array("title" => "Lord of the Rings", "author" => "J.R.R. Tolkin", "year" => 1954),
    array("title" => "To Kill a Mockingbird", "author" => "Harper Lee", "year" => 1960),
    array("title" => "1984", "author" => "George Orwell", "year" => 1949),
    array("title" => "Pride and Prejudice", "author" => "Jane Austen", "year" => 1813)
);

echo "Whole books array:<br>";
foreach ($books as $book) {
    echo "title: " . $book["title"] . ", author: " . $book["author"] .
        ", year izdanja: " . $book["year"] . "<br>";
}

echo "Title of the first book: " . $books[0]["title"] . "<br>";

echo "All book authors:<br>";
foreach ($books as $book) {
    echo $book["author"] . "<br>";
}
?>
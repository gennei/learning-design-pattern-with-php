<?php

require_once "Aggregate.php";
require_once "Iterator.php";
require_once "Book.php";
require_once "Bookshelf.php";
require_once "BookshelfIterator.php";

$bookshelf = new \DesignPattern\Sample\Bookshelf();

$bookshelf->appendBook(new \DesignPattern\Sample\Book("Around the World in 80 Days"));
$bookshelf->appendBook(new \DesignPattern\Sample\Book("Bible"));
$bookshelf->appendBook(new \DesignPattern\Sample\Book("Cinderella"));
$bookshelf->appendBook(new \DesignPattern\Sample\Book("Daddy-Long-Lengs"));

$iterator = $bookshelf->iterator();
while ($iterator->hasNext()) {
    $book = $iterator->next();
    echo $book->getName() . PHP_EOL;
}
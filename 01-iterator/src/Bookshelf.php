<?php

namespace DesignPattern\Sample;

class Bookshelf implements Aggregate {

    private $books = [];

    public function __construct() {
    }

    public function getBookAt($index) {
        return $this->books[$index];
    }

    public function appendBook($book) {
        array_push($this->books, $book);
    }

    public function getLength() {
        return count($this->books);
    }

    public function iterator() : BookshelfIterator {
        return new BookshelfIterator($this);
    }
}
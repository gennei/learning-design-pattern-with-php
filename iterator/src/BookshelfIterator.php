<?php

namespace DesignPattern\Sample;

class BookshelfIterator implements Iterator {

    private $bookshelf;
    private $index;

    public function __construct(Bookshelf $bookshelf) {
        $this->bookshelf = $bookshelf;
        $this->index = 0;
    }

    public function hasNext() {
        return $this->bookshelf->getLength() > $this->index;
    }

    public function next() {
        $book = $this->bookshelf->getBookAt($this->index);
        $this->index += 1;
        return $book;
    }
}
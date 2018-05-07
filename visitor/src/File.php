<?php

namespace DesignPattern\Sample\Visitor;

class File extends Entry {

    private $name;
    private $size;

    public function __construct($name, $size) {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSize(): int {
        return $this->size;
    }

    public function accept(Visitor $v) {
        $v->visit($this);
    }
}
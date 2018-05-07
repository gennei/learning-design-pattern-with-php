<?php

namespace DesignPattern\Sample\Visitor;

class Directory extends Entry {

    private $name;

    /** @var Entry[]  */
    private $dir = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSize(): int {
        $size = 0;
        foreach ($this->dir as $v) {
            $size += $v->getSize();
        }
        return $size;
    }

    public function add(Entry $entry): Entry {
        $this->dir[] = $entry;
        return $this;
    }

    public function getDir() : array {
        return $this->dir;
    }


    public function accept(Visitor $v) {
        $v->visit($this);
    }
}
<?php

namespace DesignPattern\Sample\Composite;

class Directory extends Entry {

    private $name;

    /** @var Entry[] */
    private $directory = [];

    public function __construct(String $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSize(): int {
        $size = 0;
        foreach ($this->directory as $entry) {
            $size += $entry->getSize();
        }
        return $size;
    }

    public function add(Entry $entry) {
        $this->directory[] = $entry;
        return $this;
    }

    protected function printListWithPrefix(String $prefix) {
        echo $prefix . "/" . $this . PHP_EOL;
        foreach ($this->directory as $entry) {
            $entry->printListWithPrefix($prefix . "/" . $this->name);
        }
    }
}
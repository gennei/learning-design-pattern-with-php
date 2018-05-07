<?php

namespace DesignPattern\Sample\Visitor;

use DesignPattern\Sample\Visitor\Exception\FileTreatmentException;

abstract class Entry implements Element {

    public abstract function getName() : string;
    public abstract function getSize() : int;

    public function add(Entry $entry) : Entry {
        throw new FileTreatmentException("");
    }

    public function __toString() {
        return $this->getName() . " (" . $this->getSize() . ")";
    }
}

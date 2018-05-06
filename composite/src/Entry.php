<?php

namespace DesignPattern\Sample\Composite;

use DesignPattern\Sample\Composite\Exception\FileTreatmentException;

abstract class Entry {

    public abstract function getName() : string;
    public abstract function getSize() : int;

    /**
     * Entry constructor.
     * @param Entry $entry
     * @throws \Exception
     */
    public function __construct(Entry $entry) {
        throw new FileTreatmentException("");
    }

    public function printList() {
        $this->printListWithPrefix("");
    }

    protected abstract function printListWithPrefix(String $prefix);

    public function __toString() {
        return $this->getName() . " (" . $this->getSize() . ")";
    }
}
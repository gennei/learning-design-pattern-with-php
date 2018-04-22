<?php

namespace DesignPattern\Sample\TemplateMethod;

class CharDisplay extends AbstractDisplay {

    private $char;

    public function __construct($char) {
        $this->char = $char;
    }

    public function open() {
        echo "<<" ;
    }

    public function print() {
        echo $this->char;
    }

    public function close() {
        echo ">>";
        echo PHP_EOL;
    }
}
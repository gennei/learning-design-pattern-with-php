<?php

namespace DesignPattern\Sample\TemplateMethod;

class StringDisplay extends AbstractDisplay {

    private $string;
    private $width;

    public function __construct($string) {
        $this->string = $string;
        $this->width = mb_strlen($this->string, "UTF-8");
    }

    public function open() {
        $this->printLine();
    }

    public function print() {
        echo "| {$this->string} |";
        echo PHP_EOL;
    }

    public function close() {
        $this->printLine();
    }

    public function printLine() {
        echo "+";
        for ($i = 0; $i < $this->width; $i++) {
            echo "-";
        }
        echo "+";
        echo PHP_EOL;
    }
}
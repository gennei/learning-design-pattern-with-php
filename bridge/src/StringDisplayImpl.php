<?php

namespace DesignPattern\Sample\Bridge;

class StringDisplayImpl extends DisplayImpl {

    private $string;
    private $width;

    public function __construct(string $string) {
        $this->string = $string;
        $this->width = mb_strlen($this->string, "UTF-8");
    }

    public function rawOpen() {
        $this->printLine();
    }

    public function rawPrint() {
        echo "|{$this->string}|" . PHP_EOL;
    }

    public function rawClose() {
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
<?php

namespace DesignPattern\Sample\Decorator;

abstract class Display {

    public abstract function getColumns() : int;
    public abstract function getRows() : int;
    public abstract function getRowText(int $row) : ?string;

    public final function show() {

        for ($i = 0; $i < $this->getRows(); $i++) {
            echo $this->getRowText($i) . PHP_EOL;
        }
    }
}

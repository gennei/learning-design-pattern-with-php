<?php

namespace DesignPattern\Sample\AbstractFactory;

class ListTray extends Tray {

    public function __construct(string $caption) {
        parent::__construct($caption);
    }

    public function makeHTML() {
        $buffer = "";
        $buffer .= "<li>" . PHP_EOL;
        $buffer .= "{$this->caption}" . PHP_EOL;
        $buffer .= "<ul>" . PHP_EOL;

        foreach ($this->tray as $row) {
            $buffer .= $row->makeHTML();
        }
        $buffer .= "</ul>" . PHP_EOL;
        $buffer .= "</li>" . PHP_EOL;

        return $buffer;
    }
}
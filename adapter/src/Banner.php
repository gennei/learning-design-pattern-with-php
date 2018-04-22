<?php

namespace DesignPattern\Sample\Adapter;

class Banner {

    private $string;

    public function __construct(string $string) {
        $this->string = $string;
    }

    public function showWithParen() {
        echo "({$this->string})" . PHP_EOL;
    }

    public function showWithAstar() {
        echo "*{$this->string}*" .  PHP_EOL;
    }
}
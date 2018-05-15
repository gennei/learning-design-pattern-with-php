<?php

namespace DesignPattern\Sample\Flyweight;

class BigString {

    /** @var BigChar[] */
    private $bigchars = [];

    public function __construct(string $string) {
        $factory = BigCharFactory::getInstance();
        foreach (range(0, mb_strlen($string)) as $i) {
            $this->bigchars[$i] = $factory->getBigChar($string{$i});
        }
    }

    public function print() {
        foreach ($this->bigchars as $char) {
            $char->print();
        }
    }
}

<?php

namespace DesignPattern\Sample\Flyweight;

class BigChar {

    private $charname;
    private $fontdata;

    public function __construct($charname) {
        $this->charname = $charname;
        $path = dirname(__FILE__);
        $this->fontdata = file_get_contents("{$path}/data/big{$charname}.txt");
    }

    public function print() {
        echo $this->fontdata;
    }
}

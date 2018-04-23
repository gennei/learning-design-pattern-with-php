<?php

namespace DesignPattern\Sample\Prototype;

class UnderlinePen implements Product {

    private $ulchar;

    public function __construct($ulchar) {
        $this->ulchar = $ulchar;
    }

    public function use(string $s) {
        // TODO: Implement use() method.
        $length = mb_strlen($s);
        echo "\" {$s} \"" . PHP_EOL;
        echo "  ";
        for ($i = 0; $i < $length; $i++) {
            echo $this->ulchar;
        }
        echo PHP_EOL;
    }

    public function createClone() {
        $p = null;
        try {
            $p = clone $this;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return $p;
    }
}
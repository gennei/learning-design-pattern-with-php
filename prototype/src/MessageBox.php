<?php

namespace DesignPattern\Sample\Prototype;

class MessageBox implements Product {

    private $decochar;

    public function __construct(string $decochar) {
        $this->decochar = $decochar;
    }

    public function use(string $s) {
        $length = mb_strlen($s);
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decochar;
        }
        echo PHP_EOL;
        echo "{$this->decochar} {$s} {$this->decochar}" . PHP_EOL;
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decochar;
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
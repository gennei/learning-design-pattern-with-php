<?php

namespace DesignPattern\Sample\Singleton;

class Singleton {

    static private $singleton;

    private function __construct() {
        echo "インスタンスを生成しました。" . PHP_EOL;
    }

    static public function getInstance() {
        if (self::$singleton) {
            return self::$singleton;
        }
        return new Singleton();
    }
}
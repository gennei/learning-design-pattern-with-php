<?php

namespace DesignPattern\Sample\Singleton;

class Singleton {

    private static $singleton;

    private function __construct() {
        echo "インスタンスを生成しました。" . PHP_EOL;
    }

    public static  function getInstance() {
        if (self::$singleton) {
            return self::$singleton;
        }
        return self::$singleton = new Singleton();
    }
}

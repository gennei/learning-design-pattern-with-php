<?php

require_once "Singleton.php";

echo "start" . PHP_EOL;

$obj1 = \DesignPattern\Sample\Singleton\Singleton::getInstance();
$obj2 = \DesignPattern\Sample\Singleton\Singleton::getInstance();

if ($obj1 instanceof $obj2) {
    echo "obj1 と obj2 は同一インスタンスです。" . PHP_EOL;
} else {
    echo "obj1 と obj2 は別インスタンスです。" . PHP_EOL;
}

echo "end" . PHP_EOL;

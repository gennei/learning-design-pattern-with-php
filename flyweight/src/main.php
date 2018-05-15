<?php

require_once "BigChar.php";
require_once "BigString.php";
require_once "BigCharFactory.php";

$arg = "1212123";

$bs = new \DesignPattern\Sample\Flyweight\BigString($arg);
$bs->print();

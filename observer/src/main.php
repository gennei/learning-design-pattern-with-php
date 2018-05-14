<?php

require_once "Observer.php";
require_once "NumberGenerator.php";
require_once "DigitObserver.php";
require_once "GraphObserver.php";
require_once "RandomNumberGenerator.php";

$generator = new \DesignPattern\Sample\Observer\RandomNumberGenerator();
$o1 = new \DesignPattern\Sample\Observer\DigitObserver();
$o2 = new \DesignPattern\Sample\Observer\GraphObserver();

$generator->addObserver($o1);
$generator->addObserver($o2);
$generator->execute();

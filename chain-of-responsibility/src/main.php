<?php

require_once "Support.php";
require_once "Trouble.php";
require_once "LimitSupport.php";
require_once "NoSupport.php";
require_once "OddSupport.php";
require_once "SpecialSupport.php";

use DesignPattern\Sample\ChainOfResponsibility;

$alice = new ChainOfResponsibility\NoSupport("Alice");
$bob = new ChainOfResponsibility\LimitSupport("Bob", 100);
$charlie = new ChainOfResponsibility\SpecialSupport("Charlie", 429);
$diana = new ChainOfResponsibility\LimitSupport("Diana", 200);
$elmo = new ChainOfResponsibility\OddSupport("Elmo");
$fred = new ChainOfResponsibility\LimitSupport("Fred", 300);

$alice->setNext($bob)->setNext($charlie)->setNext($diana)->setNext($elmo)->setNext($fred);

// さまざまなトラブル発生
for ($i = 0; $i < 500; $i += 33) {
    $alice->support(new ChainOfResponsibility\Trouble($i));
}

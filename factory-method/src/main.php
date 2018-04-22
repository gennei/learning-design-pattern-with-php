<?php

require_once "Product.php";
require_once "Factory.php";
require_once "IDcard.php";
require_once "IDCardFactory.php";

$factory = new \DesignPattern\Sample\FactoryMethod\IDCard\IDCardFactory();
$card1 = $factory->create("パトリック");
$card2 = $factory->create("ムイ");
$card3 = $factory->create("渡大生");
$card1->use();
$card2->use();
$card3->use();
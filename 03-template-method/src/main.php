<?php

require_once "AbstractDisplay.php";
require_once "CharDisplay.php";
require_once "StringDisplay.php";

$d1 = new \DesignPattern\Sample\TemplateMethod\CharDisplay("H");
$d2 = new \DesignPattern\Sample\TemplateMethod\StringDisplay("Hello World");
$d3 = new \DesignPattern\Sample\TemplateMethod\StringDisplay("こんにちは");

$d1->display();
$d2->display();
$d3->display();

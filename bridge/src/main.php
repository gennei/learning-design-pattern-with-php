<?php

require_once "Display.php";
require_once "DisplayImpl.php";
require_once "CountDisplay.php";
require_once "StringDisplayImpl.php";

use DesignPattern\Sample\Bridge;

$d1 = new Bridge\Display(new Bridge\StringDisplayImpl("Hello Japan."));
$d2 = new Bridge\CountDisplay(new \DesignPattern\Sample\Bridge\StringDisplayImpl("Hello World."));
$d3 = new Bridge\CountDisplay(new Bridge\StringDisplayImpl("hello universe."));

$d1->display();
$d2->display();
$d3->display();
$d3->multiDisplay(5);
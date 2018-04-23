<?php

require_once "Product.php";
require_once "Manager.php";
require_once "MessageBox.php";
require_once "UnderlinePen.php";

$manager = new \DesignPattern\Sample\Prototype\Manager();
$upen =  new \DesignPattern\Sample\Prototype\UnderlinePen("~");
$mbox = new \DesignPattern\Sample\Prototype\MessageBox("*");
$sbox = new \DesignPattern\Sample\Prototype\MessageBox("/");

$manager->register("strong message", $upen);
$manager->register("warning box", $mbox);
$manager->register("slash box", $sbox);

$p1 = $manager->create("strong message");
$p1->use("hello world");
$p2 = $manager->create("warning box");
$p2->use("Hello World");
$p3 = $manager->create("slash box");
$p3->use("Hello World");
<?php

require_once "Builder.php";
require_once "HTMLBuilder.php";
require_once "TextBuilder.php";
require_once "Director.php";

$text_builder = new \DesignPattern\Sample\Builder\TextBuilder();
$director = new \DesignPattern\Sample\Builder\Director($text_builder);
$director->construct();
$result = $text_builder->getResult();
echo $result;

$text_builder = new \DesignPattern\Sample\Builder\HTMLBuilder();
$director = new \DesignPattern\Sample\Builder\Director($text_builder);
$director->construct();
$result = $text_builder->getResult();
echo $result . "が生成されました";
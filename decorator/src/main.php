<?php

require_once "Display.php";
require_once "Border.php";
require_once "FullBorder.php";
require_once "SideBorder.php";
require_once "StringDisplay.php";

use DesignPattern\Sample\Decorator;

$b1 = new Decorator\StringDisplay("Hello world");
$b2 = new Decorator\SideBorder($b1, "#");
$b3 = new Decorator\FullBorder($b2);

$b1->show();
$b2->show();
$b3->show();

$b4 =
    new Decorator\SideBorder(
        new Decorator\FullBorder(
            new Decorator\FullBorder(
                new Decorator\SideBorder(
                    new Decorator\FullBorder(
                        new Decorator\StringDisplay("こんにちは。")
                    ),
                    ","
                )
            )
        ),
        "/"
    );
$b4->show();

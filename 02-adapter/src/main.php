<?php

require_once "Banner.php";
require_once "Print.php";
require_once "PrintBanner.php";

$banner = new \DesignPattern\Sample\Adapter\PrintBanner("hello");
$banner->printWeak();
$banner->printStrong();
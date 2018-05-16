<?php

require_once "Printable.php";
require_once "Printer.php";
require_once "PrinterProxy.php";

$p = new PrinterProxy("Alice");
echo "名前は現在" . $p->getPrinterName() . "です" . PHP_EOL;
$p->setPrinterName("Bob");
echo "名前は現在" . $p->getPrinterName() . "です" . PHP_EOL;
$p->print("hello world");

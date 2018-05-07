<?php

require_once "Visitor.php";
require_once "Element.php";
require_once "Entry.php";
require_once "File.php";
require_once "Directory.php";
require_once "ListVisitor.php";
require_once "Exception/FileTreatmentException.php";

use DesignPattern\Sample\Visitor\Directory;
use DesignPattern\Sample\Visitor\File;
use DesignPattern\Sample\Visitor\ListVisitor;

try {
    echo "Making root entries..." . PHP_EOL;
    $root_dir = new Directory("root");
    $bin_dir  = new Directory("bin");
    $tmp_dir  = new Directory("tmp");
    $usr_dir  = new Directory("usr");

    $root_dir->add($bin_dir);
    $root_dir->add($tmp_dir);
    $root_dir->add($usr_dir);
    $bin_dir->add(new File("vi", 10000));
    $bin_dir->add(new File("latex", 20000));
    $root_dir->accept(new ListVisitor());

    echo PHP_EOL;
    echo "Making user entries..." . PHP_EOL;

    $yuki = new Directory("yuki");
    $hanako = new Directory("hanako");
    $taro = new Directory("taro");
    $usr_dir->add($yuki);
    $usr_dir->add($hanako);
    $usr_dir->add($taro);

    $yuki->add(new File("diary.html", 100));
    $yuki->add(new File("Composite.java", 200));

    $hanako->add(new File("memo.tex", 300));
    $taro->add(new File("game.doc", 400));
    $taro->add(new File("junk.mail", 500));

    $root_dir->accept(new ListVisitor());
} catch (\Exception $e) {
    echo $e->getMessage();
}
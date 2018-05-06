<?php

require_once "Entry.php";
require_once "File.php";
require_once "Directory.php";
require_once "Exception/FileTreatmentException.php";

use DesignPattern\Sample\Composite\Directory;
use DesignPattern\Sample\Composite\File;

try {
    echo "Making root entries... " . PHP_EOL;

    $rootdir = new Directory("root");
    $bindir = new Directory("bin");
    $tmpdir = new Directory("tmp");
    $usrdir = new Directory("usr");

    $rootdir->add($bindir);
    $rootdir->add($tmpdir);
    $rootdir->add($usrdir);

    $bindir->add(new File("vi", 10000));
    $bindir->add(new File("latex", 20000));
    $rootdir->printList();

    echo PHP_EOL;
    echo "Making user entries..." . PHP_EOL;

    $yuki = new Directory("yuki");
    $hanako = new Directory("hanako");
    $taro = new Directory("taro");

    $usrdir->add($yuki);
    $usrdir->add($hanako);
    $usrdir->add($taro);

    $yuki->add(new File("diary.html", 100));
    $yuki->add(new File("Composite.java", 200));

    $hanako->add(new File("memo.tex", 300));
    $taro->add(new File("game.doc", 400));
    $taro->add(new File("junk.mail", 500));
    $rootdir->printList();

} catch (Exception $e) {
    echo $e->getMessage();
}








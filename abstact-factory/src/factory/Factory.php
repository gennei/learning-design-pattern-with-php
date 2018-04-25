<?php

namespace DesignPattern\Sample\AbstractFactory;

abstract class Factory {
    public static function getFactory(string $classname) : Factory {

        $factory = null;
        try {
            $classname = __NAMESPACE__ . "\\" . $classname;
            $factory = new $classname;
        } catch (\Exception $e) {
        }

        return $factory;
    }

    public abstract function createLink(string $caption, string $url) : Link;
    public abstract function createTray(string $caption) : Tray;
    public abstract function createPage(string $title, string $author) : Page;
}
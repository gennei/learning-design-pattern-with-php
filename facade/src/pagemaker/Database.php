<?php

namespace DesignPattern\Sample\Facade;

class Database {

    private function __construct() {
    }

    public static function getProperties(string $dbname) {

        // TODO: file から読み込むのは後で作る
        // $filename = $dbname . ".txt";
        // return file_get_contents($filename);

        return [
            "hyuki@hyuki.com"  => "Hiroshi Yuki",
            "hanako@hyuki.com" => "Hanako Sato",
            "tomura@hyuki.com" => "Tomura",
            "mamoru@hyuki.com" => "Mamoru Takahashi",
        ];
    }
}

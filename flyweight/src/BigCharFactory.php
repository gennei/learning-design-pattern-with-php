<?php

namespace DesignPattern\Sample\Flyweight;

class BigCharFactory {

    private $pool = [];
    private static $singleton;

    private function __construct() {
    }

    public static function getInstance() : BigCharFactory {
        if (self::$singleton === null) {
            self::$singleton = new BigCharFactory();
        }

        return self::$singleton;
    }

    public function getBigChar($charname) : BigChar {
        if (isset($this->pool[$charname])) {
            $bc = $this->pool[$charname];
        } else {
            $bc = new BigChar($charname);
            $this->pool[$charname] = $bc;
        }

        return $bc;
    }
}

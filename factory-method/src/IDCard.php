<?php

namespace DesignPattern\Sample\FactoryMethod\IDCard;

use DesignPattern\Sample\FactoryMethod\Framework\Product;

class IDCard extends Product {
    private $owner;

    public function __construct(string $owner) {
        $this->owner = $owner;
        echo "{$this->owner} のカードを作ります。" . PHP_EOL;
    }

    public function use() {
        echo "{$this->owner} のカードを使います。" . PHP_EOL;
    }

    public function getOwner() : string {
        return $this->owner;
    }
}
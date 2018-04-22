<?php

namespace DesignPattern\Sample\FactoryMethod\IDCard;

use DesignPattern\Sample\FactoryMethod\Framework\Factory;
use DesignPattern\Sample\FactoryMethod\Framework\Product;

class IDCardFactory extends Factory {

    private $owners = [];

    protected function createProduct(string $owner): Product {
        return new IDCard($owner);
    }

    protected function registerProduct(Product $product): void {
        array_push($this->owners, $product);
    }

    public function getOwners() {
        return $this->owners;
    }
}
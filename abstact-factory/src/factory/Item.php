<?php

namespace DesignPattern\Sample\AbstractFactory;

abstract class Item {
    protected $caption;

    public function __construct(string $caption) {
        $this->caption = $caption;
    }

    public abstract function makeHTML();
}
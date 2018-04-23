<?php

namespace DesignPattern\Sample\Prototype;

interface Product {
    public function use(string $s);
    public function createClone();
}
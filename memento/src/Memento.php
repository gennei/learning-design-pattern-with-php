<?php

namespace DesignPattern\Sample\Memento;

class Memento {

    private $money;
    private $fruits;

    public function __construct($money) {
        $this->money = $money;
        $this->fruits = [];
    }

    public function getMoney() : int {
        return $this->money;
    }

    public function addFriut(string $fruit) {
        $this->fruits[] = $fruit;
    }

    public function getFriuts() {
        return $this->fruits;
    }
}

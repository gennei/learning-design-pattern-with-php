<?php

namespace DesignPattern\Sample\Observer;

class RandomNumberGenerator extends NumberGenerator {

    private $number;

    public function getNumber(): int {
        return $this->number;
    }

    public function execute() {

        foreach (range(0, 20) as $i) {
            $this->number = random_int(0, $i);
            $this->notifyObservers();
        }
    }
}

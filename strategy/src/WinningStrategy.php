<?php

namespace DesignPattern\Sample\Strategy;

class WinningStrategy implements Strategy {

    private $win = false;
    private $prev_hand;

    public function __construct() {
    }

    public function nextHand() {
        if (!$this->win) {
            $this->prev_hand = Hand::getHand(rand(0, 2));
        }
        return $this->prev_hand;
    }

    public function study(bool $win) {
        $this->win;
    }
}
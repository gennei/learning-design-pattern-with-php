<?php

namespace DesignPattern\Sample\Strategy;

class Player {

    private $name;
    private $strategy;
    private $wincount  = 0;
    private $losecount = 0;
    private $gamecount = 0;

    public function __construct($name, Strategy $strategy) {
        $this->name = $name;
        $this->strategy = $strategy;
    }

    public function nextHand() : Hand {
        return $this->strategy->nextHand();
    }

    public function win() {
        $this->strategy->study(true);
        $this->wincount += 1;
        $this->gamecount += 1;
    }

    public function lose() {
        $this->strategy->study(false);
        $this->losecount += 1;
        $this->gamecount += 1;
    }

    public function even() {
        $this->gamecount += 1;
    }

    public function __toString() {
        return "[ {$this->name}: {$this->gamecount} games, {$this->wincount} win, {$this->losecount} lose ]";
    }
}
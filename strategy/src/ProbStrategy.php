<?php

namespace DesignPattern\Sample\Strategy;

class ProbStrategy implements Strategy {

    private $random;
    private $prev_hand_value    = 0;
    private $current_hand_value = 0;

    private $history = [
        [1, 1, 1,],
        [1, 1, 1,],
        [1, 1, 1,],
    ];

    public function __construct($seed) {
    }

    public function nextHand() {
        $bet = $this->getSum($this->current_hand_value);
        if ($bet < $this->history[$this->current_hand_value][0]) {
            $hand_value = 0;
        } elseif ($bet < $this->history[$this->current_hand_value][0] + $this->history[$this->current_hand_value][1]) {
            $hand_value = 1;
        } else {
            $hand_value = 2;
        }

        $this->prev_hand_value    = $this->current_hand_value;
        $this->current_hand_value = $hand_value;
        return Hand::getHand($hand_value);
    }

    private function getSum($hv) {
        $sum = 0;
        for ($i = 0; $i < 3; $i++) {
            $sum += $this->history[$hv][$i];
        }
        return $sum;
    }

    public function study(bool $win) {
        if ($win) {
            $this->history[$this->prev_hand_value][$this->current_hand_value] += 1;
        } else {
            $this->history[$this->prev_hand_value][($this->current_hand_value + 1) % 3] += 1;
            $this->history[$this->prev_hand_value][($this->current_hand_value + 2) % 3] += 1;
        }
    }
}

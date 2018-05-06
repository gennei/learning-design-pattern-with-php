<?php

namespace DesignPattern\Sample\Strategy;

class Hand {

    const HAND_VALUE_GUU = 0;
    const HAND_VALUE_CHO = 1;
    const HAND_VALUE_PAA = 2;

    const NAME = [
        "グー",
        "チョキ",
        "パー",
    ];

    public static $hand_value;
    private static $hand;

    private function __construct(int $hand_value) {
        self::$hand_value = $hand_value;
    }

    public static function getHand(int $hand_value) : Hand {
        self::$hand = [
            new Hand(self::HAND_VALUE_GUU),
            new Hand(self::HAND_VALUE_CHO),
            new Hand(self::HAND_VALUE_PAA),
        ];
        return self::$hand[$hand_value];
    }

    public function isStrongerThan(Hand $hand) {
        return $this->fight($hand) == 1;
    }

    public function isWeakerThan(Hand $hand) {
        return $this->fight($hand) == -1;
    }

    private function fight(Hand $h) {
        var_dump(self::$hand_value);
        var_dump($h::$hand_value);
        if (self::$hand_value = $h::$hand_value) {
            return 0;
        }
        if ((self::$hand_value + 1) %3 == $h::$hand_value) {
            return 1;
        }

        return -1;
    }

    public function __toString() {
        return (string)self::NAME[self::$hand_value];
    }
}
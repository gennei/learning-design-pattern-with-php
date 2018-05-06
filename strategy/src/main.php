<?php

require_once "Hand.php";
require_once "Strategy.php";
require_once "WinningStrategy.php";
require_once "ProbStrategy.php";
require_once "Player.php";

$player1 = new \DesignPattern\Sample\Strategy\Player("Taro", new \DesignPattern\Sample\Strategy\WinningStrategy(1));
$player2 = new \DesignPattern\Sample\Strategy\Player("Hanako", new \DesignPattern\Sample\Strategy\WinningStrategy(2));

foreach (range(1, 2) as $i) {
    $next_hand1 = $player1->nextHand();
    $next_hand2 = $player2->nextHand();
    var_dump($next_hand1::$hand_value);
    if ($next_hand1->isStrongerThan($next_hand2)) {
        echo "Winner; {$player1}" . PHP_EOL;
        $player1->win();
        $player2->lose();
    } elseif ($next_hand2->isStrongerThan($next_hand1)) {
        echo "Winner; {$player2}" . PHP_EOL;
        $player1->lose();
        $player2->win();
    } else {
        echo "Even..." . PHP_EOL;
        $player1->even();
        $player2->even();
    }
}

echo "Total result:" . PHP_EOL;
echo $player1 . PHP_EOL;
echo $player2 . PHP_EOL;

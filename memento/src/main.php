<?php

require_once "Memento.php";
require_once "Gamer.php";

$gamer = new \DesignPattern\Sample\Memento\Gamer(100);
$memento = $gamer->createMemento();
foreach (range(0, 100) as $i) {
    echo "==== {$i}" . PHP_EOL;
    echo "現状: {$gamer}" .  PHP_EOL;
    $gamer->bet();
    echo "所持金は {$gamer->getMoney()} 円になりました！" . PHP_EOL;
    if ($gamer->getMoney() > $memento->getMoney()) {
        echo "(だいぶ増えたので、現在の状態を保存しておこう。)" . PHP_EOL;
        $memento = $gamer->createMemento();
    } elseif ($gamer->getMoney() < $memento->getMoney() / 2) {
        echo "(だいぶ減ったので、以前の状態に復帰しよう。)" . PHP_EOL;
        $gamer->restoreMemento($memento);
    }

    sleep(2);
}

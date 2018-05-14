<?php

namespace DesignPattern\Sample\Memento;

class Gamer {

    private $money;
    private $fruits = [];
    private static $fruitsname = [
        "リンゴ", "ぶどう", "バナナ", "みかん",
    ];

    public function __construct(int $money) {
        $this->money = $money;
    }

    public function getMoney() : int {
        return $this->money;
    }

    public function bet() {

        $dice = rand(1, 6);
        if ($dice === 1) {
            $this->money += 100;
        } elseif ($dice === 2) {
            $this->money = (int)($this->money / 2);
        } elseif ($dice === 6) {
            $f = $this->getFruit();
            echo "フルーツ({$f})をもらいました。" . PHP_EOL;
            $this->fruits[] = $f;
        } else {
            echo "なにもおこりませんでした" . PHP_EOL;
        }
    }

    // スナップショット作成
    public function createMemento() : Memento {
        $m = new Memento($this->money);
        foreach ($this->fruits as $fruit) {
            if (strpos($fruit, "おいしい") === 0) {
                $m->addFriut($fruit);
            }
        }
        return $m;
    }

    public function restoreMemento(Memento $memento) {
        $this->money = $memento->getMoney();
        $this->fruits = $memento->getFriuts();
    }

    public function __toString() {
        return "[money = {$this->money}, fruits = " . implode(",", $this->fruits) . "]";
    }

    private function getFruit() : string {
        $prefix = "";
        if (rand(0, 1) === 0) {
            $prefix = "おいしい";
        }
        return $prefix . self::$fruitsname[rand(0, count(self::$fruitsname) - 1)];
    }
}

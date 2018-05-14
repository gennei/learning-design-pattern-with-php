<?php

namespace DesignPattern\Sample\Observer;

class GraphObserver implements Observer {

    public function update(NumberGenerator $generator) {
        echo "GraphObserver:" . str_repeat("*", $generator->getNumber()) . PHP_EOL;
        sleep(5);
    }
}

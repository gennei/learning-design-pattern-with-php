<?php

namespace DesignPattern\Sample\Observer;


class DigitObserver implements Observer {

    public function update(NumberGenerator $generator) {
        echo "DigitObserver:" . $generator->getNumber() . PHP_EOL;
        sleep(5);
    }
}

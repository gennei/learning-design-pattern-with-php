<?php

namespace DesignPattern\Sample\Observer;

abstract class NumberGenerator {

    /** @var Observer[] */
    private $observers = [];

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function deleteObserver($observer) {
        // TODO
    }

    public function notifyObservers() {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public abstract function getNumber() : int;
    public abstract function execute();
}

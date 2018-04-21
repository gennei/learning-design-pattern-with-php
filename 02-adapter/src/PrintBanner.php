<?php

namespace DesignPattern\Sample\Adapter;

class PrintBanner extends Banner implements Printer {

    public function __construct(string $string) {
        parent::__construct($string);
    }

    public function printWeak() {
        $this->showWithParen();
    }

    public function printStrong() {
        $this->showWithAstar();
    }
}
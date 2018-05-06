<?php

namespace DesignPattern\Sample\Decorator;

abstract class Border extends Display {

    protected $display;

    protected function __construct(Display $display) {
        $this->display = $display;
    }
}

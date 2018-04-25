<?php

namespace DesignPattern\Sample\AbstractFactory;

abstract class Tray extends Item {

    /** @var Item[]  */
    protected $tray = [];

    public function __construct(string $caption) {
        parent::__construct($caption);
    }

    public function add(Item $item) {
        $this->tray[] = $item;
    }
}
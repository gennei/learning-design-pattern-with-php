<?php

namespace DesignPattern\Sample\AbstractFactory;

abstract class Link extends Item {

    protected $url;

    public function __construct(string $caption, string $url) {
        parent::__construct($caption);
        $this->url = $url;
    }
}
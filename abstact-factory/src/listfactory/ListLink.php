<?php

namespace DesignPattern\Sample\AbstractFactory;

class ListLink extends Link {

    public function __construct(string $caption, string $url) {
        parent::__construct($caption, $url);
    }

    public function makeHTML() {
        return "<li><a href=\"{$this->url}\">{$this->caption}</a></li>" . PHP_EOL;
    }
}
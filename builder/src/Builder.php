<?php

namespace DesignPattern\Sample\Builder;

abstract class Builder {
    public abstract function makeTitle(string $title);
    public abstract function makeString(string $string);
    public abstract function makeItems(array $items);
    public abstract function close();
}
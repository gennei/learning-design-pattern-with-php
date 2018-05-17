<?php

namespace DesignPattern\Sample\Interpretar;

abstract class Node {
    abstract public function parse(Context $context);
}

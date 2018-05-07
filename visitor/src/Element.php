<?php

namespace DesignPattern\Sample\Visitor;

interface Element {
    public function accept(Visitor $v);
}
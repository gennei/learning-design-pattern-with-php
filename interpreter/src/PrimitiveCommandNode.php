<?php

namespace DesignPattern\Sample\Interpretar;

class PrimitiveCommandNode extends Node {

    private $name;

    public function parse(Context $context) {
        $this->name = $context->currentToken();
        $context->skipToken($this->name);
        if (!in_array($this->name, ["go", "right", "left"])) {
            throw new \Exception("");
        }
    }

    public function __toString() {
        return (string)$this->name;
    }
}

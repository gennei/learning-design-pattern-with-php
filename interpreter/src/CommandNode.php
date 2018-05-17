<?php

namespace DesignPattern\Sample\Interpretar;

class CommandNode extends Node {

    /** @var Node */
    private $node;

    public function parse(Context $context) {
        if ($context->currentToken() === "repeat") {
            $this->node = new RepeatCommandNode();
            $this->node->parse($context);
        } else {
            $this->node = new PrimitiveCommandNode();
            $this->node->parse($context);
        }
    }

    public function __toString() {
        return (string)$this->node;
    }
}

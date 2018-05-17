<?php

namespace DesignPattern\Sample\Interpretar;

class RepeatCommandNode extends Node {

    private $number;
    private $command_list_node;

    public function parse(Context $context) {
        $context->skipToken("repeat");
        $this->number = $context->currentNumber();
        $context->nextToken();
        $this->command_list_node = new CommandListNode();
        $this->command_list_node->parse($context);
    }

    public function __toString() {
        return "[repeat {$this->number} {$this->command_list_node}]";
    }
}

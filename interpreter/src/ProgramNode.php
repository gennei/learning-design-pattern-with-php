<?php

namespace DesignPattern\Sample\Interpretar;

class ProgramNode extends Node {

    /** @var Node */
    private $command_list_node;

    public function parse(Context $context) {
        $context->skipToken("program");
        $this->command_list_node = new CommandListNode();
        $this->command_list_node->parse($context);
    }

    public function __toString() {
        return "[program {$this->command_list_node}]";
    }
}

<?php

namespace DesignPattern\Sample\Interpretar;

class CommandListNode extends Node {

    /** @var CommandNode[] */
    private $list = [];

    public function parse(Context $context) {
        while (true) {
            if ($context->currentToken() === null) {
                throw new \ErrorException("error");
            } elseif ($context->currentToken() === "end") {
                $context->skipToken("end");
                break;
            } else {
                $command_node = new CommandNode();
                $command_node->parse($context);
                $this->list[] = $command_node;
            }
        }
    }

    public function __toString() {
        return "[" . implode(" ", $this->list) . "]";
    }
}

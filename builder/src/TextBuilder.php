<?php

namespace DesignPattern\Sample\Builder;

class TextBuilder extends Builder {

    private $buffer;

    public function makeTitle(string $title) {
        $this->buffer .= "============================" . PHP_EOL;
        $this->buffer .= "『{$title}』" . PHP_EOL;
        $this->buffer .= PHP_EOL;
    }

    public function makeString(string $string) {
        $this->buffer .= "■{$string}" . PHP_EOL;
        $this->buffer .= PHP_EOL;
    }

    public function makeItems(array $items) {
        foreach ($items as $item) {
            $this->buffer .= " ・{$item}" . PHP_EOL;
        }
        $this->buffer .= PHP_EOL;
    }

    public function close() {
        $this->buffer .= "============================" . PHP_EOL;
    }

    public function getResult() {
        return $this->buffer;
    }
}
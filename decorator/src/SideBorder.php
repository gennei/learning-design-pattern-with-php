<?php

namespace DesignPattern\Sample\Decorator;

class SideBorder extends Border {

    private $border_char;

    public function __construct(Display $display, $ch) {
        parent::__construct($display);
        $this->border_char = $ch;
    }

    public function getColumns(): int {
        return 1 + $this->display->getColumns() + 1;
    }

    public function getRows(): int {
        return $this->display->getRows();
    }

    public function getRowText(int $row): ?string {
        return $this->border_char . $this->display->getRowText($row) . $this->border_char;
    }
}
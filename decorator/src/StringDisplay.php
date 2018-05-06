<?php

namespace DesignPattern\Sample\Decorator;

class StringDisplay extends Display {

    private $string;

    public function __construct(string $string) {
        $this->string = $string;
    }

    public function getColumns(): int {
        return mb_strwidth($this->string, "UTF-8");
    }

    public function getRows(): int {
        return 1;
    }

    public function getRowText(int $row): ?string {
        if ($row === 0) {
            return $this->string;
        }

        return null;
    }
}

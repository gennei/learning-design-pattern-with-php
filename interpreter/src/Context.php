<?php

namespace DesignPattern\Sample\Interpretar;

class Context {

    private $current_token;

    public function __construct(string $text) {
        $this->current_token = strtok($text, " ");
    }

    public function nextToken() : ?string {
        $this->current_token = strtok(" ");
        if ($this->current_token === false) {
            $this->current_token = null;
        }

        return $this->current_token;
    }

    public function currentToken() : ?string {
        return $this->current_token;
    }

    public function skipToken(string $token) {
        if ($token !== $this->current_token) {
            var_dump("Warning {$token} is expected. but {$this->current_token} is found.");
        }
        $this->nextToken();
    }

    public function currentNumber() : int {
        $number = 0;
        return $number;
    }
}

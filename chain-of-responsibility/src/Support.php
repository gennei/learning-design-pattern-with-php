<?php

namespace DesignPattern\Sample\ChainOfResponsibility;

abstract class Support {

    private $name;

    /** @var Support */
    private $next;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function setNext(Support $next) : Support {
        $this->next = $next;
        return $this->next;
    }

    public final function support(Trouble $trouble) {
        if ($this->resolve($trouble)) {
            $this->done($trouble);
        } elseif ($this->next != null) {
            $this->next->support($trouble);
        } else {
            $this->fail($trouble);
        }
    }

    protected abstract function resolve(Trouble $trouble) : bool;
    protected function done(Trouble $trouble) {
        echo "{$trouble} is resolved by {$this}" . PHP_EOL;
    }

    protected function fail(Trouble $trouble) {
        echo "{$trouble} cannot be resolved" . PHP_EOL;
    }

    public function __toString() {
        return "[ {$this->name} ]";
    }
}

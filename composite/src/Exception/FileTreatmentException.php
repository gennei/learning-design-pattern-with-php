<?php

namespace DesignPattern\Sample\Composite\Exception;

class FileTreatmentException extends \RuntimeException {

    public function __construct(string $message) {
        parent::__construct($message);
    }
}
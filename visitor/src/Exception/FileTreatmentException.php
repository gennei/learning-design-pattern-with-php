<?php

namespace DesignPattern\Sample\Visitor\Exception;

class FileTreatmentException extends \Exception {

    public function __construct(string $message = "") {
        parent::__construct($message);
    }
}
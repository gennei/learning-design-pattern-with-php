<?php

namespace DesignPattern\Sample\Facade\File;

class Writer {

    private $fp;

    public function __construct($path) {
        $this->fp = fopen($path, "w+");
    }

    public function write(string $msg) {
        fwrite($this->fp, $msg);
    }

    public function close() {
        fclose($this->fp);
    }
}

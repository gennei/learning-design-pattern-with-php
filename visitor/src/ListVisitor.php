<?php

namespace DesignPattern\Sample\Visitor;

class ListVisitor extends Visitor {

    private $current_dir = "";

    public function visit($file) {
        if ($file instanceof File) {
            echo "{$this->current_dir}/{$file}" . PHP_EOL;
        } elseif ($file instanceof Directory) {
            $directory = $file;
            echo "{$this->current_dir}/{$directory}" . PHP_EOL;
            $save_dir           = $this->current_dir;
            $this->current_dir = $this->current_dir . "/" . $directory->getName();
            foreach ($directory->getDir() as $v) {
                $v->accept($this);
            }
            $this->current_dir = $save_dir;
        } else {
            echo "else..." . PHP_EOL;
        }
    }
}
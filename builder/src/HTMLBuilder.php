<?php

namespace DesignPattern\Sample\Builder;

class HTMLBuilder extends Builder {

    private $filename;
    private $writer;

    public function makeTitle(string $title) {
        $this->filename = "{$title}.html";

        $this->writer .= "<html>";
        $this->writer .= "<head><title>{$title}</title></head>";
        $this->writer .= "<body>";
        $this->writer .= "<h1>{$title}</h1>";
    }

    public function makeString(string $string) {
        $this->writer .= "<p>{$string}</p>";
    }

    public function makeItems(array $items) {
        $this->writer .= "<ul>";
        foreach ($items as $item) {
            $this->writer .= "<li>{$item}</li>";
        }
        $this->writer .= "</ul>";
    }

    public function close() {
        $this->writer .= "</body></html>";
//        file_put_contents($this->filename, $this->writer);
    }

    public function getResult() {
        return $this->filename;
    }
}
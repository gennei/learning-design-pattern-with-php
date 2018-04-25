<?php

namespace DesignPattern\Sample\AbstractFactory;

class ListPage extends Page {

    public function __construct(string $title, string $author) {
        parent::__construct($title, $author);
    }

    public function makeHTML() {
        $buffer = "";
        $buffer .= "<html>" . PHP_EOL;
        $buffer .= "<head><title>{$this->title}</title></head>" . PHP_EOL;
        $buffer .= "<body>" . PHP_EOL;
        $buffer .= "<h1>{$this->title}</h1>";
        $buffer .= "<ul>";
        foreach ($this->content as $item) {
            $buffer .= $item->makeHTML();
        }
        $buffer .= "</ul>";
        $buffer .= "<hr>";
        $buffer .= "<address>{$this->author}</address>";
        $buffer .= "</body>" . PHP_EOL;
        $buffer .= "</html>";

        return $buffer;
    }
}
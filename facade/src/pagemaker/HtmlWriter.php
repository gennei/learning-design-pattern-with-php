<?php

namespace DesignPattern\Sample\Facade;

use DesignPattern\Sample\Facade\File\Writer;

class HtmlWriter {

    /** @var Writer */
    private $writer;

    public function __construct(Writer $writer) {
        $this->writer = $writer;
    }

    public function title(string $title) {
        $this->writer->write("<html>");
        $this->writer->write("<head>");
        $this->writer->write("<meta charset=\"utf-8\"/>");
        $this->writer->write("<title>{$title}</title>");
        $this->writer->write("</head>");
        $this->writer->write("<body>\n");
        $this->writer->write("<h1>{$title}</h1>\n");
    }

    public function paragraph(string $msg) {
        $this->writer->write("<p>{$msg}</p>\n");
    }

    public function link(string $href, string $caption) {
        $this->paragraph("<a href=\"{$href}\">{$caption}</a>");
    }

    public function mailto(string $mailaddr, string $username) {
        $this->link("mailto:{$mailaddr}", $username);
    }

    public function close() {
        $this->writer->write("</body>");
        $this->writer->write("</html>\n");
        $this->writer->close();
    }
}

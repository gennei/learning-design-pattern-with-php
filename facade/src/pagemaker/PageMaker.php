<?php

namespace DesignPattern\Sample\Facade;

use DesignPattern\Sample\Facade\File\Writer;

class PageMaker {

    private function __construct() {
    }

    public static function makeWelcomePage(string $mailaddr, string $filename) {
        $mailprop = Database::getProperties("maildata");
        $username = $mailprop[$mailaddr];

        $writer = new HtmlWriter(new Writer($filename));
        $writer->title("Welcome to {$username} 's page");
        $writer->paragraph("{$username}のページへようこそ");
        $writer->paragraph("メールまってますね");
        $writer->mailto($mailaddr, $username);
        $writer->close();
        echo "{$filename} is created for {$mailaddr} ({$username})" . PHP_EOL;
    }
}

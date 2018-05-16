<?php

class Printer implements Printable {

    private $name;

    public function __construct(string $name) {

        if ($name === null) {
            $this->heavyJob("Printerのインスタンスを生成中。");
        } else {
            $this->name = $name;
            $this->heavyJob("Printerのインスタンス{$name}を生成中。");
        }
    }

    public function setPrinterName(string $name) {
        $this->name = $name;
    }

    public function getPrinterName(): string {
        return $this->name;
    }

    public function print(string $string) {
        echo "==={$this->name}===" . PHP_EOL;
        echo $string . PHP_EOL;
    }

    private function heavyJob(string $msg) {
        echo $msg;

        foreach (range(0, 5) as $i) {
            sleep(10);
            echo ".";
        }

        echo "完了。" . PHP_EOL;
    }
}

<?php

namespace DesignPattern\Sample\Adapter;

// 本来のサンプルコードは print であるが、予約後なので変更している
interface Printer {
    public function printWeak();
    public function printStrong();
}
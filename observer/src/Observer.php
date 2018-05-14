<?php

namespace DesignPattern\Sample\Observer;

interface Observer {
    public function update(NumberGenerator $generator);
}

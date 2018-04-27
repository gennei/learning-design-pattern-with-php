<?php

namespace DesignPattern\Sample\Bridge;

abstract class DisplayImpl {
    public abstract function rawOpen();
    public abstract function rawPrint();
    public abstract function rawClose();
}
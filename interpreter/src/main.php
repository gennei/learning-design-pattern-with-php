<?php

require_once "Node.php";
require_once "Context.php";
require_once "CommandListNode.php";
require_once "CommandNode.php";
require_once "PrimitiveCommandNode.php";
require_once "ProgramNode.php";
require_once "RepeatCommandNode.php";

$path = dirname(__FILE__) . "/data/program.txt";
$data = file_get_contents($path);
foreach (explode("\n", $data) as $row) {
    if ($row === "") { continue; }
    echo "text = " . $row . PHP_EOL;
    $node = new \DesignPattern\Sample\Interpretar\ProgramNode();
    $node->parse(new \DesignPattern\Sample\Interpretar\Context($row));
    echo "node = {$node}" . PHP_EOL;
}


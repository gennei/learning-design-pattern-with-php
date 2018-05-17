<?php

$string = "program go end";
$token = strtok($string, " ");
echo $token . PHP_EOL;
echo strtok(" ") . PHP_EOL;
echo strtok($token) . PHP_EOL;
echo strtok($token) . PHP_EOL;
//while ($token !== false) {
//    echo $token . PHP_EOL;
//    $token = strtok($token);
//}

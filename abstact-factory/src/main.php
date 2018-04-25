<?php
foreach (glob(__DIR__ . "/factory/*.php") as $file) {
    require_once "{$file}";
}
foreach (glob(__DIR__ . "/listfactory/*.php") as $file) {
    require_once "{$file}";
}

$input = "ListFactory";
$factory = \DesignPattern\Sample\AbstractFactory\Factory::getFactory($input);

$asahi = $factory->createLink("朝日新聞", "https://www.asahi.com/");
$yomiuri = $factory->createLink("読売新聞", "http://www.yomiuri.co.jp/");

$us_yahoo = $factory->createLink("Yahoo!", "https://www.yahoo.com");
$jp_yahoo = $factory->createLink("YahooJapan!", "https://www.yahoo.co.jp");
$excite   = $factory->createLink("Excite!", "https://www.excite.com");
$google   = $factory->createLink("Google", "https://www.google.com");

$traynews = $factory->createTray("新聞");
$traynews->add($asahi);
$traynews->add($yomiuri);

$traysearch = $factory->createTray("サーチエンジン");
$traysearch->add($us_yahoo);
$traysearch->add($jp_yahoo);
$traysearch->add($excite);
$traysearch->add($google);

$page = $factory->createPage("Link Page", "結城浩");
$page->add($traynews);
$page->add($traysearch);

$page->output();
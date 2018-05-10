<?php

require_once "Writer.php";
require_once "pagemaker/Database.php";
require_once "pagemaker/HtmlWriter.php";
require_once "pagemaker/PageMaker.php";

\DesignPattern\Sample\Facade\PageMaker::makeWelcomePage("hyuki@hyuki.com", "Welcom.html");

<?php
//print __DIR__;die();
require __DIR__.'/../../../autoload.php';

$classLoader = new \Composer\Autoload\ClassLoader();
$classLoader->addPsr4("Skybluesofa\\OnThisDayTest\\", __DIR__, true);
$classLoader->register();
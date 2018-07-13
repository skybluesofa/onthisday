<?php
require __DIR__.'/../../../../vendor/autoload.php';

$classLoader = new \Composer\Autoload\ClassLoader();
$classLoader->addPsr4("Skybluesofa\\OnThisDayTest\\", __DIR__, true);
$classLoader->register();
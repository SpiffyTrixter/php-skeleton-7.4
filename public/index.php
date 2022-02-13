<?php

if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

if (file_exists(__DIR__ . '/../config/local.php')) {
    $config = require_once __DIR__ . '/../config/local.php';
}

$hello = new \Skeleton\Hello();
echo $hello->sayHello();

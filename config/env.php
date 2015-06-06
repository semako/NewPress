<?php

require __DIR__ . '/../vendor/autoload.php';
(new \Dotenv\Dotenv(__DIR__ . '/..'))->load();

define('YII_DEBUG', getenv('APP_DEBUG'));
define('YII_ENV', getenv('APP_ENV'));
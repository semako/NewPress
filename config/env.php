<?php
/**
 * Env config file
 *
 * @link https://github.com/semako/NewPress
 * @copyright 2015 Semen Kotliarenko <semako.ua@gmail.com>
 * @author Semen Kotliarenko <semako.ua@gmail.com>
 * @version 1.0.0
 * @filesource
 */

require __DIR__ . '/../vendor/autoload.php';
(new \Dotenv\Dotenv(__DIR__ . '/..'))->load();

define('YII_DEBUG', getenv('APP_DEBUG') === 'true');
define('YII_ENV', getenv('APP_ENV'));
define('INSTALLED', getenv('INSTALLED') === 'true');

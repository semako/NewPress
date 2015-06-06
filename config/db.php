<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => getenv('SQL_SCHEMA') . ':host=' . getenv('SQL_HOST') . ';dbname=' . getenv('SQL_DB'),
    'username' => getenv('SQL_USER'),
    'password' => getenv('SQL_PASSWORD'),
    'charset' => getenv('SQL_CHARSET'),
];

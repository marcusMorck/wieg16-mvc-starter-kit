<?php

return $config = [
    'host' => 'localhost',
    'db' => 'mm_music',
    'user' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'options' => [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false]
];

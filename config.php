<?php

return [
    'database' => [
        'host' => 'localhost',
        'dbname' => 'website',
        'port' => '3306',
        'charset' => 'utf8mb4',
    ],
    'api'=> [
        'token'=>'jiirjiregirgje'
    ],
    'base_dir'=>__DIR__,
    'base_views'=>__DIR__."\\views",
    'base_url'=>(!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/'
];

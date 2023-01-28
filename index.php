<?php
// آرایه های پیوندی
// Associative-Arrays
$urls = [
    [
        'name' => 'php',
        'url'  => 'https://www.php.net/',
        'author' => 'john doe',
        'created_at' => 1391
    ],
    [
        'name' => 'python',
        'url'  => 'https://www.python.org/',
        'author' => 'jane doe',
        'created_at' => 1381
    ],
    [
        'name' => 'iran laravel',
        'url'  => 'https://iranlaravel.ir/',
        'author' => 'hamid shah mohammadi',
        'created_at' => 1385
    ],

];

$filterUrls = array_filter($urls, function ($url) {
    return $url['created_at'] > 1380;
});

// include
// include_once
// require_once
require "index.view.php";
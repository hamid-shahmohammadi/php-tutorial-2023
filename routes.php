<?php

$routes=[
    "/"=>"controller/index.php",
    "/about"=>"controller/about.php",
    "/posts"=>"controller/post/index.php",
    "/post"=>"controller/post/show.php",
    "/post/create"=>"controller/post/create.php",
];


routeCheck($routes);
<?php

// return [
//     "/"=>"controller/index",
//     "/about"=>"controller/about",
//     "/posts"=>"controller/post/index",
//     "/post"=>"controller/post/show",
//     "/post/create"=>"controller/post/create",
// ];

$router->get('/',"controller/index");
$router->get('/posts',"controller/post/index");
$router->get('/post',"controller/post/show");
$router->get('/post/create',"controller/post/create");
// $router->post('/post/store',"controller/post/store");
// $router->delete('/post',"controller/post/destroy");
$router->get('/about',"controller/about");



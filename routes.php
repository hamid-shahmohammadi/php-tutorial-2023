<?php

$router->get('/',"controller/index");
$router->get('/posts',"controller/post/index");
$router->get('/post',"controller/post/show");
$router->get('/post/create',"controller/post/create");
$router->post('/post/store',"controller/post/store");
$router->get('/post/edit',"controller/post/edit");
$router->patch('/post/update',"controller/post/update");
$router->delete('/post',"controller/post/destroy");
$router->get('/about',"controller/about");



<?php

session_start();

use Core\Router;

const BASE_DIR=__DIR__."/../";

require BASE_DIR."/Core/helper.php";

spl_autoload_register(function($class){
    
    $class=str_replace('\\','/',$class);
    
    
    require base_path($class);
});


$router=new Router();
require base_path('routes');

$uri=parse_url($_SERVER['REQUEST_URI'])['path'];
$method= $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri,$method);












<?php
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
function checkUri($url){
    return $_SERVER['REQUEST_URI'] == $url;
}

function activeLink($url){
    return checkUri($url) ? 'bg-white text-black' : 'bg-gray-900 text-white';
}

function abort($code = 404){ 
    http_response_code($code);  
    require_once "views/$code.php";
    die();
}

function routeCheck($routes){ 
    $url=parse_url($_SERVER['REQUEST_URI']);    
    if(array_key_exists($url['path'],$routes)){        
        require_once $routes[$url['path']];        
    }else{
        abort();
    }    
}

function athorize($condition,$status=Response::FORBIDDEN)
{
    if(!$condition){
        abort($status);        
    }
}

<?php
$routes=require base_path('routes');
// dd($routes);

$url=parse_url($_SERVER['REQUEST_URI']);    
if(array_key_exists($url['path'],$routes)){ 
    // dd(base_path($routes[$url['path']]));              
    require base_path($routes[$url['path']]);        
}else{
    abort();
}
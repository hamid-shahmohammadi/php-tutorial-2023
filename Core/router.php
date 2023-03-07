<?php
$routes=require base_path("routes");


$url=parse_url($_SERVER['REQUEST_URI']);
       
    if(array_key_exists($url['path'],$routes)){ 
              
        require base_path($routes[$url['path']]);        
    }else{
        abort();
    }    
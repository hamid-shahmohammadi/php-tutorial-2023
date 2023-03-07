<?php
session_start();

use Core\Response;
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



function athorize($condition,$status=Response::FORBIDDEN)
{
    if(!$condition){
        abort($status);        
    }
}

function url($path){
    $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    return $root.$path;
}

function base_path($path){
    return BASE_PATH.$path.'.php';
}

function view($path,$attr=[]){
    extract($attr);
    require BASE_PATH.'views/'.$path.'.view.php';
}

// cross site request forgery
function csrf(){
    $_SESSION["token"]= bin2hex(random_bytes(32));
    return $_SESSION["token"];
}



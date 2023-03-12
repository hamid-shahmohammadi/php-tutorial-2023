<?php

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
    require_once base_path("views/$code");
    die();
}



function autorize($condition,$status=Response::FORBIDDEN)
{
    if($condition){
        abort($status);
    }
}

function url($path){
    $config=require base_path('config');
    return $config['base_url'].$path;
}

function base_dir($path){    
    require BASE_DIR.$path.".php";
}
function base_path($path){   
    
    return BASE_DIR.$path.".php";
}

function view($path,$attr=[]){
    extract($attr);
    require BASE_DIR."/views/".$path.".view.php";
}

function csrf(){
    $_SESSION["token"]=bin2hex(random_bytes(32));
    return $_SESSION["token"];
}

function checkToken($post_token,$session_token){

    if (!isset($post_token) || !isset($session_token)) {
        return false;
    } elseif ($post_token != $session_token) {
        return false;
    }else{
        return true;
    }
}

function now(){
    date_default_timezone_set('Asia/Tehran');
    $date = date('Y-m-d H:i:s');
    return $date;
}

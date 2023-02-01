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
<?php



const BASE_PATH = __DIR__.'/../';

require BASE_PATH."core/helper.php";

spl_autoload_register(function($class){
    // dd($class);
    // core\Database
    $class=str_replace('\\','/',$class);
   
    require base_path($class);
});

require base_path("core/router");




<?php
const BASE_DIR=__DIR__."/../";

require BASE_DIR."/Core/helper.php";

spl_autoload_register(function($class){
    
    $class=str_replace('\\','/',$class);
    
    
    require base_path($class);
});


require base_path('Core\router');









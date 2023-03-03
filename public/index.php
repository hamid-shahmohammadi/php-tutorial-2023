<?php
const BASE_DIR=__DIR__."\..\\";

require BASE_DIR."helper.php";

spl_autoload_register(function($class){
   
    require base_path('core/'.$class);
});


base_dir('routes');









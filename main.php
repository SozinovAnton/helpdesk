<?php
    ini_set("default_charset","utf-8");
    ini_set('max_execution_time', 120);
    include_once('conf.php');

    function autoload($class) {
        $class = str_replace('_','/',$class) . '.php';
        if (file_exists($class)) {
            include_once($class);
        }
        else {
            echo 'не знаю такого класса';
        }
    }
    spl_autoload_register('autoload');

    Route::start($_SERVER['REQUEST_URI']);
?>
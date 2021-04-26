<?php
    ini_set("default_charset","utf-8");
    ini_set('max_execution_time', 120);
    include_once('conf.php');

    function getFilePath($zipPath) {
        $tmp = preg_match_all('/([A-Z][a-z]+)/', $zipPath, $unzipPath, PREG_PATTERN_ORDER);
        
        if (isset($unzipPath[0][1])){
            $filePath = mb_strtolower($unzipPath[0][0] . '/' . $unzipPath[0][1] . '.php');
        } else {
            $filePath = $unzipPath[0][0] . '.php';
        }
        return $filePath;
    }

    function autoload($class) {
        $class = getFilePath($class);
        
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
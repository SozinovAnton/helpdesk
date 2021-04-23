<?php
    #база данных
    define('SERV','localhost');
    define('USER','root');
    define('PASS','');
    define('BASE','halpdesk');

    #определение путей
    define('DIR', pathinfo($_SERVER['SCRIPT_FILENAME'], PATHINFO_DIRNAME) . '/');
    define('SCHEME', (is_null($_SERVER['REQUEST_SCHEME']) ? 'http' : $_SERVER['REQUEST_SCHEME'] . '://' ));
    define('PORT',$_SERVER['SERVER_PORT'] != 80 ? ':'.$_SERVER['SERVER_PORT'] : '');
    define('DOMEN',$_SERVER['SERVER_NAME'].PORT);
    define('SUBDOMEN',str_replace('/main.php','',$_SERVER['SCRIPT_NAME']) . '/');
    define('MAIN',SCHEME . DOMEN . SUBDOMEN);

    #определение контрольных констант
    define('TEST', TRUE);
    define('IS_AJAX',isset($_SERVER['HTTP_X_REQUESTED_WITH']));
    define('IS_GET',$_SERVER['REQUEST_METHOD'] == 'GET');
    define('IS_POST',$_SERVER['REQUEST_METHOD'] == 'POST');
    define('IS_PUT',$_SERVER['REQUEST_METHOD'] == 'PUT');
    define('IS_DELETE',$_SERVER['REQUEST_METHOD'] == 'DELETE');

    #основная секция
    define('MODEL', DIR . 'model/');
    define('CONTROLLER', DIR . 'controller/');
    define('VIEW', DIR . 'view/');
    define('LOG', DIR . 'log/');
    define('ERROR', DIR . 'error/');
    define('CSS', MAIN . 'css/');
    define('JS', MAIN . 'js/');
    define('IMG', MAIN . 'img/');
    define('FONT', MAIN . 'font/');
    define('AJAX', MAIN . 'ajax/');

    setlocale(LC_ALL,'rus_rus');
    date_default_timezone_set('Europe/Moscow');
?>
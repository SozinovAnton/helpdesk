<?php
    class Route {
        private static $patterns = array (
            '#^'.SUBDOMEN.'(main)()()/#',
        );

        public static function start($url){
            foreach (self::$patterns as $pattern) {
                if (preg_match($pattern,$url,$info)) {
                    $class = 'controller_'.$info[1];
                    $method = $info[2];
                }
            }

            if (isset($class)){
                $class::main($method);
            }
            else {
                echo 'нет такого класса';
            }
        }
    }
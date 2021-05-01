<?php
    class Route {
        private static $patterns = array (
            '#^'.SUBDOMEN.'(task)/(board)/#',
        );

        public static function start($url){
            foreach (self::$patterns as $pattern) {
                if (preg_match($pattern,$url,$info)) {
                    $class = 'Controller' . ucfirst($info[1]);
                    $method = $info[2];
                }
            }

            if (isset($class) && file_exists(getFilePath($class))){
                $object = $class::create();
                $object->prepareContent($method);
            }
            else {
                echo 'нет такого класса';
            }
        }
    }
?>
<?php

    class ControllerTask extends ControllerBase {
        public static function create(){
            if (!(self::$instance instanceof self)) {
                self::$instance = new self();
            }
            return self::$instance;
        }
        private function __construct(){
            //
        }

        public function prepareContent($method) {
            $this->title = 'Test dinamic title';
            switch ($method) {
                case 'scan_report':
                    //self::scan_report();
                    break;
                default:
                    $this->menu();
            }
            
            //echo $this->title;
            $this->renderPage();
        }

        protected function menu() {
            $this->contentBlock = [
                'task/block' => []
            ];
        }
    }
?>
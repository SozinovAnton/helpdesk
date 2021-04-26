<?php
    abstract class ControllerBase {
        protected static $instance;
        protected $title;
        protected $contentBlock = [];
        protected $css = [CSS . 'bootstrap.css']; //CSS . 'style.css', , CSS . 'table.css', CSS . 'button.css', 
        protected $js = [JS . 'bootstrap.js'];
        
        abstract function prepareContent($method);
        
        protected function renderPage() {
            if (!IS_AJAX) {
                $this->render('template/header', ['css' => $this->css, 'js' => $this->js, 'title' => $this->title]);
                foreach ($this->contentBlock as $page => $data) {
                    $this->render($page, $data);
                }
                $this->render('template/footer');
            }
        }

        private function render($page, $data = []){
            extract($data);
            if (preg_match('/([a-z_\/0-9]*)\.?\w*/i', $page, $result)) {
                include_once VIEW . $result[1] . '.html';
            }
        }
    }
?>
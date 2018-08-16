<?php
    ob_start();
    class controller{
        public $model;
        public function __construct(){
            $this->model = new model();
        }
    }
?>
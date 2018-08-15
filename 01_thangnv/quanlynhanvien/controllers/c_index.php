<?php
    class c_index extends controller{
        public function __construct(){
            global $controller;
            parent::__construct();
            include "views/v_index.php";
        }
    }
    new c_index();
?>
<?php
    ob_start();
    class controller{
        public $model;
        public $m_user;
        public function __construct(){
            $this->model = new model();
            $this->m_users = new m_users();
        }
    }
?>
<?php
    ob_start();
    class controller{
        public $model,$m_users,$m_teams;
        public function __construct(){
            $this->model = new model();
            $this->m_users = new m_users();
            $this->m_teams = new m_teams();
        }
    }
?>
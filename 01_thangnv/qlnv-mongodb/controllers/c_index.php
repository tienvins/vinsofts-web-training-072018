<?php
    class c_index extends controller{
        public function __construct(){
            global $controller;
            global $id;
            parent::__construct();
            $count_teams=$this->m_teams->get_count();
            $count_users=$this->m_users->get_count();
            include "views/v_index.php";
        }
    }
    new c_index();
?>
<?php
    class c_index extends controller{
        public function __construct(){
            global $controller;
            global $id;
            parent::__construct();
            $count_teams=$this->model->get_num_rows("select * from teams");
            $count_users=$this->model->get_num_rows("select * from users");
            include "views/v_index.php";
        }
    }
    new c_index();
?>
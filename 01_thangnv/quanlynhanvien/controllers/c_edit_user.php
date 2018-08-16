<?php
    class c_edit_user extends controller{
        public function __construct(){
            parent::__construct();

            include "views/v_edit_user.php";
        }
    }
    new c_edit_user();
?>
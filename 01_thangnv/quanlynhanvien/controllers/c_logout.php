<?php
    class c_logout extends controller{
        public function __construct(){
            parent::__construct();
            $_SESSION["email"]=="";
            include "controllers/c_index.php";
        }
    }
    new c_logout();
?>
<?php
    class c_logout extends controller{
        public function __construct(){
            parent::__construct();
            unset($_SESSION["email"]);
            include "controllers/c_login.php";
        }
    }
    new c_logout();
?>
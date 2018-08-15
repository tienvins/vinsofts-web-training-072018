<?php
    session_start();
    include "config.php";
    include "models/m_db.php";
    include "controllers/controller.php";
    if(isset($_SESSION["email"])){
        $controller = isset($_GET["controller"])?$_GET["controller"]: "";
        $controller = $controller != "" ? "$controller.php" : "";
        include "controllers/c_index.php";
    }
    else{
        include "controllers/c_login.php";
    }
?>
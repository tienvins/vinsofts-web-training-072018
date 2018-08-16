<?php
    session_start();
    include "config.php";
    include "models/model.php";
    include "controllers/controller.php";
    if(isset($_SESSION["email"])){
        $controller = isset($_GET["controller"])?$_GET["controller"]: "";
        $controller = $controller != "" ? "$controller.php" : "";
        if($controller=="c_logout.php"){
            include "controllers/c_logout.php";}
        else{
                include "controllers/c_index.php";
            }
    }
    else{
        include "controllers/c_login.php";
    }
?>
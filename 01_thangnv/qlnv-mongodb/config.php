<?php
    use MongoDB\Client;
    require "drivermongodb/vendor/autoload.php";
    $con= new Client();
    $db= $con->qlnv;
?>

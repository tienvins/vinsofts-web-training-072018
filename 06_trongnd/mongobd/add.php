<?php
    use MongoDB\Client;
    require_once "vendor/autoload.php";
    require "index.php";
    $con = new Client();
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $item       =   $_POST['item'];
        $qty        =   $_POST['qty'];
        $status     =   $_POST['status'];
        $db         =   $con->inventory;
        $coll       =   $db->inventory1a;
        $insert     =   $coll->insertOne(['item'=>$item, '$qyt'=>$qty, 'status'=>$status]);
    }
    header('location:index.php');

?>

   



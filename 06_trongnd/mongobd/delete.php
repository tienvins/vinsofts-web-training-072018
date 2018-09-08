<?php

    include "db.php";
	$db=$con->inventory;
    $coll = $db->inventory1a;
    $id= $_GET['id'];
	$delete= $coll->deleteOne(['_id'=>new MongoDB\BSON\ObjectID($id)]);
	header("location:index.php");
?>
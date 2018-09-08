<?php
    include "db.php";
    require 'index.php';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
		$item 		= $_POST['item'];
		$qty 		= $_POST['qty'];
        $status 	= $_POST['status'];
        $db         = $con->inventory;
        $coll       = $db->inventory1a;
        // $data1= $coll->find(['_id'=> new MongoDB\BSON\ObjectId($id)]);
        $update     = $coll->updateOne(['_id'=>new MongoDB\BSON\ObjectID($_GET['id'])],['$set'=>['item'=>$item, 'qty'=>$qty, 'status'=>$status]]);
        header("location:index.php");
        
    }
    // if (isset($_REQUEST['btEdit'])) {
    //     $coll->updateOne(
    //         ['_id' => new MongoDB\BSON\ObjectId($id)],
    //         ['$set'=>['name'=>$name,'age'=>(int)$age]]
    //     );
    // header('location:.');
?>

<form method="POST" action="update.php">
<table class="table table-bordered col-md-6 ">
    <tr>
        <td>item</td>
        <td>qty</td>
        <td>status</td>
        <td></td>
    </tr>
    <tr>
    <?php 
    $id= $_REQUEST['id'];
    $data1= $coll->find(['_id'=> new MongoDB\BSON\ObjectId($id)])->toArray();
    var_dump();
    ?>
        <td><input type="text" value="<?php echo $data1[0][item] ?>" name="item" /></td>
        <td><input type="number" value="<?php echo $data1[0][qty] ?>" name="qty"/></td>
        <td><input type="text" value="<?php echo  $data1[0][status] ?>" name="status"/></td>
        <td><input type="submit" value="Update"></td>
       
    </tr>
</table>

</form>

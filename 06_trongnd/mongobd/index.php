<?php 
	use MongoDB\Client;
	require "vendor/autoload.php";
	
	$con = new Client();
	$db=$con->inventory;
	$coll = $db->inventory1a;

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$item 		= $_POST['item'];
		$qty 		= $_POST['qty'];
		$status 	= $_POST['status'];
		$insert 	= $coll->insertOne(['item'=>$item,'qty'=>$qty,'status'=>$status]);
		header("location:index.php");
	}
	$iven = $coll->find();
		
	// $id= $_GET['id'];
	// $delete= $coll->deleteOne(['_id'=>new MongoDB\BSON\ObjectID($id)]);
	// // header("location:index.php");

?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Mongo</title>
		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
	<a>ADD</a>
	<form method="POST" action="index.php">
			<input type="text"  name="item" placeholder="Nhập item">
			<input type="number" name="qty" placeholder="Nhập qty">
			<input type="text" name="status" placeholder="Nhập status">
			<button type="submit">Submit</button>
	</form>
	
	
	
	<table class="table table-bordered col-md-6 ">
			<thead>
				<tr>
					<td class="col-md-2">id</td>
					<td class="col-md-2">item</td>
					<td class="col-md-2">qty</td>
					<td class="col-md-2">status</td>
					<td class="col-md-2"></td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($iven as $document): ?>
				<tr>
					<td><?php echo $document["_id"] ?></td>
					<td><?php echo $document["item"] ?> </td>	
					<td><?php echo $document["qty"] ?></td>	
					<td><?php echo $document["status"] ?></td>
					<td>
						<a  href="delete.php?id=<?php echo $document["_id"]; ?>" onclick="return window.confirm('Are you sure');" >Xóa</a>
						<a  href="update.php?id=<?php echo $document["_id"]; ?>"  >Sửa</a>
					</td>		
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	
		
	</body>
	
	</html>

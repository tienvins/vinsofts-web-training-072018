<h1> Home View</h1>
<a href="?controller=user&action=index">USer</a>

<?php 
	$a1="dat";
	$a2="mai";
	$a3="duc";
	$arr= array("'$a1'","'$a2'","'$a3'");
	print_r($arr);
	$str=implode(",", $arr);
	echo $str;

 ?>
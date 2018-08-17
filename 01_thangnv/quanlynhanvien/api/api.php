<?php
require 'restful_api.php';

class api extends restful_api {

	public $model;
	function __construct(){
		parent::__construct();
	}

	function demo_danh_sach_nhan_vien(){
		
		$db = new mysqli('localhost','root','Nvt1904.mysql','qlnv');
		mysqli_set_charset($db,"UTF8");
		$sql     = "select * from  users where id='".$_GET['id']."'" ;
		$res  = mysqli_query($db,$sql);
		$data = array();
		while($row = mysqli_fetch_object($res))
			$data[]= $row;
		$this->response(200,$data);
	}
}
$user_api = new api();
?>
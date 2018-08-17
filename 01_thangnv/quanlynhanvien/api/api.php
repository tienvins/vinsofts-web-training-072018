<?php
require 'restful_api.php';

class api extends restful_api {

	public $model;
	function __construct(){
		parent::__construct();
	}

	function demo_danh_sach_nhan_vien(){
		if($this->method=="GET"){
			$db = new mysqli('localhost','root','Nvt1904.mysql','qlnv');
			mysqli_set_charset($db,"UTF8");
			$sql     = "select id, name, phone_number from  users" ;
			$res  = mysqli_query($db,$sql);
			$data = array();
			while($row = mysqli_fetch_object($res))
				$data[]= $row;
			$this->response(200,$data);
		}
	}

	function demo_xoa_nhan_vien(){
		
		if($this->method=="DELETE")
		{
			$db = new mysqli('localhost','root','Nvt1904.mysql','qlnv');
			mysqli_set_charset($db,"UTF8");
			$sql     = "delete from users where id='".$_GET['id']."'";
			$res  = mysqli_query($db,$sql);
			$this->response(200,$res);
		}
	}

	function demo_them_phong_ban(){
		
		if($this->method=="POST")
		{
			$db = new mysqli('localhost','root','Nvt1904.mysql','qlnv');
			mysqli_set_charset($db,"UTF8");

			// Lấy id mơi
			$sql ="select id from teams";
            $res = mysqli_query($db,$sql);
            $arr = array();
			while ($rows = mysqli_fetch_object($res))
                $arr[] = $rows;
            asort($arr);
            $new_id= $arr[sizeof($arr)-1]->id+1;

			$sql     = "insert into teams values('".$new_id."','".$_POST['name']."','".$_POST['description']."','null','1')";
			$res  = mysqli_query($db,$sql);
			$this->response(200,$res);
		}
	}

	function demo_dang_nhap(){
		
		if($this->method=="POST")
		{
			$db = new mysqli('localhost','root','Nvt1904.mysql','qlnv');
			mysqli_set_charset($db,"UTF8");

			$sql     = "select email, password from users where email='".$_POST['email']."' and password='".$_POST['password']."'";
			$res  = mysqli_num_rows(mysqli_query($db,$sql));
			$this->response(200,$res);
		}
	}


}
$user_api = new api();
?>
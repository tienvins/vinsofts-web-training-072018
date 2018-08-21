<?php
include 'restful_api.php';
class api extends restful_api {
	function __construct(){
		parent::__construct();
	}
	function demo_danh_sach_nhan_vien(){
		$conn 					= new mysqli('localhost','root','123456','ql_nhan_su');
		mysqli_set_charset($conn, 'UTF8');
		$sql     				= "select * from  user" ;
		$result  				= $conn->query($sql);
		$data 					= [];
		if($result){
			while($row 			= $result->fetch_object()){
				array_push($data, $row);
			}
			$this->response(200,$data);
		}
		else{
			echo "khong co du lieu";

		}
	}

	function demo_xoa_nhan_vien()
	{
		if($this->method == 'DELETE'){
			$conn 				= new mysqli('localhost','root','123456','ql_nhan_su');
			$id   				= $_GET['id'];
			$sql  				= "DELETE FROM user where id='$id'";
			$res 				= [];
			if (isset($_GET['id'])) {
				if( $conn->query($sql)){
				$res["MESSAGE"]	="delete sucsses ";
				$res["STATUS"]	=200;
			}else{
				$res["MESSAGE"] = "delete fail";
				$res["STATUS"]  = 404;
			}
			header('Content-Type: application/json');
			echo json_encode($res);
			}
			
		}
	}

	function demo_them_phong_ban()
	{
		if($this->method == 'POST'){
			$conn 				= new mysqli('localhost','root','123456','ql_nhan_su');
			mysqli_set_charset($conn, 'UTF8');
			$name 		 		= $_POST['name'];
			$description 		= $_POST['description'];
			$logo 				=	$_POST['logo'];
			$leader_id			=	$_POST['leader_id'];
			if ($name==null ||$description==null||$logo==null||$leader_id==null) {
				$this->response(404,"phai nhap day du thong tin");
			}
			else{
				$sql  		 		= "INSERT into teams(name,description,logo,leader_id) values('{$name}','{$description}','{$logo}','{$leader_id}')";
				if( $conn->query($sql)){
					$res["MESSAGE"] = "insert sucsses ";
					$res["STATUS"]	= 200;
				}else{
					$res["MESSAGE"]	= "insert fail";
					$res["STATUS"]	= 404;
				}
			
			echo json_encode($res);
			}
			
		}
	}

	function demo_login(){
		if ($this->method== 'POST') {
			$conn   			= new mysqli('localhost','root','123456','ql_nhan_su');
	        $conn->set_charset('utf8');
	        
          	$mail 				= $_POST['mail'];
          	$password 			= md5($_POST['password']);
          	$sql 				= "SELECT * FROM user WHERE email= '$mail' AND password= '$password'";
            $result=$conn->query($sql);
            $r= $result->num_rows;
            if ($r>0) {
            	$this->response(200,"login success");
            }
            else{
            	$this->response(404,"login fall");
            	
            }
          
		}
	}

	function demo_them_user(){
		if ($this->method== 'POST') {
			$conn   			= new mysqli('localhost','root','123456','ql_nhan_su');
	        $conn->set_charset('utf8');
	        
			$name 				= $_POST['Name'];
			$email 				=$_POST['Email'];
			$password 			= $_POST['Password'];
			$md_password 		= md5($password);
			$gender 			= $_POST['Gender'];
			$date 				= $_POST['Date'];
			$identify 			= $_POST['Identify'];
			$hobbie 			= $_POST['Hobbie'];
			$role 				= $_POST['Role'];
			$team 				= $_POST['Team'];
			if ($name==null||$email==null||$password==null||$gender==null||$date==null||$identify==null||$hobbie==null||$role==null||$team==null) {
				$this->response(404,'phai dien day du thong tin');
			}else{
			$q="SELECT * FROM user where email='$email'";
			$rs= $conn->query($q);
			$row= $rs->num_rows;
			if ($row>0) {
			 	$this->response(404,'email da ton tai');
			 }else{
			 	$sql 				= "INSERT INTO user(name,email,password,gender,date_of_birth,identify_id,hobby,role_id,team_id) VALUES ('{$name}','{$email}','{$md_password}','{$gender}','{$date}','{$identify}','{$hobbie}','{$role}','{$team}') ";
			 		$result=$conn->query($sql);
			 		if($result){
						$this->response(200,'insert sucsses');
					}else{
						$this->response(404,'insert fall');
					}
			 }				
			}

          	
            
         
		}
		
	}


}
$user_api = new api();
?>
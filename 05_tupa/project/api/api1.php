<?php  
	include 'restful_api.php';
	class api extends restful_api {
		function __construct(){
			parent::__construct();
		}

		function demo_danh_sach_nhan_vien(){
			if($this->method == 'GET'){
				$db              = mysqli_connect('localhost','root','123456','vinsofts-tupa');
				mysqli_set_charset($db,'UTF8');
				$sql             = "select pk_user_id,c_name,c_phone_number from tbl_user";
				$result          = mysqli_query($db,$sql);
				$arr             = array();
				while ($rows     = mysqli_fetch_object($result))
				$arr[]           = $rows;
				$this->response(200, $arr);
			}
		}

		function demo_xoa_nhan_vien(){
			if($this->method     == 'DELETE'){
				$db 			= mysqli_connect('localhost','root','123456','vinsofts-tupa');
				mysqli_set_charset($db,'UTF8');
				$id 			= $_GET['id'];
				$sql 			= "delete from tbl_user where pk_user_id='$id'";
				$this->response(200, $arr);
			}
		}
		function demo_them_phong_ban(){
			if($this->method 	== 'POST'){
				$db 			= mysqli_connect('localhost','root','123456','vinsofts-tupa');
				mysqli_set_charset($db,'UTF8');
				$name 			= $_POST['name'];
				$description 	= $_POST['description'];
				$sql 			= "insert into tbl_teams (c_name,c_description) values ('$name','$description')";
				$arr 			= mysqli_query($db,$sql);
				$this->response(200, $arr);
			}
		}
		function demo_dang_nhap(){
			if($this->method 	== 'POST'){
				$db 			= mysqli_connect('localhost','root','123456','vinsofts-tupa');
				mysqli_set_charset($db,'UTF8');
				$email 			= $_POST['email'];
				$password 		= $_POST['password'];
				$sql 			= "select c_email,c_password from tbl_user where c_email='$email' and c_password='$password'";
				$arr 			= mysqli_num_rows(mysqli_query($db,$sql));
				$this->response(200, $arr);
			}
		}
		function demo_dang_ky(){
			if($this->method 	== 'POST'){
				$db 			= mysqli_connect('localhost','root','123456','vinsofts-tupa');
				mysqli_set_charset($db,'UTF8');
				$name 			= $_POST['name'];
				$email 			= $_POST['email'];
				$email_personal = $_POST['email_personal'];
				$password 		= $_POST['password'];
				$gender 		= $_POST['gender'];
				$date_of_birth 	= $_POST['date_of_birth'];
				$phone_number 	= $_POST['phone_number'];
				$salary 		= $_POST['salary'];
				$leave_days 	= $_POST['leave_days'];
				$role_id 		= $_POST['role_id'];
				$team_id 		= $_POST['team_id'];
				$status 		= $_POST['status'];
				$sql 			= "insert into tbl_user (c_name,c_email,c_email_personal,c_password,c_gender,c_date_of_birth,c_phone_number,c_salary,c_leave_days,role_id,team_id,c_status) values ('$name','$email','$email_personal','$password',$gender,'$date_of_birth',$phone_number,$salary,$leave_days,$role_id,$team_id,$status)";
				$arr 			= mysqli_query($db,$sql);
				$this->response(200,$arr);
			}
		}
	}
	$user_api 					= new api();
?>
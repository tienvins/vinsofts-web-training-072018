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
			else{
				echo "sai phuong thuc";
			}
		}

		function demo_xoa_nhan_vien(){
			if($this->method     == 'DELETE'){
				if($_GET['id'] == ""){
					echo "ID null";
				}else{
					$db = mysqli_connect('localhost','root','123456','vinsofts-tupa');
					mysqli_set_charset($db,'UTF8');
					$id = $_GET['id'];
					$sql = "select * from tbl_user where pk_user_id='$id'";
					if(mysqli_fetch_row(mysqli_query($db,$sql))>0)
	        		{
	        			$sql1 = "delete from tbl_user where pk_user_id='$id'";
	         			$arr = mysqli_query($db,$sql1);
						$this->response(200, $arr);
	        		}
	        		else{
	        			echo "ID ko ton tai";
	        		}
				}
			}
			else{
				echo "sai phuong thuc";
			}
		}
		function demo_them_phong_ban(){
			if($this->method 	== 'POST'){
				$db 			= mysqli_connect('localhost','root','123456','vinsofts-tupa');
				mysqli_set_charset($db,'UTF8');
				//$name 			= $_POST['name'];
				if ($_POST['name'] =='' || $_POST['description'] =='') {
					$this->response(404, 'errr');
				}
				else{$name 	= "'".$_POST['name']."'";$description 	= "'".$_POST['description']."'";}
				$sql 			= "insert into tbl_teams (c_name,c_description) values ($name,$description)";
				$arr 			= mysqli_query($db,$sql);
				$this->response(200, $arr);
			}
			else{
				echo "sai phuong thuc";
			}
		}
		function demo_dang_nhap(){
			if($this->method 	== 'POST'){
				$db 			= mysqli_connect('localhost','root','123456','vinsofts-tupa');
				mysqli_set_charset($db,'UTF8');
				$email 			= $_POST['email'];
				$password 		= $_POST['password'];
				if($_POST['email'] == ''){
					$this->response(404, "email rỗng");
				}if($_POST['password'] == ''){
					$this->response(404, "pass rỗng");
				}
				else{
					$sql 			= "select c_email,c_password from tbl_user where c_email='$email' and c_password='$password'";
					$arr 			= mysqli_num_rows(mysqli_query($db,$sql));
					if($arr>0){
						$this->response(200, "login succes");
					}else{
						$this->response(404, "login fail");
					}
				}
			}
			else{
				echo "sai phuong thuc";
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

				//check rong
				if($_POST['name'] == ''){
					$this->response(404, "name rỗng");
				}else if($_POST['email'] == ''){
					$this->response(404, "email rỗng");
				}else if($_POST['email_personal'] == ''){
					$this->response(404, "email_personal rỗng");
				}else if($_POST['password'] == ''){
					$this->response(404, "password rỗng");
				}else if($_POST['gender'] == ''){
					$this->response(404, "gender rỗng");
				}else if($_POST['date_of_birth'] == ''){
					$this->response(404, "date_of_birth rỗng");
				}else if($_POST['phone_number'] == ''){
					$this->response(404, "phone rỗng");
				}else if($_POST['salary'] == ''){
					$this->response(404, "salary rỗng");
				}else if($_POST['leave_days'] == ''){
					$this->response(404, "leave_days rỗng");
				}else if($_POST['role_id'] == ''){
					$this->response(404, "role_id rỗng");
				}else if($_POST['team_id'] == ''){
					$this->response(404, "team_id rỗng");
				}else if($_POST['status'] == ''){
					$this->response(404, "status rỗng");
				}

				//check trung
				$sql = "select c_email from tbl_user where c_email='$email'";
				$res = mysqli_query($db,$sql);
				$r = mysqli_num_rows($res);
				if($r>0){
					$this->response(404,"trung emai");
				}
				else{
					$sql = "insert into tbl_user (c_name,c_email,c_email_personal,c_password,c_gender,c_date_of_birth,c_phone_number,c_salary,c_leave_days,role_id,team_id,c_status) values ('$name','$email','$email_personal','$password',$gender,'$date_of_birth',$phone_number,$salary,$leave_days,$role_id,$team_id,$status)";
					$arr = mysqli_query($db,$sql);
					$this->response(200,$arr);
				}
			}
			else{
				echo "sai phuong thuc";
			}
		}
	}
	$user_api = new api();
?>
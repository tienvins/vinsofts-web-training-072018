<?php  
	include 'restful_api.php';
	class api extends restful_api {
		function __construct(){
			parent::__construct();
		}

		function demo_danh_sach_nhan_vien(){
			if($this->method == 'GET'){
				$db              = mysqli_connect('localhost','root','hanoi1','vinsofts');
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
					$db = mysqli_connect('localhost','root','hanoi1','vinsofts');
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
				$db 			= mysqli_connect('localhost','root','hanoi1','vinsofts');
				mysqli_set_charset($db,'UTF8');
				//$name 			= $_POST['name'];
				if ($_POST['name'] =='' || $_POST['description'] =='') {
					$this->response(404, 'Không đc để trống');
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
				$db 			= mysqli_connect('localhost','root','hanoi1','vinsofts');
				mysqli_set_charset($db,'UTF8');
				$email 			= $_POST['email'];
				$password 		= $_POST['password'];
				if($_POST['email'] == ''){
					$this->response(404, "email rỗng");
				}if($_POST['password'] == ''){
					$this->response(404, "password rỗng");
				}
				else{
					$sql 			= "select c_email,c_password from tbl_user where c_email='$email' and c_password='$password'";
					$arr 			= mysqli_num_rows(mysqli_query($db,$sql));
					if($arr>0){
						$this->response(200, "Đăng nhập thành công");
					}else{
						$this->response(404, "Sai tên đang nhập hoặc mk");
					}
				}
			}
			else{
				echo "sai phuong thuc";
			}
		}
		
	}
	$user_api = new api();
?>
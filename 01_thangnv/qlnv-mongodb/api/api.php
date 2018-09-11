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
			if(sizeof($data)>0){
				$this->response(200,$data);
			}else{
				$this->response(204,"Không có dữ liệu");
			}
			
		}else{
			$this->response(405,"Sai phương thức. xin kiểm tra lại");
		}
	}

	function demo_xoa_nhan_vien(){
		
		if($this->method=="DELETE")
		{
			if($_GET['id']==""){
				$this->response(500,"ID=null");
			}else{
				$db = new mysqli('localhost','root','Nvt1904.mysql','qlnv');
				mysqli_set_charset($db,"UTF8");
				$sql	=	"select * from users where id='".$_GET['id']."'";
				if(mysqli_fetch_row(mysqli_query($db,$sql))>0)
				{
					$sql  	= "delete from users where id='".$_GET['id']."'";
					$res  	= mysqli_query($db,$sql);
					$this->response(200,$res);
				}else{
					$this->response(500,"ID không tồn tại");
				}
				
			}
		}
		else{
			$this->response(405,"Sai phương thức. xin kiểm tra lại");
		}
	}

	function demo_them_phong_ban(){
		
		if($this->method=="POST")
		{

			if($_POST['name']==""){
				$this->response(500,"name=null");
			}if($_POST['description']==""){
				$this->response(500,"description=null");
			}else{
				$db = new mysqli('localhost','root','Nvt1904.mysql','qlnv');
				mysqli_set_charset($db,"UTF8");

				// Upload ảnh
				if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
					$uploaddir      =   "../images/teams";
					$fileinfo       =   PATHINFO($_FILES['image']['name']);
					$newfilename    =   "upload_".$fileinfo['filename'].".".$fileinfo['extension'];
					$filetmp        =   $_FILES['image']['tmp_name'];
					$_POST["image"]           =   "images/teams/$newfilename";
					if (!file_exists("../images/teams/".$newfilename))
						move_uploaded_file($filetmp,"$uploaddir/$newfilename");
				}
				else{
					$_POST["image"]="-1";
				}

				// Lấy id mơi
				$sql ="select id from teams";
            	$res = mysqli_query($db,$sql);
            	$arr = array();
				while ($rows = mysqli_fetch_object($res))
            	    $arr[] = $rows;
            	sort($arr);
            	$new_id= $arr[sizeof($arr)-1]->id+1;

				$sql     = "insert into teams values('".$new_id."','".$_POST['name']."','".$_POST['description']."','".$_POST['image']."','1')";
				$res  = mysqli_query($db,$sql);
				if($res==1){
					$this->response(200,"Thêm thành công phòng ban với id= '".$new_id."' và name= '".$_POST['name']."'");
				}
				else{
					$this->response(500,"Không thành công xin kiểm tra lại");
				}
			}
		}else{
		$this->response(405,"Sai phương thức. xin kiểm tra lại");
		}
	}

	function demo_dang_ky(){
		
		if($this->method=="POST")
		{
			$tb="";
			switch ($tb) {
				case $_POST['name']:
					$this->response(500,"name=null");
					break;
				case $_POST['email']:
					$this->response(500,"email=null");
					break;
				case $_POST['email_personal']:
					$this->response(500,"email_personal=null");
					break;
				case $_POST['password']:
					$this->response(500,"password=null");
					break;
				case $_POST['gender']:
					$this->response(500,"gender=null");
					break;
				case $_POST['date_of_birth']:
					$this->response(500,"date_of_birth=null");
					break;
				case $_POST['identify_id']:
					$this->response(500,"identify_id=null");
					break;
				case $_POST['phone_number']:
					$this->response(500,"phone_number=null");
					break;
				case $_POST['current_address']:
					$this->response(500,"current_address=null");
					break;
				case $_POST['permanent_address']:
					$this->response(500,"permanent_address=null");
					break;
				case $_POST['graduate_from']:
					$this->response(500,"graduate_from");
					break;
				case $_POST['salary']:
					$this->response(500,"salary=null");
					break;
				case $_POST['bank_account_number']:
					$this->response(500,"bank_account_number=null");
					break;
				case $_POST['hobby']:
					$this->response(500,"hobby=null");
					break;
				case $_POST['family_description']:
					$this->response(500,"family_description=null");
					break;
				case $_POST['language_skills']:
					$this->response(500,"language_skills=null");
					break;
				case $_POST['leave_days']:
					$this->response(500,"leave_days=null");
					break;
				case $_POST['role_id']:
					$this->response(500,"role_id=null");
					break;
				case $_POST['team_id']:
					$this->response(500,"team_id=null");
					break;
				case $_POST['status']:
					$this->response(500,"status=null");
					break;
				default:
					$db = new mysqli('localhost','root','Nvt1904.mysql','qlnv');
					mysqli_set_charset($db,"UTF8");
					
					// Upload ảnh
					if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
						$uploaddir      =   "../images/users";
						$fileinfo       =   PATHINFO($_FILES['image']['name']);
						$newfilename    =   "upload_".$fileinfo['filename'].".".$fileinfo['extension'];
						$filetmp        =   $_FILES['image']['tmp_name'];
						$_POST["image"]           =   "images/users/$newfilename";
						if (!file_exists("../images/users/".$newfilename))
							move_uploaded_file($filetmp,"$uploaddir/$newfilename");
					}
					else{
						$_POST["image"]="-1";
					}
				
					// Lấy id mơi
					$sql ="select id from users";
					$res = mysqli_query($db,$sql);
					$arr = array();
					while ($rows = mysqli_fetch_object($res))
						$arr[] = $rows;
					sort($arr);
					$new_id= $arr[sizeof($arr)-1]->id+1;
				
					$sql ="insert into users values('".$new_id."','".$_POST['name']."','".$_POST['email']."','".$_POST['email_personal']."','".$_POST['password']."','".$_POST['remember_token']."','".$_POST['image']."','".$_POST['gender']."','".$_POST['date_of_birth']."','".$_POST['identify_id']."','".$_POST['phone_number']."','".$_POST['current_address']."','".$_POST['permanent_address']."','".$_POST['graduate_from']."','".$_POST['salary']."','".$_POST['bank_account_number']."','".$_POST['hobby']."','".$_POST['family_description']."','".$_POST['language_skills']."','".$_POST['leave_days']."','".$_POST['role_id']."','".$_POST['team_id']."','".$_POST['status']."')";
					$res  = mysqli_query($db,$sql);
					if($res==1){
						$this->response(200,"Đăng kí thành công với id= '".$new_id."' và name= '".$_POST['name']."'");
					}
					else{
						$this->response(500,"Không thành công xin kiểm tra lại");
					}
			}
		}
		else{
			$this->response(405,"Sai phương thức. xin kiểm tra lại");
		}
	}

	function demo_dang_nhap(){
		
		if($this->method=="POST")
		{
			if($_POST['email']==""|$_POST['password']==""){
				$this->response(400,"Không dủ thông tin đăng nhập");
			}else{
				$db	= new mysqli('localhost','root','Nvt1904.mysql','qlnv');
				mysqli_set_charset($db,"UTF8");
				$sql = "select email, password from users where email='".$_POST['email']."' and password='".$_POST['password']."'";
				$res = mysqli_num_rows(mysqli_query($db,$sql));
				if($res==1){
					$this->response(200,"Đăng nhập thành công");
				}
				else{
					$this->response(400,"Sai tài khoản hoặc mật khẩu mật khẩu");
				}
			}
		}
		else{
			$this->response(500,"Sai phương thức. xin kiểm tra lại");
		}
	}


}
$user_api = new api();
?>
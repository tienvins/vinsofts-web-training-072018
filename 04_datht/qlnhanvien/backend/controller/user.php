<?php 

	/**
	 * 
	 */
	class User
	{
		// function login(){
			
		// 	include 'backend/views/login.php';
			

		// 	if (isset($_POST['btnLogin'])) {
				
		// 		$mail=$_POST['txtEmail'];
		// 		$password=$_POST['txtPassword'];
		// 		$model= new UserModel();
		// 		$r=$model->checkUser($mail,$password);
		// 		print_r($r);
		// 		if ($r[0]==0) {
		// 			echo "that bai";
		// 		}else{
		// 			echo "thanh cong";
		// 			$_SESSION['user'] = $mail;  // khởi tạo 1 session, tên là admin và giá trị là username
		// 			header("Location:?controller=home&&action=index");  
		// 		}
				
		// 	}
			
		// }
		function index(){
			
			$user= new UserModel();
			$rUser=$user->getAllUser();
			require 'backend/views/v_user/user.php';
			
		}
		function delete(){
			if (isset($_GET['id'])) {
				$user   = new UserModel();
				$rUser  = $user->delete($_GET['id']);
				header('location:?controller=user&action=index');
			}else{
				header('location:.');
			}
			
		}
		function add(){

			require 'backend/views/v_user/add.php';
			if (isset($_POST['btnAdd'])) {
				$name= $_POST['txtName'];
				$email=$_POST['txtEmail'];
				$password = $_POST['txtPassword'];
				$avatar = $_POST['fAvatar'];
				$gender = $_POST['rdGender'];

				$date = $_POST['txtDate'];
				$identify= $_POST['txtIdentify'];
				$hobbie = $_POST['txtHobbie'];
				$role = $_POST['txtRole'];
				$team = $_POST['txtTeam'];

				$q= array("('$name'","'$email'","'$password'","'$avatar'","'$gender'","'$date'","'$identify'","'$hobbie'","'$role'","'$team')");
				$str =implode(",", $q);
				echo $str;
				$user   = new MasterModel();
				$rUser  = $user->insertUser();
			}
		}
		
	}
 ?>
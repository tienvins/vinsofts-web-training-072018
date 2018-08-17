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
		function login(){
			
			include 'backend/views/v_user/login.php';
			if (isset($_POST['btnLogin'])) {
				$mail=$_POST['txtEmail'];
				$password=md5($_POST['txtPassword']);
				$model= new UserModel();
				$r=$model->checkUser($mail,$password);
				if ($r==0) {
					echo "sai tai khoan hoac mat khau";
				}else{
					echo "thanh cong";
					$_SESSION['user'] = $mail;
					header("location:.");
				}
			}
			
		}
		function logout(){
			unset($_SESSION['user']);
			header("Location:.");
		}
		function register(){
			echo "lol";
			include 'backend/views/v_user/register.php';
		}


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
				$md_password= md5($password);
				$avatar = $_POST["image"];

				$gender = $_POST['rdGender'];

				$date = $_POST['txtDate'];
				$identify= $_POST['txtIdentify'];
				$hobbie = $_POST['txtHobbie'];
				$role = $_POST['txtRole'];
				$team = $_POST['txtTeam'];
				
				
				$q= array("('$name'","'$email'","'$md_password'","'$avatar'","'$gender'","'$date'","'$identify'","'$hobbie'","'$role'","'$team')");
				$str =implode(",", $q);
				var_dump($str);
				$user   = new UserModel();
				$rUser  = $user->insertUser($str);
				header("location:?controller=user");
				
			}
		}
		
		function edit(){
			$user   = new UserModel();
			
			if (isset($_GET['eid'])) {
				
				$rUser  = $user->getUserById($_GET['eid']);
				
				require 'backend/views/v_user/edit.php';
			}
				
				$name= $_POST['txtName'];
				$email=$_POST['txtEmail'];
				$password = $_POST['txtPassword'];
				$avatar = $_POST['image'];
				$gender = $_POST['rdGender'];

				$date = $_POST['txtDate'];
				$identify= $_POST['txtIdentify'];
				$hobbie = $_POST['txtHobbie'];
				$role = $_POST['txtRole'];
				$team = $_POST['txtTeam'];

				
				
				
				if (isset($_POST['btnEdit'])) {
					$r= $user->editUser($name,$email,$password,$avatar,$gender,$date,$identify,$hobbie,$role,$team,$_GET['eid']);
					header("location:?controller=user");
				}
				
				
			
			
			// $q='sadsadsa';
			// 
				
			
		}
		
	}
 ?>
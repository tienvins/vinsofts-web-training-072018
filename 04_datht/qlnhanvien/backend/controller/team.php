<?php 

	/**
	 * 
	 */
	class Team
	{
		function index(){
			
			$team= new TeamModel();
			$rTeam=$team->getAllTeam();

			require 'backend/views/v_teams/index.php';
			
		}
		function delete(){
			if (isset($_GET['id'])) {
				$team= new TeamModel();
				$rTeam=$team->delete($_GET['id']);
				header('location:?controller=team&action=index');
			}else{
				header('location:.');
			}
			
		}
		function add(){
			$team= new UserModel();
			require 'backend/views/v_teams/add.php';
			
			if (isset($_POST['btnAdd'])) {
				$name= $_POST['txtName'];
				$descrip=$_POST['txtDescription'];
				$logo = $_FILES["fLogo"]['name'];
				$leader = $_POST['txtLeader'];
				$q= array("('$name'","'$descrip'","'$logo'","'$leader')");
				$str =implode(",", $q);
				var_dump($str);
				var_dump($avatar);
				$team= new TeamModel();
				$rTeam  = $team->insertTeam($str);
				$uploaddir      =   "asset/images";
              	$fileinfo       =   PATHINFO($_FILES['fLogo']['name']);
              	$newfilename    =   $fileinfo['filename'].".".$fileinfo['extension'];
              	$filetmp        =   $_FILES['fLogo']['tmp_name'];
              	if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true)

				move_uploaded_file($filetmp , $uploaddir);
				
				
				header("location:?controller=team");
				
			}
		}

		function edit(){
			$team   = new TeamModel();

			if (isset($_GET['eid'])) {
				
				$rTeam  = $team->getTeamById($_GET['eid']);
				
				require 'backend/views/v_teams/edit.php';
			}
				
				$name= $_POST['txtName'];
				$descrip=$_POST['txtDescription'];
				$logo = $_FILES["fLogo"]['name'];
				$leader = $_POST['txtLeader'];
				if (isset($_POST['btnEdit'])) {
					$q= array("('$name'","'$descrip'","'$logo'","'$leader')");
					$str =implode(",", $q);
					var_dump($str);
					var_dump($avatar);
					$r= $team->editTeam($name,$descrip,$logo,$leader,$_GET['eid']);
					$uploaddir      =   "asset/images";
	              	$fileinfo       =   PATHINFO($_FILES['fLogo']['name']);
	              	$newfilename    =   $fileinfo['filename'].".".$fileinfo['extension'];
	              	$filetmp        =   $_FILES['fLogo']['tmp_name'];
	              	if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true)
					move_uploaded_file($filetmp , $uploaddir);
					header("location:?controller=team");
				}
				
				
			
			
				
			
		}

		
		
		
	}
 ?>
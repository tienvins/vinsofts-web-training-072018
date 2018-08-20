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
		
		
		
	}
 ?>
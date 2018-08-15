<?php
    class c_viewteams extends controller{
		public function __construct(){
			parent::__construct();
			$listteams = $this->model->get_all(" select * from teams");	
            	include "views/v_teams.php";
		}
	}
	new c_viewteams();
?>
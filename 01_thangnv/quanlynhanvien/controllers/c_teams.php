<?php
    class c_viewteams extends controller{
		public function __construct(){
			parent::__construct();
			$teams = $this->m_teams->get_all();	
            	include "views/v_teams.php";
		}
	}
	new c_viewteams();
?>
<?php
    class c_viewusers extends controller{
		public function __construct(){
			parent::__construct();
			$listteams = $this->model->get_all(" select * from users");	
            include "views/v_users.php";
		}
	}
	new c_viewusers();
?>
<?php 
	class controller_team extends controller{
		public function __construct(){
			parent::__construct();
			//--------
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])?$_GET["id"]:0;
			switch($act){
				case "delete":
					
					//xoa ban ghi co id truyen vao
					$this->model->execute("delete from tbl_teams where pk_teams_id=$id");
					header("location:admin.php?controller=teams");
				break;
			}
			//--------
			//so ban ghi tren mot trang
			$recorde_perpage = 4;
			//tong so ban ghi
			$total_record = $this->model->num_rows("select * from tbl_team");
			//tinh so trang = tongsobanghi/sobanghitrentrang
			$num_page = ceil($total_record/$recorde_perpage);
			//xac dinh trang hien tai
			$cur_page= isset($_GET["p"])&&$_GET["p"] > 0?$_GET["p"]-1:0;
			//xac dinh tu ban ghi nao den ban ghi nao
			$from = $recorde_perpage*$cur_page;
			//--------
			//lay toan bo ban ghi cua tbl_team
			$arr = $this->model->fetch("select * from tbl_teams order by pk_teams_id desc limit $from,$recorde_perpage");
			//load view
			include "view/backend/view_teams.php";
		}
	}
	new controller_team();
 ?>
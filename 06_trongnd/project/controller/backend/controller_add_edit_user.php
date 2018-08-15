<?php  
	class controller_add_edit_user{
		public $model;
		public function __construct(){
			$this->model = new model();

			$act = isset($_GET["act"]) ? $_GET["act"] : "";
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			// switch ($act) {
			// 	case 'edit':
			// 		$form_action: "admin.php?controller=add_edit_user&act=do_edit&id=$id";
			// 		$arr = $this->model->get_a_record("select * from tbl_user where pk_user_id=$id");
			// 	break;
			// 	case 'do_edit':
						
			// 	break;
			// 	case 'add':
				
			// 	break;
			// 	case 'do_add':
				
			// 	break;
				
			// 	default:
			// 		# code...
			// 		break;
			// }

			include "view/backend/view_add_edit_user.php";
		}
	}
	new controller_add_edit_user();
?>
<?php 
class TeamModel extends MasterModel
{
	public function getAllTeam(){
		return parent::get_all_from('teams');
	}
	public function getUserById($id){
		return parent::get_by_id_parent('teams','id',$id);
	}
	public function delete($id){
		return parent::delete_by_id("teams","id",$id);
	}
}
?>
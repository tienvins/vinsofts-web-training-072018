<?php 
class TeamsModel extends MasterModel
{
	public function getAllTeams(){
		return parent::get_all_from('teams');
	}
	public function getUserById($id){
		return parent::get_by_id_parent('teams','id',$id);
	}
	public function deleteUserById($id){
		return parent::delete('teams','id',$id);
	}
}
?>
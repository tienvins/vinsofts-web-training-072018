<?php 
class TeamModel extends MasterModel
{
	public function getAllTeam(){
		return parent::get_all_from('teams');
	}
	public function getTeamById($id){
		return parent::get_by_id_parent('teams','id',$id);
	}
	public function delete($id){
		return parent::delete_by_id("teams","id",$id);
	}
	public function get_free($sql){
		return parent::get_free_by_parent($sql);
	}
	public function insertTeam($v){
		
		return parent::insert(" teams(name,description,logo,leader_id) ",$v);
	}public function editTeam($name,$description,$logo,$leader_id,$id){
		echo "hahaha";
		return parent::update("UPDATE teams SET name='$name',description='$description',logo='$logo',leader_id='$leader_id' WHERE id= $id");
	}
	}
?>
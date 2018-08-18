<?php 
/**
 * 
 */
// echo "<br>ủe model";
class UserModel extends MasterModel
{
	
	public function checkUser($email,$pass){
		$db= new database();
		$conn= $db->connectDB();
		$sql= "SELECT * FROM user WHERE email='$email' AND password='$pass'";
		$result=$conn->query($sql);
       	$num= $result->num_rows;
      	$row = $result->fetch_row();

        return $num;
	}
	public function getAllUser(){
		return parent::get_all_from('user');
	}
	public function getUserById($id){
		return parent::get_by_id_parent('user','id',$id);
	}
	public function delete($id){
		return parent::delete_by_id("user","id",$id);
	}
	public function insertUser($v){
		
		return parent::insert(" user(name,email,password,image,gender,date_of_birth,phone_number,hobby,role_id,team_id) ",$v);
	}
	public function editUser($name,$email,$password,$image,$gender,$date,$iden,$hobby,$role,$team,$id){
		return parent::update("UPDATE user SET name='$name',email='$email',password='$password',image='$image',gender='$gender',date_of_birth='$date',identify_id='$iden',hobby='$hobby',role_id='$role',team_id='$team' WHERE id= $id");
	}
	
}
?>
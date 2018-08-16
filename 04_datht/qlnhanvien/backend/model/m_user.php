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
        return $row;
	}
	public function getAllUser(){
		return parent::get_all_from('user');
	}
	public function getUserById($id){
		return parent::get_by_id_parent('user','id',$id);
	}
	public function delete($id){
		return parent::delete_by_id('user','id',$id);
	}
	public function insertUser(){
		echo "dang dc goi";
		return parent::insert("user(name,email,password,image,gender,date_of_birth,phone_number,hobby,role_id,team_id) ","('daudau','dat@gmail.com','sdsad','37865305_1038391282994723_8368732119714758656_n (1).jpg','0','2018-08-08','132465','dtaujgdas','12','1')");
	}

}
?>
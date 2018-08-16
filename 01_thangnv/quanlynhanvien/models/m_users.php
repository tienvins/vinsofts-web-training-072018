<?php


    class m_users{

        public function __construct(){

        }

        public function get_all(){
            global $db;
            $sql ="select * from users";
            $res = mysqli_query($db,$sql);
            $arr = array();
			while ($rows = mysqli_fetch_object($res))
				$arr[] = $rows;
			return $arr;
        }

        public function get_id($id){
            global $db;
            $sql ="select * from users where id='".$id."'";
            $res = mysqli_query($db,$sql);
            return mysqli_fetch_object($res);
        }

        public function login($email, $password){
            global $db;
            $sql ="select count(*) from users where email='".$email."' and password ='".$password."'";
            $res = mysqli_query($db,$sql);
            return mysqli_num_rows($res);
        }

        public function insert($data){
            global $db;
            $sql ="insert into users values('".$id."','".$data['name']."','".$datadb['email']."','".$datadb['email_personal']."','".$datadb['password']."','".$datadb['remember_token']."','".$datadb['image']."','".$datadb['gender']."','".$datadb['phone_number']."','".$datadb['current_address']."','".$datadb['permanent_address']."','".$datadb['graduate_from']."','".$datadb['salary']."','".$datadb['bank_account_number']."','".$datadb['hobby']."','".$datadb['family_description']."','".$datadb['language_skills']."','".$datadb['leave_days']."','".$datadb['role_id']."','".$datadb['team_id']."','".$datadb['status']."')";
            return mysqli_query($db,$sql);
        }

        public function delete($id){
            global $db;
            $sql ="delete from users where id='".$id."'";
            return mysqli_query($db,$sql);
        }

        public function update($data){
            global $db;
            $sql        =   "update users set name='".$data['name']."',email='".$data['email']."',email_personal='".$data['email_personal']."',password='".$data['password']."',remember_token='".$data['remember_token']."',image='".$data['image']."',gender='".$data['gender']."',phone_number='".$data['phone_number']."',hobby='".$data['hobby']."',family_description='".$data['family_description']."',language_skills='".$data['language_skills']."',leave_days='".$data['leave_days']."',role_id='".$data['role_id']."',team_id='".$data['team_id']."',status='".$data['status']."' where id='".$data['id']."'";
            return mysqli_query($db,$sql);
        }
    }
?>
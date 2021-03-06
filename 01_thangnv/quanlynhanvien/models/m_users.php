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

        public function get_all_info(){
            global $db;
            $sql ="select users.id, users.name, users.email, users.email_personal, users.password, users.remenber_token, users.image, users.gender, users.date_of_birth, users.identify_id, users.phone_number, users.current_address, users.permanent_address, users.graduate_from, users.salary, users.bank_account_number, users.hobby, users.family_description, users.language_skills, users.leave_days, users.role_id, teams.name as team, users.status from users,teams WHERE users.team_id=teams.id";
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

        public function login($data){
            global $db;
            $sql ="select email,password from users where email='".$data['email']."' and password ='".$data['password']."'";
            $res = mysqli_query($db,$sql);
            return mysqli_num_rows($res);
        }

        public function insert($data){
            global $db;
            $sql ="insert into users values('".$data['id']."','".$data['name']."','".$data['email']."','".$data['email_personal']."','".$data['password']."','".$data['remember_token']."','".$data['image']."','".$data['gender']."','".$data['date_of_birth']."','".$data['identify_id']."','".$data['phone_number']."','".$data['current_address']."','".$data['permanent_address']."','".$data['graduate_from']."','".$data['salary']."','".$data['bank_account_number']."','".$data['hobby']."','".$data['family_description']."','".$data['language_skills']."','".$data['leave_days']."','".$data['role_id']."','".$data['team_id']."','".$data['status']."')";
            return mysqli_query($db,$sql);
        }

        public function delete($id){
            global $db;
            $sql="";
            if($id!="1")
            $sql ="delete from users where id='".$id."'";
            return mysqli_query($db,$sql);
        }

        public function update($data){
            global $db;
            $sql        =   "update users set name='".$data['name']."',email='".$data['email']."',email_personal='".$data['email_personal']."',password='".$data['password']."',remenber_token='".$data['remember_token']."',image='".$data['image']."',gender='".$data['gender']."',date_of_birth='".$data['date_of_birth']."',identify_id='".$data['identify_id']."',phone_number='".$data['phone_number']."',current_address='".$data['current_address']."',permanent_address='".$data['permanent_address']."',graduate_from='".$data['graduate_from']."',salary='".$data['salary']."',bank_account_number='".$data['bank_account_number']."',hobby='".$data['hobby']."',family_description='".$data['family_description']."',language_skills='".$data['language_skills']."',leave_days='".$data['leave_days']."',role_id='".$data['role_id']."',team_id='".$data['team_id']."',status='".$data['status']."' where id='".$data['id']."'";
            return mysqli_query($db,$sql);
        }

        public function update_no_up_img($data){
            global $db;
            $sql        =   "update users set name='".$data['name']."',email='".$data['email']."',email_personal='".$data['email_personal']."',password='".$data['password']."',remenber_token='".$data['remember_token']."',gender='".$data['gender']."',date_of_birth='".$data['date_of_birth']."',identify_id='".$data['identify_id']."',phone_number='".$data['phone_number']."',current_address='".$data['current_address']."',permanent_address='".$data['permanent_address']."',graduate_from='".$data['graduate_from']."',salary='".$data['salary']."',bank_account_number='".$data['bank_account_number']."',hobby='".$data['hobby']."',family_description='".$data['family_description']."',language_skills='".$data['language_skills']."',leave_days='".$data['leave_days']."',role_id='".$data['role_id']."',team_id='".$data['team_id']."',status='".$data['status']."' where id='".$data['id']."'";
            return mysqli_query($db,$sql);
        }
        
        public function get_new_id(){
            global $db;
            $sql ="select id from users";
            $res = mysqli_query($db,$sql);
            $arr = array();
			while ($rows = mysqli_fetch_object($res))
                $arr[] = $rows;
            sort($arr);
            return $arr[sizeof($arr)-1]->id+1;
        }
        
    }
?>
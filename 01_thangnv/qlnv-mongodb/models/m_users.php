<?php


    class m_users{

        public function __construct(){

        }


        public function get_count(){
            global $db;
            $coll=$db->users;
		    $data=$coll->count();
			return $data;
        }

        public function get_all(){
            global $db;
            $coll=$db->users;
		    $data=$coll->find();
			return $data;
        }

        public function get_full(){
            global $db;
            $coll=$db->users;
            $data=$coll->aggregate([['$lookup'=>["from"=>"teams","localField"=>"users.team_id","foreignField"=> "_id.str","as"=> "info_team"]]])->toArray();
            return $data;
        }

        public function get_id_name(){
            global $db;
            $coll=$db->users;
		    $data=$coll->find([],[_id=>1,name=>1])->toArray();
			return $data;
        }

        public function get_id($id){
            global $db;
            $coll=$db->users;
            $data=$coll->find([_id=> new MongoDB\BSON\ObjectID($_GET['id'])])->toArray();
            return $data[0];
        }



        public function login($data){
            global $db;
            $coll=$db->users;
            $data=$coll->count([email=>$data['email'],password=>$data['password']]);
			return $data;
        }

        public function insert($data){
            global $db;     
            $coll=$db->users;
            $data=$coll->insertOne([name=>$data['name'],email=>$data['email'],email_personal=>$data['email_personal'],password=>$data['password'],remenber_token=>$data['remember_token'],image=>$data['image'],gender=>$data['gender'],date_of_birth=>$data['date_of_birth'],identify_id=>$data['identify_id'],phone_number=>$data['phone_number'],current_address=>$data['current_address'],permanent_address=>$data['permanent_address'],graduate_from=>$data['graduate_from'],salary=>$data['salary'],bank_account_number=>$data['bank_account_number'],hobby=>$data['hobby'],family_description=>$data['family_description'],language_skills=>$data['language_skills'],leave_days=>$data['leave_days'],role_id=>$data['role_id'],team_id=>$data['team_id'],status=>$data['status']]);
        }

        public function delete($id){
            global $db;
            $coll=$db->users;
            $coll->deleteOne([_id=> new MongoDB\BSON\ObjectID($_GET['id'])]);
        }

        public function update($data){
            global $db; 
            $coll=$db->users;
            $data=$coll->updateOne([_id=> new MongoDB\BSON\ObjectID($_GET['id'])],['$set'=>[name=>$data['name'],email=>$data['email'],email_personal=>$data['email_personal'],password=>$data['password'],remenber_token=>$data['remember_token'],image=>$data['image'],gender=>$data['gender'],date_of_birth=>$data['date_of_birth'],identify_id=>$data['identify_id'],phone_number=>$data['phone_number'],current_address=>$data['current_address'],permanent_address=>$data['permanent_address'],graduate_from=>$data['graduate_from'],salary=>$data['salary'],bank_account_number=>$data['bank_account_number'],hobby=>$data['hobby'],family_description=>$data['family_description'],language_skills=>$data['language_skills'],leave_days=>$data['leave_days'],role_id=>$data['role_id'],team_id=>$data['team_id'],status=>$data['status']]]);
        }

        public function update_no_up_img($data){
            global $db; 
            $coll=$db->users;
            $data=$coll->updateOne([_id=> new MongoDB\BSON\ObjectID($_GET['id'])],['$set'=>[name=>$data['name'],email=>$data['email'],email_personal=>$data['email_personal'],password=>$data['password'],remenber_token=>$data['remember_token'],gender=>$data['gender'],date_of_birth=>$data['date_of_birth'],identify_id=>$data['identify_id'],phone_number=>$data['phone_number'],current_address=>$data['current_address'],permanent_address=>$data['permanent_address'],graduate_from=>$data['graduate_from'],salary=>$data['salary'],bank_account_number=>$data['bank_account_number'],hobby=>$data['hobby'],family_description=>$data['family_description'],language_skills=>$data['language_skills'],leave_days=>$data['leave_days'],role_id=>$data['role_id'],team_id=>$data['team_id'],status=>$data['status']]]);
        }
    
        
    }
?>
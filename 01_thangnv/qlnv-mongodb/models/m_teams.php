<?php

    class m_teams{

        public function __construct(){

        }

        public function get_count(){
            global $db;
            $coll=$db->teams;
		    $data=$coll->count();
			return $data;
        }

        public function get_all(){
            global $db;
            $coll=$db->teams;
		    $data=$coll->find();
			return $data;
        }

        public function get_full(){
            global $db;
            $coll=$db->teams;
            $data=$coll->aggregate([['$lookup'=>["from"=>"users","localField"=>"teams.leader_id","foreignField"=> "_id.str","as"=> "info_leader"]]])->toArray();
            return $data;
        }

        public function get_id_name(){
            global $db;
            $coll=$db->teams;
		    $data=$coll->find([],[_id=>1,name=>1])->toArray();
			return $data;
        }

        public function get_id($id){
            global $db;
            $coll=$db->teams;
            $data=$coll->find([_id=> new MongoDB\BSON\ObjectID($_GET['id'])])->toArray();
            return $data[0];
        }

        public function insert($data){
            global $db; 
            $coll=$db->teams;
            $data=$coll->insertOne([name=>$data['name'], description=>$data['description'],logo=> $data['image'],leader_id=>$data['leader_id']]);
        }

        public function delete($id){
            global $db;
            $coll=$db->teams;
            $coll->deleteOne([_id=> new MongoDB\BSON\ObjectID($_GET['id'])]);
        }

        public function update($data){
            global $db; 
            $coll=$db->teams;
            $data=$coll->updateOne([_id=> new MongoDB\BSON\ObjectID($_GET['id'])],['$set'=>[name=>$data['name'], description=>$data['description'],logo=> $data['image'],leader_id=>$data['leader_id']]]);
        }

        public function update_no_up_img($data){
            global $db; 
            $coll=$db->teams;
            $data=$coll->updateOne([_id=> new MongoDB\BSON\ObjectID($_GET['id'])],['$set'=>[name=>$data['name'], description=>$data['description'],leader_id=>$data['leader_id']]]);
        }
        
    }
?>
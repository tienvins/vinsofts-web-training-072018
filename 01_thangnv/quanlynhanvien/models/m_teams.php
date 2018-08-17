<?php

    class m_teams{

        public function __construct(){

        }

        public function get_all(){
            global $db;
            $sql ="select * from teams";
            $res = mysqli_query($db,$sql);
            $arr = array();
			while ($rows = mysqli_fetch_object($res))
				$arr[] = $rows;
			return $arr;
        }

        public function get_id($id){
            global $db;
            $sql ="select * from teams where id='".$id."'";
            $res = mysqli_query($db,$sql);
            return mysqli_fetch_object($res);
        }

        public function insert($data){
            global $db;
            $sql ="insert into teams values('".$data['id']."','".$data['name']."','".$data['description']."','".$data['image']."','".$data['leader_id']."')";
            return mysqli_query($db,$sql);
        }

        public function delete($id){
            global $db;
            $sql="";
            if($id!="1")
            $sql ="delete from teams where id='".$id."'";
            return mysqli_query($db,$sql);
        }

        public function update($data){
            global $db;
            $sql        =   "update teams set name='".$data['name']."',descroption='".$data['description']."',logo='".$data['image']."',leader_id='".$data['leader_id']."' where id='".$data['id']."'";
            return mysqli_query($db,$sql);
        }

        public function update_no_up_img($data){
            global $db;
            $sql        =   "update teams set name='".$data['name']."',descroption='".$data['description']."',leader_id='".$data['leader_id']."' where id='".$data['id']."'";
            return mysqli_query($db,$sql);
        }
        
        public function get_new_id(){
            global $db;
            $sql ="select id from teams";
            $res = mysqli_query($db,$sql);
            $arr = array();
			while ($rows = mysqli_fetch_object($res))
                $arr[] = $rows;
            asort($arr);
            return (int)$arr[1]->id+1;
        }
        
    }
?>
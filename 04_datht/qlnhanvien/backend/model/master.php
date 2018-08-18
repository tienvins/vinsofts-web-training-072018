<?php 
// echo "<br>master";
	class MasterModel{

		public function get_all_from($table){
			$db= new database();
			$conn= $db->connectDB();
			
			$sql="SELECT * from $table";
                    $result=$conn->query($sql);
                  	$row = $result->fetch_all();
                      
                    return $row;
		}

		public function get_by_id_parent($table,$column,$value){
			$db= new database();
			$conn= $db->connectDB();	
			$sql="SELECT * from $table where $column=$value ";
                    $result=$conn->query($sql);
                    $num= $result->num_rows;
                  	$row = $result->fetch_all();
                    return $row;
		}
		public function delete_by_id($table,$column,$value){
			$db= new database();
			$conn= $db->connectDB();
			
			$sql="DELETE From $table WHERE $column=$value";
                    $result=$conn->query($sql);
         }           
		public function get_free_by_parent($_sql,$column,$value){
			$db= new database();
			$conn= $db->connectDB();
			
			$sql="$_sql where $column=$value";
                    $result=$conn->query($sql);
                    $num= $result->num_rows;
                  	$row = $result->fetch_all();
                      
                    return $row;
		}
		public function insert($q,$value){
			$db= new database();
			$conn= $db->connectDB();

			$sql="INSERT INTO $q VALUES $value";
			$result=$conn->query($sql);
		}
		public function update($q){
			$db= new database();
			$conn= $db->connectDB();
			$sql=$q;
			$result=$conn->query($sql);
		}                         
		
	}

 ?>
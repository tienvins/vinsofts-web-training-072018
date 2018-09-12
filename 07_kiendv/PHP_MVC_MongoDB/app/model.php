<?php  
	class model {
		//Lay tat ca ban ghi
		public function fetch($sql) {
			global $db;
			$result = mysqli_query($db,$sql);
			$arr = array();
			while ($row = mysqli_fetch_object($result)) {
				$arr[] = $row;
			}
			return $arr;
		}
		//Lay 1 ban ghi
		public function fetch_one($sql) {
			global $db;
			$result = mysqli_query($db,$sql);
			return mysqli_fetch_object($result);
		}
		//Thuc thi truy van
		public function execute($sql) {
			global $db;
			mysqli_query($db,$sql);
		}
		//Dem so ban ghi
		public function num_rows($sql) {
			global $db;
			mysqli_query($db,$sql);
			return mysqli_num_rows($result);
		}

		//mongoDB
		public function table($table) {
			global $db;
			return $db -> $table;
		}
	}
?>
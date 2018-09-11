<?php
	class model{
		//hàm lấy danh sách tất cả các bản ghi
		public function get_all($sql){
			global $db;
			//$result = mysqli_query($db,$sql) or die ("lỗi!");
			$result = mysqli_query($db,$sql);
			$arr = array();
			while ($rows = mysqli_fetch_object($result))
				$arr[] = $rows;
			return $arr;
		}
		//thực thi câu truy vấn
		public function execute($sql){
			global $db;
			$result = mysqli_query($db,$sql);
		}
		//lấy một bản ghi
		public function get_one($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			return mysqli_fetch_object($result);
		}
		//trả về số lượng bản ghi
		public function get_num_rows($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			return mysqli_num_rows($result);
		}
	}
?>
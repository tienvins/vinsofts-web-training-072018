<?php 
	class database{
		public $conn;

		public function connectDB(){
			$this->conn= new mysqli('localhost','root','123456','ql_nhan_su');
			if ($this->conn->connect_error) {
				echo "ko ket noi duoc: ".$this->conn->connect_error;
			}else/*{echo "ket noi thanh cong roi";}*/
			$this->conn->set_charset('utf8');
			return $this->conn;
			
		}
	}

 ?>
 
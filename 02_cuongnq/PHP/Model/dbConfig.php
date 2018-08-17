<?php
    class Database{
        private $hostName    =  'localhost';
        private $userName   =   'root';
        private $passWD     =   'cuong2901';
        private $dbName      =  'ql_ns';

        public function connect(){
            $connect = new mysqli($this->hostName,$this->userName,$this->passWD,$this->dbName);
            $connect->set_charset('utf8');
            if($connect->connect_errno){
                echo " Kết nối thất bại ".mysqli_connect_error();
            }
            return $connect;
        }
    }
?>
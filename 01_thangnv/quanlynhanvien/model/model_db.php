<?php
    class model_db{
        public function get_all($sql){
            global $db;
            $arr[];
            $query=mysqli_query($db,$sql);
            if(mysqli_num_rows($query)==0){
                echo "Rỗng";
            }
            else{
                $arr[]=mysqli_fetch_array($query);
            }
        }

        public function get_count($)
    }
?>
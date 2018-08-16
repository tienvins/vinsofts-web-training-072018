<?php
    class c_edit_team extends controller{
        public function __construct(){
            parent::__construct();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(isset($_GET["image"])){
                    move_uploaded_file($_FILES['image']['tmp_name'], '../image/'.$_FILES['image']['name']);
                    echo 'File Uploaded';
                }
                $id=$_POST["id"];
                $name=$_POST["name"];
                $description=$_POST["description"];
                $leader_id=$_POST["leader_id"]!=0?$_POST["leader_id"]:$_GET['leader_id'];
                $this->model->execute("update teams set name='".$name."',description='".$description."',leader_id='".$leader_id."' where id='".$id."'");
                header("location:index.php?controller=c_teams");
            }
            $list_id_user = $this->model->get_all("select id from users where id not in (select leader_id from teams group by leader_id)");
            sort($list_id_user);
            include "views/v_edit_team.php";
        }
    }
    new c_edit_team();
?>
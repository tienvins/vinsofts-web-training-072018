<?php
    class c_edit_team extends controller{
        public function __construct(){
            parent::__construct();

            $action=$_GET['action'];
            if($action=="delete"){
                $this->model->execute("delete from teams where id ='".$_GET['id']."'");
                echo "<i class='fa fa-check-circle'></i>Deleted";
                header("location:index.php?controller=c_teams");
            }
            else{

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $tb="";
                $image="";

                if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
                    $uploaddir      =   "image";
                    $fileinfo       =   PATHINFO($_FILES['image']['name']);
                    $newfilename    =   "upload_".$fileinfo['filename'].".".$fileinfo['extension'];
                    $newname        =   "images/".$newfilename;
                    $filetmp        =   $_FILES['image']['tmp_name'];

                    if (!file_exists("image/".$newfilename))
                        move_uploaded_file($filetmp,"$uploaddir/$newfilename");
                    
                    $image           =   "$uploaddir/$newfilename";
                        
                }
                else{
                    $image="-1";
                }

                $id=$_POST["id"];
                $leader=$this->model->get_one("select leader_id from teams where id='".$id."'")->leader_id;
                $name=$_POST["name"];
                $description=$_POST["description"];
                $leader_id=$_POST["leader_id"]!=0?$_POST["leader_id"]:$leader;
                $sql="";
                $sqlimg=$image!=-1?",logo='".$image."'":"";

                switch ($action){
                    case "add":
                        $sql="insert into teams values('".$id."','".$name."','".$description."','".$image."','".$leader_id."')";
                        break;

                    default:
                        $sql="update teams set name='".$name."',description='".$description."',leader_id='".$leader_id."' ".$sqlimg." where id='".$id."'";
                        break;
                }
                $this->model->execute($sql);
                $tb="<i class='fa fa-check-circle'></i>";
                header("location:index.php?controller=c_teams");
            }

            $action=$_GET['action'];
            $id=$_GET['id'];    
            $infoid = $this->model->get_one("select * from teams where id='".$id."'");
            $list_id_user = $this->model->get_all("select id from users where id not in (select leader_id from teams group by leader_id)");
            sort($list_id_user);
            include "views/v_edit_team.php";
            }
        }
    }
    new c_edit_team();
?>
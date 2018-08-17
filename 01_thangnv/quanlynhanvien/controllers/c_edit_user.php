<?php
    class c_edit_user extends controller{
        public function __construct(){
            parent::__construct();

            $action=$_GET['action'];
            $id=$_GET['id'];
            $user = $this->m_users->get_id($id);

            if($action=="delete"){
                $this->m_users->delete($id);
                header("location:index.php?controller=c_users");
            }
            else{

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $tb="";
                $data=$_POST;

                if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
                    $uploaddir      =   "images/users";
                    $fileinfo       =   PATHINFO($_FILES['image']['name']);
                    $newfilename    =   "upload_".$fileinfo['filename'].".".$fileinfo['extension'];
                    $newname        =   "images/users/".$newfilename;
                    $filetmp        =   $_FILES['image']['tmp_name'];

                    if (!file_exists("images/users/".$newfilename))
                        move_uploaded_file($filetmp,"$uploaddir/$newfilename");
                    
                    $data["image"]          =   "$uploaddir/$newfilename";
                        
                }
                else{
                    $data["image"] ="-1";
                }

                switch ($action){
                    case "add":
                        $this->m_users->insert($data);
                        break;

                    default:
                        if($data['team_id']==0){
                            $data['team_id']=$user->team_id;
                        }
                        if($data["image"] =="-1"){
                            $this->m_users->update_no_up_img($data);
                        }else{
                            $this->m_users->update($data);
                        }
                        break;
                }
                $tb="<i class='fa fa-check-circle'></i>";
                header("location:index.php?controller=c_edit_user&action=edit&id=".$id);
            }  
            $list_id_team = $this->m_teams->get_all();
            sort($list_id_team);
            $new_id=$this->m_users->get_new_id();
            include "views/v_edit_user.php";
            }
        }
    }
    new c_edit_user();
?>
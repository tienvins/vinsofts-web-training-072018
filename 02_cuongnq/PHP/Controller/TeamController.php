<?php
//    require_once 'Controller.php';
    class TeamController{
        public function showTeam(){
            require_once 'Model/TeamModel.php';
            $teams  = new TeamModel();
            $team   = $teams->showTeamM();
            // var_dump($team);

            require_once 'View/Index_View.php';
            $showteam = new Index_View();
            $showteam->ShowTeam($team);
        }

        // add Team

        public function addTeam(){
            require_once 'Model/TeamModel.php';
            $users      = new TeamModel();
            $user       = $users->getUser();

            require_once 'View/Index_View.php';
            $addteam = new Index_View();
            $addteam->addTeam($user);

        }

        public function insert_team(){
            $name           =   $_POST['name'];
            $description    =   $_POST['description'];
            $leader_id      =   $_POST['leader_id'];

            $uploaddir      =   "Templates/public/images";
            $fileinfo       =   PATHINFO($_FILES['logo']['name']);
            $newfilename    =   "LOGO_TEAM_".$fileinfo['filename']."_".time().".".$fileinfo['extension'];
            $filetmp        =   $_FILES['logo']['tmp_name'];
            if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true){
                echo "upload";
                $logo           =   "$uploaddir/$newfilename";
            }
            else{
                echo "upload";
            }
            $data_team=[
                'name'          => $name,
                'description'   =>  $description,
                'logo'          =>  $logo,
                'leader_id'     =>  $leader_id
            ];

            require_once 'Model/TeamModel.php';
            $teams = new TeamModel();
            $team  = $teams->insert_team($data_team);
        }

        // delete
        public function delete_team(){
            $team_id    = $_GET['team_id'];
            $img    =$_GET['img'];
            $data   =[
                'team_id'    => $team_id,
                'img'   => $img
            ];
            require_once 'Model/TeamModel.php';
            $teams  = new TeamModel();
            $team   = $teams->delete_team($data);

           
        }

        // edit teams
        public function edit_team(){
            $team_id     =   $_GET['team_id'];

            require_once 'Model/TeamModel.php';
            $teams = new TeamModel();
            $team  = $teams->EditTeam($team_id);

            require_once 'Model/TeamModel.php';
            $users      = new TeamModel();
            $user       = $users->getUser();

            require_once 'View/Index_View.php';
            $showteam = new Index_View();
            $showteam->edit_team($team,$user);
        }

        public function update_team(){
            $team_id        =   $_GET['team_id'];
            $team_name      =   $_POST['name'];
            $description    =   $_POST['description'];
            $leader_id      =   $_POST['leader_id'];
            $logo2          =   $_POST['img_hiden'];

            $fileinfo       =   PATHINFO($_FILES['logo']['name']);
            $uploaddir      =   "Templates/public/images";
            $newfilename    =   "LOGO_TEAM_".$fileinfo['filename']."_".time().".".$fileinfo['extension'];
            $filetmp        =   $_FILES['logo']['tmp_name'];
            if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true || $logo != null){
                $logo       =   "$uploaddir/$newfilename";
                unlink($logo2);
            }
            else{
                $logo = $logo2;
            }
            $data_team=[
                'team_id'       =>  $team_id,
                'team_name'     =>  $team_name,
                'description'   =>  $description,
                'logo'          =>  $logo,
                'leader_id'     =>  $leader_id
            ];
            require_once 'Model/TeamModel.php';
            $teams = new TeamModel();
            $team  = $teams->update_team($data_team);

        }
    }

?>
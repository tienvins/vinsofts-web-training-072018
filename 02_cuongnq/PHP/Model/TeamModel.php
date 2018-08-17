<?php
    require_once 'dbConfig.php';
    class TeamModel extends Database {

        public function showTeamM(){
            $conn   =   $this->connect();
            $sql    =   "select * from Teams";
            $result =   $conn->query($sql);

            $teams  =   array();
            if($result->num_rows > 0){
                while ($team  = $result->fetch_assoc()){
                    $teams[] = $team;
                }
            }
            return $teams;
        }

        // lay du lieu users do vao select box
        public function getUser(){
            $conn       = $this->connect();
            $sql        = "select * from Users";
            $result     = $conn->query($sql);

            $users       = array();
            if($result->num_rows > 0){
                while ($user    =   $result->fetch_assoc()){
                    $users[]    =   $user;
                }
            }
            return $users;
        }


        public function insert_team($data_team){
            $conn       = $this->connect();
            $sql        = "INSERT INTO Teams (team_id,team_name,description,logo,leader_id) VALUES (null,'".$data_team['name']."','".$data_team['description']."','".$data_team['logo']."','".$data_team['leader_id']."')";
//            $result   = $conn->query($sql);
            if($result  = $conn->query($sql)==true){
                echo "thành công";
                $url    = 'http://cuong.com/?controller=Team&action=showTeam';
                echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $url . '">';
            }
            else{
                echo 'thất bại';
            }
            return $result;
        }

        public function delete_team($data){
            $conn       =   $this->connect();
            $sql        =   "DELETE FROM Teams WHERE team_id=".$data['team_id'];
            if($result  =   $conn->query($sql)==true){
                unlink($data['img']);
                $url    = 'http://cuong.com/?controller=Team&action=showTeam';
                echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $url . '">';
            }
            else{
                echo 'thất bại';
            }
            return $result;
        }

        public function EditTeam($team_id){
            $conn   =   $this->connect();
            $sql    =   "SELECT t.team_id,t.description,t.team_name,t.logo,u.name,u.id FROM Teams t JOIN Users u ON t.leader_id = u.id where t.team_id=".$team_id;
            $result =   $conn->query($sql);
            $teams  =   array();
            if($result->num_rows > 0){
                while ($team  = $result->fetch_assoc()){
                    $teams[]  = $team;
                }
            }
            return $teams;
        }

        public function update_team($data_team){

            $conn       =   $this->connect();
            $sql        =   "UPDATE Teams SET team_name='".$data_team['team_name']."',description='".$data_team['description']."',logo='".$data_team['logo']."',leader_id='".$data_team['leader_id']."' where team_id=".$data_team['team_id'];
            $result     =   $conn->query($sql);
            return $result;

        }
    }
?>
<?php
require_once 'dbConfig.php';
class UserModel extends Database {

    public function showUser(){
        $conn = $this->connect();
        $sql    =   "SELECT * from Users";
        $result =   $conn->query($sql);
        $users  =   array();
        if($result->num_rows > 0){
            while ($user  = $result->fetch_assoc()){
                $users[] = $user;
            }
        }
        return $users;
    }
    //get Team
    public function getTeams(){
        $conn   =   $this->connect();
        $sql    =   "SELECT * FROM Teams";
        $result =   $conn->query($sql);

        $teams  =   array();
        if($result->num_rows > 0){
            while ($team  = $result->fetch_assoc()){
                $teams[] = $team;
            }
        }
        return $teams;
    }
    //insert user to database
    public function insert_user($data_user){
        $conn   =   $this->connect();
        $sql    =   "INSERT INTO `Users`(`id`, `name`, `email`, `email_personal`, `password`, `remember_token`, `image`, `gender`, `phone_number`, `current_address`, `permanent_address`, `graduate_from`, `salary`, `bank_account_number`, `hobby`, `family_description`, `language_skills`, `leave_days`, `role_id`, `team_id`, `status`) VALUES (null,'".$data_user['name']."','".$data_user['email']."','".$data_user['email_personal']."','".$data_user['password']."','".$data_user['remember_token']."','".$data_user['image']."','".$data_user['gender']."','".$data_user['phone_number']."','".$data_user['current_address']."','".$data_user['permanent_address']."','".$data_user['graduate_from']."','".$data_user['salary']."','".$data_user['bank_account_number']."','".$data_user['hobby']."','".$data_user['family_description']."','".$data_user['language_skills']."','".$data_user['leave_days']."','".$data_user['role_id']."','".$data_user['team_id']."','".$data_user['status']."')";
        if($result  = $conn->query($sql)==true){
            echo " thành công";
            $url    = 'http://cuong.com/?controller=User&action=showUser';
                echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $url . '">';
        }
        else{
            echo ' thất bại';
        }
        return $result;
    }
    //del user
    public function delete_user($data){
        $conn       =   $this->connect();
        $sql        =   "DELETE FROM Users WHERE id=".$data['id'];
        if($result  =   $conn->query($sql)==true){
            
             $url    = 'http://cuong.com/?controller=User&action=showUser';
                echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $url . '">';
        }
        else{
            echo 'thất bại';
        }
        return $result;
    }

    public function edit_user($id){
        $conn   =   $this->connect();
        $sql    =   "SELECT * FROM Users where id=".$id;
        $result =   $conn->query($sql);
        $users  =   array();
        if($result->num_rows > 0){
            while ($user  = $result->fetch_assoc()){
                $users[]  = $user;
            }

        }
        return $users;
    }

    public function update_user($data_user){
        $conn       =   $this->connect();
        $sql        =   "UPDATE Users SET id='".$data_user['id']."',name='".$data_user['name']."',email='".$data_user['email']."',email_personal='".$data_user['email_personal']."',password='".$data_user['password']."',remember_token='".$data_user['remember_token']."',image='".$data_user['image']."',gender='".$data_user['gender']."',phone_number='".$data_user['phone_number']."',hobby='".$data_user['hobby']."',family_description='".$data_user['family_description']."',language_skills='".$data_user['language_skills']."',leave_days='".$data_user['leave_days']."',role_id='".$data_user['role_id']."',team_id='".$data_user['team_id']."',status='".$data_user['status']."' where id=".$data_user['id'];
        $result     =   $conn->query($sql);
        return $result;
    }
}
?>
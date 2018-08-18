<?php
class Index_View{
    public function ShowTeam($team){
        require_once 'Templates/layouts/Teams.php';
    }

    public function addTeam($user){
        require_once 'Templates/layouts/Teams_Insert.php';
    }

    //edit team
    public function edit_team($team,$user){
        require_once 'Templates/layouts/Teams_Update.php';
    }

   // Userssss
    public function ShowUser($user){
        require_once 'Templates/layouts/Users.php';
    }

    public function addUser($team){
        require_once "Templates/layouts/Users_Insert.php";
    }

    public function edit_user($team,$user){
        require_once "Templates/layouts/Users_Update.php";
    }

}
?>
<?php
//    require_once 'Controller.php';
class UserController{
    public function showUser(){
        require_once 'Model/UserModel.php';
        $users = new UserModel();
        $user  = $users->showUser();

        require_once 'View/Index_View.php';
        $showuser = new Index_View();
        $showuser->ShowUser($user);
    }
    public function addUsers(){
        //get team
        require_once 'Model/UserModel.php';
        $teams = new UserModel();
        $team  = $teams->getTeams();

        require_once "View/Index_View.php";
        $user    =   new Index_View();
        $user->addUser($team);

    }
    // insert users
    public function Insert_User(){
        $name               =   $_POST['name'];
        $email              =   $_POST['email'];
        $email_personal     =   $_POST['email_personal'];
        $password           =   $_POST['password'];
        $remember_token     =   $_POST['remember_token'];
        $gender             =   $_POST['gender'];
        $phone_number       =   $_POST['phone_number'];
        $current_address    =   $_POST['current_address'];
        $permanent_address  =   $_POST['permanent_address'];
        $graduate_from      =   $_POST['graduate_from'];
        $salary             =   $_POST['salary'];
        $bank_account_number =   $_POST['bank_account_number'];
        $hobby              =   $_POST['hobby'];
        $family_description =   $_POST['family_description'];
        $language_skills    =   $_POST['language_skills'];
        $leave_days         =   $_POST['leave_days'];
        $role_id            =   $_POST['role_id'];
        $team_id            =   $_POST['team_id'];
        $status             =   $_POST['status'];

        $uploaddir      =   "Templates/public/images";
        $fileinfo       =   PATHINFO($_FILES['image']['name']);
        $newfilename    =   $name."_Avatar_".$fileinfo['filename']."_".time().".".$fileinfo['extension'];
        $filetmp        =   $_FILES['image']['tmp_name'];
        if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true){
            echo "thêm";
            $image           =   "$uploaddir/$newfilename";
        }
        else{
            echo "thêm";
        }

        $data_user  =   [
            'name'                      => $name,
            'email'                     => $email,
            'email_personal'            => $email_personal,
            'password'                  => $password,
            'remember_token'            => $remember_token,
            'image'                     => $image,
            'gender'                    => $gender,
            'phone_number'              => $phone_number,
            'current_address'           => $current_address,
            'permanent_address'         => $permanent_address,
            'graduate_from'             => $graduate_from,
            'salary'                    => $salary,
            'bank_account_number'       => $bank_account_number,
            'hobby'                     => $hobby,
            'family_description'        => $family_description,
            'language_skills'           => $language_skills,
            'leave_days'                => $leave_days,
            'role_id'                   => $role_id,
            'team_id'                   => $team_id,
            'status'                    => $status,
        ];
        require_once 'Model/UserModel.php';
        $users = new UserModel();
        $user  = $users->insert_user($data_user);
    }
    //update
    public function update_user(){
        $id                 =   $_GET['id'];
        $name               =   $_POST['name'];
        $email              =   $_POST['email'];
        $image2              =   $_POST['img_hiden'];
        $email_personal     =   $_POST['email_personal'];
        $password           =   $_POST['password'];
        $remember_token     =   $_POST['remember_token'];
        $gender             =   $_POST['gender'];
        $phone_number       =   $_POST['phone_number'];
        $current_address    =   $_POST['current_address'];
        $permanent_address  =   $_POST['permanent_address'];
        $graduate_from      =   $_POST['graduate_from'];
        $salary             =   $_POST['salary'];
        $bank_account_number =   $_POST['bank_account_number'];
        $hobby              =   $_POST['hobby'];
        $family_description =   $_POST['family_description'];
        $language_skills    =   $_POST['language_skills'];
        $leave_days         =   $_POST['leave_days'];
        $role_id            =   $_POST['role_id'];
        $team_id            =   $_POST['team_id'];
        $status             =   $_POST['status'];

        $uploaddir      =   "Templates/public/images";
        $fileinfo       =   PATHINFO($_FILES['image']['name']);
        $newfilename    =   $name."_Avatar_".$fileinfo['filename']."_".time().".".$fileinfo['extension'];
        $filetmp        =   $_FILES['image']['tmp_name'];
        if(move_uploaded_file($filetmp,"$uploaddir/$newfilename")==true || $image != null){
            $image           =   "$uploaddir/$newfilename";
            unlink($image2);
        }
        else{
            $image           =  $image2;
        }

        $data_user  =   [
            'id'                        => $id,
            'name'                      => $name,
            'email'                     => $email,
            'email_personal'            => $email_personal,
            'password'                  => $password,
            'remember_token'            => $remember_token,
            'image'                     => $image,
            'gender'                    => $gender,
            'phone_number'              => $phone_number,
            'current_address'           => $current_address,
            'permanent_address'         => $permanent_address,
            'graduate_from'             => $graduate_from,
            'salary'                    => $salary,
            'bank_account_number'       => $bank_account_number,
            'hobby'                     => $hobby,
            'family_description'        => $family_description,
            'language_skills'           => $language_skills,
            'leave_days'                => $leave_days,
            'role_id'                   => $role_id,
            'team_id'                   => $team_id,
            'status'                    => $status,
            ];
        require_once 'Model/UserModel.php';
        $users = new UserModel();
        $user  = $users->update_user($data_user);
    }
    // delete user
    public function delete_user(){
        $id    =   $_GET['id'];
        $img        =   $_GET['img'];
        $data       =[
            'id'    => $id,
            'img'   => $img
        ];
        require_once 'Model/UserModel.php';
        $users  = new UserModel();
        $user   = $users->delete_user($data);
    }

    public function edit_user(){
        $id         =   $_GET['id'];

        require_once "Model/UserModel.php";
        $users      = new UserModel();
        $user      = $users->edit_user($id);

        require_once "Model/UserModel.php";
        $teams      = new UserModel();
        $team      = $teams->getTeams();

        require_once 'View/Index_View.php';
        $edit_user = new Index_View();
        $edit_user->edit_user($team,$user);
    }
}

?>
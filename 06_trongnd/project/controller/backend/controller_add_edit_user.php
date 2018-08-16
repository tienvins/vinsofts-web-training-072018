<?php
    class controller_add_edit_user extends controller{
        public function __construct(){
            parent:: __construct();
            $act=isset($_GET["act"])?$_GET["act"]:"";
            
            switch($act){
                case "edit":
                    $id = isset($_GET["id"])?$_GET["id"]:0;
                    $form_action="admin.php?controller=add_edit_user&act=do_edit&id=$id";
                        $arr = $this->model->fetch_one("select * from tbl_user where pk_user_id=$id");
                    include "view/backend/view_add_edit_user.php";
                    
                break;
                case "do_edit":
                    $id = isset($_GET["id"])?$_GET["id"]:0;
                    $name = $_POST["name"];
                    $email=$_POST["email"];
                    $email_personal=$_POST["email_personal"];
                    $password=$_POST["password"];
                    $image="";
                    $gender = $_POST["gender"];
                    $salary=$_POST["salary"];
                    $date_of_birth=$_POST["date_of_birth"];
                    $identify_id=$_POST["identify_id"];
                    $phone_number=$_POST["phone_number"];
                    $current_address=$_POST["current_address"];
                    $permanent_address=$_POST["permanent_address"];
                    $graduate_from=$_POST["graduate_from"];
                    $bank_account_number=$_POST["bank_account_number"];
                    $hobby=$_POST["hobby"];
                    $family_description=$_POST["family_description"];
                    $language_skills=$_POST["language_skills"];
                    $leave_days=$_POST["leave_days"];
                    $role_id=$_POST["role_id"];
                    $team_id=$_POST["team_id"];
                    $status=$_POST["status"];

                    $image = $_FILES["image"]["name"];
                    if($image != ""){
                        //--------------
                      $old_img = $this->model->fetch_one("select * from tbl_user where pk_teams_id=$id");
                        unlink("public/upload/".$old_img->image);
                        //--------------
                        $tmp = $_FILES["image"]["tmp_name"];
                        $image = time().$image;
                        move_uploaded_file($tmp,"public/upload/$image");
                        $this->model->execute("update tbl_user set image='$image' where pk_teams_id=$id");
                     }
                    $this->model->execute("update tbl_user set name='$name',email='$email',email_personal='$email_personal',password='$password',image='$image',gender=$gender,salary=$salary,date_of_birth='$date_of_birth',identify_id='$identify_id',phone_number=$phone_number,current_address='$current_address',permanent_address='$permanent_address',graduate_from='$graduate_from',bank_account_number='$bank_account_number',hobby='$hobby',family_description='$family_description',language_skills='$language_skills',leave_days=$leave_days,role_id=$role_id,team_id=$team_id,status=$status where pk_user_id=$id");
                   
                      //header ("location:admin.php?controller=user");
                      //echo "update tbl_user set name='$name',description='$description',image='$image',leader_id=$leader_id where pk_user_id=$id";
                      //----------------
                      //upload ảnh
                    // $image="";
                    // $image = $_FILES["image"]["name"];
                    // if($image != ""){
                    //     //--------------
                    //   $old_img = $this->model->fetch_one("select * from tbl_user where pk_user_id=$id");
                    //     unlink("public/upload/".$old_img->image);
                    //     //--------------
                    //     $tmp = $_FILES["image"]["tmp_name"];
                    //     $image = time().$image;
                    //     move_uploaded_file($tmp,"public/upload/$image");
                    //     $this->model->execute("update tbl_user set image='$image' where pk_user_id=$id");
                    //  }
          //----------------

                    $url    = 'admin.php?controller=user';
                    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $url . '">';
                break;

                case "add":
                    
					$form_action = "admin.php?controller=add_edit_user&act=do_add";
					//load view
					include "view/backend/view_add_edit_user.php";
                    break;
                case "do_add":
                    $name = $_POST["name"];
                    $email=$_POST["email"];
                    $email_personal=$_POST["email_personal"];
                    $password=$_POST["password"];
                    
                    $gender = $_POST["gender"];
                    $salary=$_POST["salary"];
                    $date_of_birth=$_POST["date_of_birth"];
                    $identify_id=$_POST["identify_id"];
                    $phone_number=$_POST["phone_number"];
                    $current_address=$_POST["current_address"];
                    $permanent_address=$_POST["permanent_address"];
                    $graduate_from=$_POST["graduate_from"];
                    $bank_account_number=$_POST["bank_account_number"];
                    $hobby=$_POST["hobby"];
                    $family_description=$_POST["family_description"];
                    $language_skills=$_POST["language_skills"];
                    $leave_days=$_POST["leave_days"];
                    $role_id=$_POST["role_id"];
                    $team_id=$_POST["team_id"];
                    $status=$_POST["status"];
                    // var_dump($email_personal);
                    // die();
                    $image   = time().$_FILES["image"]["name"];
                      if($image != ""){
                        $tmp   = $_FILES["image"]["tmp_name"];
                        $image = time().$image;

                        move_uploaded_file($tmp,"public/upload/$image");
                      }
                    
                    $this->model->execute("insert into tbl_user(name,email,email_personal,password,image,gender,date_of_birth,identify_id,phone_number,current_address,permanent_address,graduate_from,salary,bank_account_number,hobby,family_description,language_skills,leave_days,role_id,team_id,status) values('$name','$email','$email_personal','$password','$image','$gender','$date_of_birth','$identify_id','$phone_number','$current_address','$permanent_address','$graduate_from','$salary','$bank_account_number','$hobby','$family_description','$language_skills','$leave_days','$role_id','$team_id','$status')");
                   
                  
                    $url    = 'admin.php?controller=user';
                    echo '<META HTTP-EQUIV=REFRESH CONTENT="1; ' . $url . '">';

                    //insert into tbl_user (name,email,email_personal,password,remember_token,image,gender,date_of_birth,identify_id,phone_number,current_address,permanent_address,graduate_from,salary,bank_account_number,hobby,family_description,language_skills,leave_days,role_id,team_id,status) values('$name','$email','$email_personal','$password','$remember_token','$image',$gender,'$date_of_birth','$identify_id',$phone_number,'$current_address','$permanent_address','$graduate_from',$salary,'$bank_account_number','$hobby','$family_description','$language_skills',$leave_days,$role_id,$team_id,$status 
                break;
                default:
                    # code...
                    break;
            }
          
           
        }
    }
    new controller_add_edit_user();
?>
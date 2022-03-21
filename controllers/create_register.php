<?php
    require_once "../models/user.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_first_name=$_POST['first_name'];
        $user_last_name=$_POST['last_name'];
        $user_email=$_POST['email'];
        $user_password=$_POST['password'];
        $user_birth=$_POST['date'];
        $user_gender=$_POST['gender'];
        $users=get_users();
        $is_has_account= false;
        foreach($users as $user){
            $old_user_first_name=$user['user_first_name'];
            $old_user_last_name=$user['user_last_name'];
            $old_user_email=$user['user_email'];
            $old_user_password=$user['user_password'];
            if($user_first_name===$old_user_first_name and $user_last_name===$old_user_last_name and $user_email===$old_user_email and $user_password==$old_user_password and !$is_has_account){
                $is_has_account= true;
            }
        }
        if($is_has_account){
            header('Location: ../register.php');
        }else{
            
            if(!empty($user_first_name) and !empty($user_last_name) and !empty($user_email) and !empty($user_password) and !empty($user_birth) and !empty($user_gender)){
                $is_registered=user_register($user_first_name, $user_last_name,$user_email,$user_password,$user_birth,$user_gender);
                if($is_registered >0 ){
                header("Location: ../index.php");
                }
            }else{
                header('Location: ../register.php');
            }
        }
    }

?>
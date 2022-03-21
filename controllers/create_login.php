
<?php
require_once "../models/user.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $users=get_users();
    $is_have_account=false;
    foreach($users as $user):
    $user_email= $user['user_email'];
    $user_password=$user['user_password'];
    if($email === $user_email and $password === $user_password and !$is_have_account){
        $is_have_account = True;
    }
    endforeach;
    if($is_have_account){
        header('Location: ../index.php');
    }
    else{
        header('Location: ../login.php');
        $woring="You are woring something !";
        $_SESSION["login"]=$woring;
    }
}

?>
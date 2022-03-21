
<?php
require_once "database.php";
// insert data to database
function user_register($user_first_name, $user_last_name,$user_email,$user_password,$user_birth,$user_gender)
{
    echo $user_first_name;
    global $database;
    $statment =$database->prepare("INSERT INTO users(user_first_name, user_last_name,user_email,user_password,user_birth,user_gender) VALUE(:user_first_name,:user_last_name,:user_email,:user_password,:user_birth,:user_gender)");
    $statment->execute([
        ':user_first_name'=>$user_first_name,
        ':user_last_name'=>$user_last_name,
        ':user_email'=>$user_email,
        ':user_password'=>$user_password,
        ':user_birth'=>$user_birth,
        ':user_gender'=>$user_gender,
    ]);
    return $statment->rowCount() >0 ;
}

// get data from database
function get_users()
{
    global $database;
    $statment = $database->prepare("SELECT *FROM users ORDER BY user_id DESC");
    $statment->execute();
    return $statment->fetchAll();
}

function get_user_id()
{
    global $database;
    $statment = $database->prepare("SELECT *FROM users");
    $statment->execute();
    return $statment->fetch();
}
?>
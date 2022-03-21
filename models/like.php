<?php
    require_once "database.php";
    function get_likes()
    {
        global $database;
        $statment = $database->prepare("SELECT *FROM likes ORDER BY post_id DESC");
        $statment->execute();
        return $statment->fetchAll();
    }
//create like number 
function create_like($user_id,$post_id)
{
    global $database;
    $statment =$database->prepare("INSERT INTO likes(user_id,post_id) VALUE(:user_id,:post_id);");
    $statment->execute([
        ':user_id'=>$user_id,
        ':post_id'=>$post_id,
    ]);
    return $statment->rowCount() >0 ;
} 
// get number of like by ID
function get_like_ById($post_id)
{
    global $database;
    $statment = $database->prepare("SELECT *FROM likes where post_id = :post_id");
    $statment->execute([
        ':post_id' => $post_id,
    ]);
    $result = $statment->fetch(); 
    return $result;
}

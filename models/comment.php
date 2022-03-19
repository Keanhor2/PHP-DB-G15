<?php 
// connect to database
require_once "database.php";

function create_comment($comment_content,$user_id,$post_id)
{
    global $database;
    $statment =$database->prepare("INSERT INTO comments(content,user_id,post_id) VALUE(:comment_content,:user_id,:post_id);");
    $statment->execute([
        ':comment_content'=>$comment_content,
        ':user_id'=>$user_id,
        ':post_id'=>$post_id
    ]);
    return $statment->rowCount() >0 ;
}
// get comments
function get_comments()
{
    global $database;
    $statment = $database->prepare("SELECT *FROM comments ORDER BY comment_id DESC");
    $statment->execute();
    return $statment->fetchAll();
}
// get comment
function get_comment_ById($post_id)
{
    global $database;
    $statment = $database->prepare("SELECT *FROM comments where post_id = :post_id");
    $statment->execute([
        ':post_id' => $post_id,
    ]);
    $result = $statment->fetch(); 
    return $result;
}
?>
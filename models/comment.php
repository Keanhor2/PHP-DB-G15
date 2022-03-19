<?php 
// connect to database
require_once "database.php";

function create_comment($comment_content,$user_id,$post_id)
{
    global $database;
    $statment =$database->prepare("INSERT INTO comments(comment_content,user_id,post_id) VALUE(:comment_content,:user_id,:post_id);");
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
function get_comment_ById($comment_id)
{
    global $database;
    $statment = $database->prepare("SELECT *FROM comments where comment_id = :comment_id");
    $statment->execute([
        ':comment_id' => $comment_id,
    ]);
    $result = $statment->fetch(); 
    return $result;
}
?>
<!-- To update the comment -->
<?php 
function update_comments($comment_id,$comment_content)
{
    global $database;
    $statment = $database->prepare("UPDATE comments SET comment_content = :comment_content where comment_id =:comment_id");
    $statment->execute([
        ':comment_id'=>$comment_id,
        ':comment_content'=>$comment_content
    ]);
}

?>
<!-- To delete comments -->
<?php
    function delete_comment($comment_id)
    {
       global $database;
       $statment = $database->prepare("DELETE FROM comments WHERE comment_id = :comment_id");
       $statment->execute([':comment_id' => $comment_id]);
    }
?>
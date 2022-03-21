<?php 
require_once "../models/comment.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $comment_content =$_POST['comment_content'];
    $post_id = $_POST['post_id'];
    
    // check condition 
    if(!empty($comment_content)){
        create_comment( $comment_content,1,$post_id);
        header('Location:../newfeed_views/newfeed_view.php');
    }
}
?>
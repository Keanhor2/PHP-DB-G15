<?php
    // PDO statement   
    require "../models/comment.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $comment_id = $_POST['comment_id'];
        $comment_content = $_POST['comment_content'];    
        if(!empty($comment_content))
        {
            update_comments($comment_id,$comment_content);
            header('Location:../index.php');
            
        }
    }

?>
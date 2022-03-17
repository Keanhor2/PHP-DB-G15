<?php
    // PDO statement   
    require_once "../models/post.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
       
            update_posts($post_id, $post_content, $post_image);
            header('Location:../index.php');
        }

?>
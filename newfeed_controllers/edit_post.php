<?php
    // PDO statement   
    require "../models/post.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $post_id = $_POST['post_id'];
        $post_content = $_POST['post_content'];
        $post_image = $_POST['post_image'];
    
        if(!empty($post_content) and !empty($post_image))
        {
            update_posts($post_id,$post_content,$post_image);
            header('Location:../newfeed_views/newfeed_view.php');
            
        }
    }

?>
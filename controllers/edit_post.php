<?php
    // PDO statement   
    require_once "../models/post.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $post_id = $_POST['post_id'];
        $post_content = $_POST['post_content'];
        $post_image = $_POST['post_image'];
    
        if(!empty($post_content) and !empty($post_image))
        {
            // $database->prepare("UPDATE item SET item = '$item' ,price = '$price'where id='$id'" );
            update_posts($post_id,$post_content,$post_image);
            header('Location:../index.php');
            
        }
    }

?>
<?php 
    // get vlaue input
    require_once('../models/post.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $post_content=$_POST['post_content'];
        $post_image=$_FILES['image']['name'];
        $folder = "../images/".$post_image;
        move_uploaded_file($_FILES['image']['tmp_name'],$folder);
        // check condition 

        if(!empty($post_content) or !empty($post_image)){
            $isCreated = create_posts( $post_content,$post_image,1);
            if($isCreated>0){
                   header('Location:../newfeed_views/newfeed_view.php');

            }else{
                header('location:../newfeed_views/creat_view.php');
            }
        }
        else{
               header('Location:../newfeed_views/newfeed_view.php');

        }
    }
?>
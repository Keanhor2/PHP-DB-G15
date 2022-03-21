<?php 
require_once "../models/like.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $user_id = $_POST['user_id'];
    $post_id = $_POST['post_id'];
    $like_number = 0;
    // check condition 
    while($like_number <= 0) {
        $like_number++;
        create_like($user_id,$post_id);
        header('Location:../newfeed_views/newfeed_view.php');

      } 
  
}
?>
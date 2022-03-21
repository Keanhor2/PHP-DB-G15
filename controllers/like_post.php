<?php 
// require_once "../models/comment.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $submit =$_POST['submit'];
    $post_id = $_POST['post_id'];
    $like_number=0;
    // check condition 
    if(!empty($submit.checked)){
        $like_number =1;
        header('location:../index.php');
    }
}
?>
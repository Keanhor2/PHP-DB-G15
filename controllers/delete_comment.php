
<?php
// call folder of function
require_once('../models/comment.php');
// action to delete 

isset($_GET['id'])? $comment_id=$_GET['id']:$comment_id=null;
if($comment_id!==null)
{
   delete_comment($comment_id);
    header("Location: ../index.php");
}
?>
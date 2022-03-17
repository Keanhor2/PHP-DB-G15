
<?php
// call folder of function
require_once('../models/post.php');
// action to delete 

isset($_GET['id'])? $id=$_GET['id']:$id=null;
if($id!==null)
{
   delete_posts($id);
    header("Location: ../index.php");
}
?>



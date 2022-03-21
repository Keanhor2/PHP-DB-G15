<?php 
    require_once "../templates/header.php";
?>
<div class="container_index d-flex">
        <div class="container mt-5">
                <?php 
                    require "../models/comment.php";
                    $comment_id =$_GET['id'];
                    $comment=get_comment_ById($comment_id);
                ?>  
                <form action="../newfeed_controllers/edit_comment.php" method="post" >
                    <div class="mb-3">
                        <input type="hidden" class="form-control" value="<?php echo $comment['comment_id']?>" name="comment_id">
                        <input type="text" class="form-control" value="<?=$comment['comment_content']?>" name="comment_content">
                    </div>
                    <div class="button mt-3 d-grid">
                        <button name="button" type="submit"class="btn btn-primary">Update comment</button>
                    </div>
                </form>
        </div>
    </section>
</div>    
<?php 
    require_once "../templates/footer.php"
?>
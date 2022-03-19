
<div class="div_comment ">
    <form action="../controllers/comment_post.php" method="post">
        <input type="hidden" class="form-control" value="<?php echo $post['post_id']?>" name="post_id">
        <input type="text"name="comment_content"placeholder="comment here..."class="comment"required>
        <input type="submit"name="submit"value="post comment">
    </form><br>
    <div class="btn_comment ">
        <div class="card_comment" mt-3>
        <?php
            require_once "models/comment.php";
            $comments =  get_comments();
            $number_comment = 0;
            foreach ($comments as $comment):
                if($post['post_id'] == $comment['post_id']){
                    $number_comment +=1;
        ?>
            <div class="card"> 
                <div class="card-body">
                    <p class="card-text"><?=$comment['comment_content']?></p>
                    <div class=" d-flex justify-content-end ">
                            <a href="views/edit_comment_view.php?id=<?php echo $comment['comment_id']?>"> <i class="fas fa-pencil-alt fas me-2"></i></a>
                            <a href="../controllers/delete_comment.php?id=<?php echo $comment['comment_id']?>"> <i class="fa fa-trash"></i></a>
                        </div>
                    <hr class=" line w-75 h-5">
                </div> 
               
            </div> <br>
            <?php
                }
            endforeach;
            ?>
    </div>
</div>

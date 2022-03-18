<div class="profile_body">
            <div class="to_post">
                <form action="../controllers/create_post.php" method="post" class="form_post" enctype="multipart/form-data">
                    <div class="post_title">Do you want to post something?</div>
                    <div>
                        <input type="text"name="post_content"class="post_content" placeholder="content...">
                    </div>
                    <div>
                        <input  type="file" name="image" >
                    </div>
                    <div>   
                        <input class="button_post" type="submit"name="submit" value="Post">
                    </div>
                </form>
                <div class="container" mt-3>
                    <?php
                        require_once "models/post.php";
                        $posts = get_posts();
                        foreach ($posts as $post):
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><?= $post['post_content'] ?></p> <hr class=" line w-75 h-5">
                            <div class=" d-flex justify-content-end ">
                                <a href="views/edit_view.php?id=<?php echo $post['post_id']?>"><i class="	fas fa-pencil-alt 	fas me-2"></i></a>
                                <a href="controllers/delete_post.php?id=<?php echo $post['post_id']?>"> <i class="fa fa-trash"></i></a>
                            </div>
                            <div class="image_post d-flex justify-content-center">
                                <img src="images/<?= $post['post_image']?>" alt="" width="400">
                            </div>
                            <div class="number_like d-flex justify-content-around">
                                <p>2k like</p>
                                <p>515 comment</p>
                            </div> <hr>
                            
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
</script>



        <div class="profile_body">
            <div class="to_post">
                <form action="../index.php"method="post" class="form_post">
                    <div class="post_title">Do you want to post something?</div>
                    <div>
                    <input type="text"name="post_content"class="post_content" placeholder="content...">
                    </div>
                    <div>
                        <label for="imageFile">Select some images:</label>
                        <input name="post_image" type="file"onchange="readURL(this);" id="imageFile" accept="image/gif, image/jpeg, image/png" multiple>
                    </div>
                    <div>
                        <input class="button_post" type="submit"name="submit" value="Post">
                    </div>
                </form>
            </div>
        </div>
</script>
<?php 
    require_once "models/post.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(!empty($_POST['post_content'])and !empty($_POST['post_image']))
        {
            // print_r($_POST);
            create_posts($_POST);
        }
    }

?>
<div class="container" mt-3>
    <?php
        $posts = get_posts();
        // print_r($posts);
        foreach ($posts as $post):
    ?>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><?= $post['post_content'] ?></p><br>
            <p class="card-text"><?= $post['post_image'] ?></p><br>
        </div>
    </div>
    <?php endforeach; ?>
</div>
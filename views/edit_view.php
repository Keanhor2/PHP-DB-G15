<?php 
    require_once "../templates/header.php";
?>
<div class="container_index d-flex">
    <section class="section1">section1</section>
    <section class="section2">
        <div class="profile_header">
           <div class="cover_profile">
               <img class="cover_pro_size" src="../images/bg_img1.jpg" alt="">
               <div class="change_cover">Change Cover</div>
           </div>
           <div class="profile_info">
               <div class="profile_logo">
                    <img class="profile_logo_size" src="../images/lotus_img1.jpg" alt="">
                    <div class="change_profile">Change Profile</div>
               </div>
               <div class="more_info">
                   <ul>
                       <li><a href="">About</a></li>
                       <li><a href="">Friend</a></li>
                       <li><a href="">Photo</a></li>
                   </ul>
               </div>
           </div>
        </div>
        <div class="container mt-5">
                <?php 
                    require "../models/post.php";
                    $post_id =$_GET['id'];
                    $post=get_posts_ById($post_id);
                ?>  
                <form action="../controllers/edit_post.php" method="post" >
                    <div class="mb-3">
                        <input type="hidden" class="form-control" value="<?php echo $post['post_id']?>" name="post_id">
                        <input type="text" class="form-control" value="<?=$post['post_content']?>" name="post_content">
                    </div>
                    <div class="mb-3">
                        <input type="file" name="post_image" value="<?=$post['post_image']?>">
                    </div>
                    <div class="button mt-3 d-grid">
                        <button name="button" type="submit"class="btn btn-primary">Update</button>
                    </div>
                </form>
                </div>
            </div>
    </section>
</div>
            
<?php 
    require_once "../templates/footer.php"
?>
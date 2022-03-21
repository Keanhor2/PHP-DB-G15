    <?php 
    // get vlaue input
    require_once('../models/post.php');
    require_once('../models/user.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $post_content=$_POST['post_content'];
        $get_user_id = get_user_id();
        $user_id = $get_user_id["user_id"];
        $post_image=$_FILES['image']['name'];
        $folder = "../images/".$post_image;
        move_uploaded_file($_FILES['image']['tmp_name'],$folder);
        // check condition 
        if(!empty($post_content) or !empty($post_image)){
            $isCreated = create_posts( $post_content,$post_image,$user_id);
            if($isCreated>0){
                header('location:../index.php');
            }else{
                header('location:../views/create_view.php');
            }
        }
        else{
            header('location:../index.php');
        }
    }
?>
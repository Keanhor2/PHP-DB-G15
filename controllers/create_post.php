    <?php 
    // get vlaue input
    require_once('../models/post.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $post_content=$_POST['post_content'];
        $post_image=$_FILES['image']['name'];
        $folder = "../images/".$post_image;
        // echo $folder;
        move_uploaded_file($_FILES['image']['tmp_name'],$folder);
        $isCreated = create_posts( $post_content,$post_image,1);
       // check condition 
        if($isCreated>0){
            header('location:../index.php');
        }else{
            header('location:../views/create_view.php');
        }
    }
    

?>
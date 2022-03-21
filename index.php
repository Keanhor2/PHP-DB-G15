<?php
require_once "templates/header.php";
?>
<?php
    require_once('models/post.php');
    $user_profile = get_user_profile();
                    
?>
<div class="container_index d-flex">
    <!-- Section 1 -->
    <section class="section1">
        <div class="personal_data">
            <div class="profile_data">
                <div class="profile_image">
                    <img src="user_profile/<?=$user_profile["user_profile"]?>" alt="" width="100" height="90">
                </div>
                <div class="profile_name">
                 <p><?=$user_profile["user_first_name"].' '.$user_profile["user_last_name"]?></p>  
                </div>
            </div>
            <div class="information_data">
                <ul>
                    <li class="fa fa-globe fs-3"> Information</li>
                    <li class="fa fa-home"> Owner at</li>
                    <li class="fas fa-city"> Live in</li>
                    <li class="fa fa-heart"> Single</li>
                    <li class="fa fa-map-marker"> From</li>
                </ul>
            </div>
            <div class="edit_data">
                <a class="fa fa-edit" href=""></a>
            </div>
        </div>
        <div class="photos">photos
         
        </div>
        <div class="friends">friends

        </div>
    </section>
    <!-- Section2 -->
    <section class="section2">
        <div class="profile_header">
           <div class="cover_profile">
               <img class="cover_pro_size" src="../images/bg_img1.jpg" alt="">
               <div class="change_cover"> 
                <label>
                    <i class="fa fa-image fs-3 text-primary "></i>
                    <input  type="file" name="profile" style="display:none" >
                </label> 
            </div>
           </div>
           <div class="profile_info">
               <div class="profile_logo">
                    <img class="profile_logo_size" src="user_profile/<?=$user_profile["user_profile"]?>" alt="" width="175" height="175" >
                    <form action="controllers/update_profile.php" method="post" enctype="multipart/form-data">
                        <div class="change_profile">
                        <label>
                            <i class="fa fa-camera fs-5 text-primary ms-5 "></i>
                            <input  type="file" name="profile" style="display:none"  >
                            <button type="submit" class="btn btn-white "><i class="fa fa-save fs-5 "></i></button>
                        </label>            
                    </form>   
                    </div>
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
        <?php 
            require_once "views/create_view.php";
        ?>
    </section>
</div>

<?php require_once "templates/footer.php";?>
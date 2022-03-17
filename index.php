<?php
require_once "templates/header.php";


?>
<nav class="navbar">
    <ul class="navbar_left">
    <li ><a class="fb_logo fab fa-facebook" href=""></a></li>
    </ul>
    <ul class="navbar_mid d-flex">
        <li ><a class="navbar_friend fas fa-user-friends" href=""></a></li>
        <li><a class="navbar_notification fas fa-bell" href=""></a></li>
        <li class="search_form">
            <form action="#" class="d-flex">
                <input class="input_search " type="text"placeholder="search for people places and things..."name="search">
                <button class=" input_button btn btn-primary fab fa-sistrix"></button>                
            </form>
        </li>
    </ul>
    <ul class="navbar_right">
        <li><a class="fas fa-user-circle" href=""></a></li>
    </ul>
</nav>
<div class="container_index d-flex">
    <section class="section1">section1</section>
    <section class="section2">
        <div class="profile_header">
           <div class="cover_profile">
               <img class="cover_pro_size" src="images/bg_img1.jpg" alt="">
               <div class="change_cover">Change Cover</div>
           </div>
           <div class="profile_info">
               <div class="profile_logo">
                    <img class="profile_logo_size" src="images/lotus_img1.jpg" alt="">
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
        <?php 
            require_once "views/create_view.php";
        ?>
    </section>
</div>

<?php require_once "templates/footer.php";?>
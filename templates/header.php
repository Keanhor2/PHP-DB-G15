<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook 2.0</title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- link for icon fontawesome 4-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JS connections -->
    <script src="../js/hide_show_comment.js" defer></script>
    
    <!--  -->
    <script src="js/script.js" defer></script>
    <!-- Your style here -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<nav class="navbar">
    <ul class="navbar_left">
    <li ><a class="fb_logo fab fa-facebook" href="../index.php"></a></li>
    </ul>
    <ul class="navbar_mid d-flex">
        <li><a class="navbar_newfeed fa fa-home fs-4" href="../newfeed_views/newfeed_view.php"></a></li>
        <li ><a class="navbar_friend fas fa-user-friends fs-4" href=""></a></li>
        <li><a class="navbar_notification fas fa-bell fs-4" href=""></a></li>
        <li class="search_form">
            <!-- <form action="#" class="d-flex">
                <input class="input_search " type="text"placeholder="search for people places and things..."name="search">
                <button class=" input_button btn btn-primary fab fa-sistrix"></button>                
            </form> -->
            <form action="" id="search-post" class="d-flex">
                <input type="text" class="input_search" placeholder="Search post..." />
            </form>
        </li>
    </ul>
    <ul class="navbar_right">
        <li><a class="fas fa-user-circle fs-3" href="../index.php"></a></li>
    </ul>
</nav>
<?php
require_once "templates/header.php";
?>

<h1 class="text-primary text-center mt-2">facebook</h1>
<div class="form_contianer d-flex justify-content-center mt-3">
<form action="controllers/create_login.php" class="w-50 mt-2 border p-4 shadow-sm p-3 mb-5 bg-white rounded" method="post" >
    <h5 class="text-center text-primary">LOG IN</h5>
    <div class="form-group mt-4">
    <input type="email" class="form-control" placeholder="email" name="email" >
    <?php                      
    ?>
    </div>
    <div class="form-group mt-4">
    <input type="password" class="form-control" placeholder="Enter password" name="password">
    </div>
    <button type="submit" class=" form-control btn btn-primary mt-4">Log In</button>
    <p> </p>
    <div class="link d-flex justify-content-around">
        <a href="" class="text-center">forget password?</a>
        <a href="views/register.php" class="text-center">Sign up for facebook?</a>
    </div>
</form>
</div>

<?php require_once "templates/footer.php";?>
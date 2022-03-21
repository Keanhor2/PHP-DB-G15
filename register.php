<?php
require_once "templates/header.php";
?>

  <h1 class="text-primary text-center mt-2">facebook</h1>
  <div class="form_contianer d-flex justify-content-center mt-3">
    <form action="controllers/create_register.php" class="w-50 mt-2 border p-4 shadow-sm p-3 mb-5 bg-white rounded " method="post" >
      <h5 class="text-center text-success">CREATE NEW ACCOUNT</h5>
      <div class="row"> 
      <div class="col">
        <input type="text" class="form-control"  placeholder="First Name" name="first_name">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Last Name" name="last_name">
      </div>
      </div>
      <div class="form-group mt-3">
        <input type="email" class="form-control" placeholder="email" name="email" >
      </div>
      <div class="form-group mt-3">
        <input type="password" class="form-control" placeholder="Enter password" name="password">
      </div>
      <div class="form-group mt-3">
        <span>Birthday?</span>
        <input type="date" class="form-control" name="date">
      </div>
      <div class="form-group mt-3">
      <span>Gender?</span>
      <select name="gender" id="cars"  class="form-control">
        <option value="M">Male</option>
        <option value="F">Female</option>
      </select>
      </div>

      <button type="submit" class=" form-control btn btn-primary mt-4">Rigister</button>
      <a href="login.php" class="text-center">Alread have an account</a>
    </form>
  </div>
<?php require_once "templates/footer.php";?>
<!-- include php header -->
<?php include('header.php'); ?>

<!-- form part begins here -->
<form class="container" action="addData.php" method="post">
  <div class="form-group">
    <label for="userName" class="mt-4">Username</label>
    <input type="text" class="form-control" id="userName" placeholder="Enter username" name="username">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password1" placeholder="Enter password" name="password1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="password2" placeholder="Enter password" name="password2">
  </div>
  <button type="submit" class="btn btn-primary" name="register">Register</button>
</form>
<!-- form part ends here -->

<!-- include footer file -->
<?php include('footer.php') ?>
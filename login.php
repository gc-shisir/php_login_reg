<!-- include header files -->
<?php include('header.php'); ?>


<!-- form begins here -->
<form class="container" action="loginCode.php" method="post">
  <div class="form-group">
    <label for="email" class="mt-4">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="login">Login</button>
</form>
<!-- form ends here -->


<!-- inlcude footer file -->
<?php include('footer.php') ?>

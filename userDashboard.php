<?php 
include 'header.php';
session_start();
if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
    header('location:login.php');
}
?>
<p class="display-1">Lorem ipsum dolor sit amet.</p>
<h1><?php echo $_SESSION['email']; ?></h1>
<a href="logout.php" class="btn btn-primary">Logout</a>

<?php
include 'footer.php';
?>
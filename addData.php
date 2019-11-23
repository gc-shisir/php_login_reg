<?php
    require('db.php');
    if(isset($_POST['register']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password1=$_POST['password1'];
        $password2=$_POST['password2'];
        // echo $username;
    }
    $query="INSERT INTO register(username,email,password1,password2) VALUES('$username','$email','$password1','$password2')";
    $sql=mysqli_query($conn,$query);
    if($sql){
        header("location:register.php");
    }

?>
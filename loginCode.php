<?php
    if(isset($_POST['login']))
    {
        $userEmail=$_POST['email'];
        $userPassword=$_POST['password'];
        // echo $userEmail." ";
        session_start();
        $_SESSION['email']=$userEmail;
        $_SESSION['password']=$userPassword;

        include 'db.php';
        $query="SELECT * FROM register";
        $sql=mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($sql))
        {
            $id=$row['id'];
            $email=$row['email'];
            $pass=$row['password1'];
            if($email==$_SESSION['email'] && $pass==$_SESSION['password'])
            {
                header('location:userDashboard.php');
            }

                
        }
        echo "either email or password is wrong";
        

    
    }

    

?>
<?php

     include 'includes/common.php';
     $email=$_POST['email'];
     $password=$_POST['password'];
     $sec_password =md5($password);
     $query="SELECT * FROM users WHERE email='$email' and password='$password'";
     $execute=mysqli_query($con,$query);
     if(mysqli_num_rows($execute)==0){
          echo "no data found";
          header("Location:login.php");
     }
     else{
          $data = mysqli_fetch_array($execute);
          $_SESSION['email']=$data['email'];
          $_SESSION['user_id']=$data['id'];
          header("Location:products.php");
     }
    


?>
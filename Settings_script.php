<?php

   include 'includes/common.php';
   $old=$_POST['Old-password'];
   $new=$_POST['New-password'];
   $change=$_POST['Change-password'];

   $email=$_SESSION['email'];
   $query="SELECT password from users WHERE email='$email'";
   $execute=mysqli_query($con,$query)
   or die(mysqli_error($con));
   $data=mysqli_fetch_array($execute);
   if ($data['password']==$old ){
       $query1="UPDATE users SET password='$new' WHERE email='$email'";
       $execute1=mysqli_query($con,$query1)
       or die(mysqli_error($con));
       header("Location:products.php");
   }
   else{
       header("Location:settings.php");
       echo "Password match error";
   }













?>
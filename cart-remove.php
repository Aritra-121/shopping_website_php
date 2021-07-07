<?php


      include 'includes/common.php';
      $uid=$_SESSION['user_id'];
      $query="DELETE FROM users_items WHERE user_id='$uid'";
      $execute=mysqli_query($con,$query)
      or die(mysqli_error($con));
      if($execute){
          header("Location:cart.php");

      }
    else{
        echo "Error removing data";
    }
















?>
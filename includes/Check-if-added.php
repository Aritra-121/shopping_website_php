<?php

function  check_if_added_to_cart($itemid){
    include "includes/common.php";
    $userid=$_SESSION['user_id'];
  
    $query="SELECT * FROM users_items WHERE user_id = '$userid' and item_id = '$itemid' and status = 'Added to Cart'";
    $execute=mysqli_query($con,$query)
    or die(mysqli_error($con));
    if(mysqli_num_rows($execute)>=1){
        return 1;

    }
    else{
        return 0;
    }




}











?>
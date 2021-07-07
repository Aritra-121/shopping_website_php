<?php
include 'includes/common.php';
$bid=$_GET["id"];
$uid=$_SESSION["user_id"];
$query="INSERT into users_items(id,user_id,item_id,status) VALUES('','$uid','$bid','Added to Cart')";
$execute=mysqli_query($con,$query)
or die(mysqli_error($con));
header("Location:products.php");






?>
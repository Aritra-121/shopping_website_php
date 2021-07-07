<?php


 include 'includes/common.php';
  $name=$_POST['name'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $contact= $_POST['Contact'];
  $city= $_POST['City'];
  $address= $_POST['Address'];
  $check="SELECT * from users WHERE email='$email'";
  $execute=mysqli_query($con,$check)
  or die(mysqli_error($con));
  if(mysqli_num_rows($execute)==0){
    $query="INSERT INTO users(id,name,email,password,contact,city,address) VALUES('','$name','$email','$password','$contact','$city','$address')";

    $execute1=mysqli_query($con,$query)
    or die(mysqli_error($con));
    $query1="SELECT id FROM users WHERE email='$email'";

    $execute2=mysqli_query($con,$query1);
    $data=mysqli_fetch_array($execute2);
    $_SESSION['user_id']=$data['id'];
    $_SESSION['email']=$email;
    header("Location:products.php");


  }
  else{
      header("Location:signup.php");
  }






?>
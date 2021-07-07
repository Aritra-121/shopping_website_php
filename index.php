<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php
   require 'includes/common.php';
   if (isset($_SESSION['email'])){
       header('Location:products.php');
   }
?>
<body>
   <?php

      include 'includes/header.php';

?>
    <div id="banner_image">
        <div class="container">
             <div class="banner_content">
                 
             
             <p style="color:white ;font-size:30px;"> We sell Lifestyle</p>
               <p style="color:white ;font-size:20px">The premium store for luxury</p>    
             <a href="products.html" class="btn btn-danger btn-lg active  pos">Shop Now</a>
                </div>
            </div>
    </div>
 
       <div class="container-fluid">
           <?php

                 include 'includes/footer.php'
               ?>
       </div>
</body>


<style>
    #banner_image{
       padding-top:75px;
       height:900px;
       padding-bottom:50px;
        text-align: center;
        color:#f8f8f8;
        background-image: url("Images/intro-bg_1.jpg");
        background-size:cover;
       background-repeat: no-repeat;
    }
    .pos{
        margin-top:70px;
    }
    .banner_content{
        position:relative;
        padding-top:6% ;
        padding-bottom:6%;
        height:300px;
        margin-bottom:12% ;
        margin-left: 230px;
        margin-top: 300px ;
        background-color:rgba(0,0,0,0.7);
        max-width: 660px;
    }
    footer{
    margin-top:10px;
    background-color: #000;
    color: #fff;
    font-size:14px;
}
</style>


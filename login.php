<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
      
         require "includes/common.php";
         include "includes/header.php";
         if(isset($_SESSION['email'])){
             header('Location:products.php');
         }
 ?>

     
    <div class="container">

        <div class="row">


            <div class="col-xs-6">



                <div class="panel panel-primary decor">



                    <div class="panel-heading">LOGIN</div>




                    <div class="panel-body"><p class="text-warning">Login to make a purchase</p>
                      <form method="POST" action="login_submit.php">
                        
                        <input type="text" name="email" placeholder="email" class="form-control"><br>
                        <input type="text" name="password" placeholder="password" class="form-control"><br>
                        <input type="submit" name="submit" value="Login" class="btn btn-primary">

                        </form> 
                    </div>


                    <div class="panel-footer">
                        <p>Don't have an account?<a href="Signup.html">Register</a></p>
                </div>


            </div>
    
           
    
    
    </div>

    </div>

    </div>
   <?php
     include "includes/footer.php";
   ?>

</body>


<style>
    .decor{
        margin-top: 200px;
        margin-left: 300px;
        width:500px;
       
    }
    footer{
    margin-top:215px;
    background-color: #000;
    color: #fff;
    font-size:14px;
}
</style>
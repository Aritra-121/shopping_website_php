<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <?php include 'includes/header.php';
      include 'includes/common.php';
  ?>


    <div class="container">
         

         <form style="margin-top:100px; margin-left:330px" method="POST" action="signup_script.php">
             <br>
             <h1 ><b>SIGN UP</b></h1>
             <input type="text" name="name"  placeholder="Name" style="width: 400px; height:40px;"><br>
             <br>
             <input type="text" name="email"  placeholder="email" style="width: 400px; height:40px;"><br>
             <br>
             <input type="text" name="password"  placeholder="password" style="width: 400px; height:40px;"><br>
             <br>
             <input type="text" name="Contact"  placeholder="Contact"style="width: 400px; height:40px;"><br>
             <br>
             <input type="text" name="City"  placeholder="City" style="width: 400px; height:40px;"><br>
             <br>
             <input type="text" name="Address"  placeholder="Address" style="width: 400px; height:40px;"><br>
             <br>
             <input type="submit" name="submit" class="btn btn-primary" >
         </form>


    </div>
    <?php

        include "includes/footer.php";
?>
   
</body>
</html>
<style>
        footer{
    margin-top:150px;
    background-color: #000;
    color: #fff;
    font-size:14px;
}
</style>
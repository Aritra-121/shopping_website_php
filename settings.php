<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php

 include 'includes/common.php';
 include 'includes/header.php';


 


?>
<body>
  
    <div class="container decor">
            <h1>Change Password</h1>

            <form method="POST" action="Settings_script.php">
                <input type="text" name="Old-password" placeholder="Old Password" style="width: 400px; height:30px;"><br>
                <br>
                <input type="text" name="New-password" placeholder="New Password"  style="width: 400px; height:30px;"><br>
                <br>
                <input type="text" name="Change-password" placeholder="Re-type New Password"  style="width: 400px; height:30px;"><br>
                <br>
                 <button class="btn btn-primary">Change</button>
            </form>
        </div>
    

        <?php


      include 'includes/footer.php';
?>


</body>
</html>


<style>
    .decor{
        margin-top: 100px;
        margin-left: 400px;
        width:450px;
        height:500px;
       

    
    }
    footer{
    margin-top:140px;
    height:20px;
    background-color: #000;
    color: #fff;
    font-size:14px;
}
</style>



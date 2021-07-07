<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <?php




       include "includes/common.php";
       include "includes/header.php";
       if(!isset($_SESSION['email'])){
           header("Location:index.php");
       }
       $userid=$_SESSION['user_id'];
       $query1="SELECT item_id FROM users_items WHERE user_id ='$userid'";
       $execute=mysqli_query($con,$query1);
       $ans=mysqli_fetch_array($execute);
       if(mysqli_num_rows($execute)==0){
           echo "Add items first";
       }

       else{
         for($i=0;$i<=mysqli_num_rows($execute);$i++){
             $sum=0;
             $sum+=$ans['price'];


             
        
              
         }
       }

      



?>
    <div class="container cont">
        <div class="table responsive">
            <table class="table">
                <th>Item Number</th>
                <th>Item name</th>
                <th>Price</th>
            <tr>
            <a href='cart-remove.php?id={$row["id"]}class=remove_item_link'> Remove</a><?php echo $ans['item_id'] ?><td></td><td>Total</td><td><?php echo $sum?></td><td><a href="success.php"><Button class="btn btn-primary">Confirm Order</button></a></td></tr>
            
            </table>
        </div> 
        </div>
        <div class="container cont2" style="display:flex; justify-content:space-evenly">

           <a href="cart-remove.php"><button class="btn btn-primary">Remove</button></a>
        </div>
        <?php

     include "includes/footer.php";


?>
</body>
</html>    
<style>
  .cont{
      margin-top:200px;

  }
    
  footer{
    margin-top:500px;
    background-color: #000;
    color: #fff;
    font-size:14px;
}
.cont2{

    margin-top:300px;
}
    </style>
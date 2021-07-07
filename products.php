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
   include "includes/Check-if-added.php"

?>

    <div class="container decor">
        <div class="jumbotron">
             
            
            <p style="font-size:4em;"><b>Welcome to our Lifestyle Store!</b></p>
      
            <p >We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place</p>
        </div>
    </div>

    <div class="container-fluid decor1">
           <div class="cam1">
               <div class="thumbnail">
                   <img src="Images/5.jpg">

                   <div class="caption">
                       <H1 style="text-align:center">Cannon Eos</H1>
                       <p style="text-align:center">Price Rs.36000.00</p>
                       
                    
                          <?php
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>

                
                    
                    </button>

                   </div>
               </div>
           </div>
           <div class="cam2">
            <div class="thumbnail">
                <img src="Images/2.jpg">
                <div class="caption">
                    <H1 style="text-align:center">Sony DSLR</H1>
                    <p style="text-align:center">Price Rs.40000.00</p>
                    <?php
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(2)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>
                </div>
            </div>
        </div>
        <div class="cam3">
            <div class="thumbnail">
                <img src="Images/3.jpg">
                <div class="caption">
                    <H1 style="text-align:center">Sony DSLR</H1>
                    <p style="text-align:center">Price Rs.50000.00</p>
                    
                    <?php
                
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(3)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>
            

                </div>
            </div>
        </div>
        <div class="cam4">
            <div class="thumbnail">
                <img src="Images/4.jpg">
                <div class="caption">
                    <H1 style="text-align:center">Olympus DSLR</H1>
                    <p style="text-align:center">Price Rs.80000.00</p>
                    <?php
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(4)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>

                </div>
            </div>
        </div>
    </div>
   <div class="container-fluid decor2">
       <div class="wtc1">
           <div class="thumbnail">
               <img src="Images/9.jpg">
           </div>

           <div class="caption">
             
            <H1 style="text-align:center">Titan Model#301</H1>
            <p style="text-align:center">Price Rs.13000.00</p>
            <?php
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(5)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>

            </div>
       </div>
       <div class="wtc2">
        <div class="thumbnail">
            <img src="Images/10.jpg">
            <H1 style="text-align:center">Titan Model#201</H1>
            <p style="text-align:center">Price Rs.3000.00</p>
            <?php
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(6)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>
        </div>
    </div>
    <div class="wtc3">
        <div class="thumbnail">
            <img src="Images/11.jpg">
            <H1 style="text-align:center">HMT Milan</H1>
            <p style="text-align:center">Price Rs.8000.00</p>
            <?php
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(7)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>
        </div>
    </div>
    <div class="wtc4">
        <div class="thumbnail">
            <img src="Images/12.jpg">
            <H1 style="text-align:center">Fabur Luba#111</H1>
            <p style="text-align:center">Price Rs.18000.00</p>
            <?php
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(8)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>>
        </div>
    </div>
</div>
    <div class="container-fluid decor3">
        <div class="srt1">
            <div class="thumbnail">
                <img src="Images/8.jpg">
            </div>
 
            <div class="caption">
              
             <H1 style="text-align:center">H&W</H1>
             <p style="text-align:center">Price Rs.800.00</p>
             <?php
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(9)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>
             </div>
        </div>
        <div class="srt2">
         <div class="thumbnail">
             <img src="Images/6.jpg">
             <H1 style="text-align:center">Luis Phil</H1>
             <p style="text-align:center">Price Rs.1000.00</p>
             <?php
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(10)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>
         </div>
     </div>
     <div class="srt3">
         <div class="thumbnail">
             <img src="Images/13.jpg">
             <H1 style="text-align:center">John Zok</H1>
             <p style="text-align:center">Price Rs.1500.00</p>
             <?php
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(11)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>
         </div>
     </div>
     <div class="srt4">
         <div class="thumbnail">
             <img src="Images/14.jpg">
             <H1 style="text-align:center">Jhalsani</H1>
             <p style="text-align:center">Price Rs.1300.00</p>
             <?php
                               if(!isset($_SESSION['email'])){ ?>

                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                               <?php

                               }else{
                                   if(check_if_added_to_cart(12)){
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to Cart</a>';
                                   }
                                   else{
                                       ?>
                                       <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                   }

                               }
                               ?>
         </div>
     </div>
    </div>
        <?php

         include "includes/footer.php";
?>
</body>

<style>
    .decor{
        height:300px;
        margin-top: 100px;
   
    }
    .decor1{
        margin-top:30px;
        display: flex;
       
        justify-content: space-evenly;


    }
    .decor2{
  
        display: flex;
        
        justify-content: space-evenly;


    }
    .decor3{
  
  display: flex;
  
  justify-content: space-evenly;


}
footer{
    margin-top:10px;
    height:25px;
    background-color: #000;
    color: #fff;
    font-size:14px;
}
</style>
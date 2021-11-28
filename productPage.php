<?php
  // Start the session
  session_start();
  include("shoppingCart.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="product.css">
    
    
</head>
<body> 
    <!-- end of header/nav -->
    <div class="navigation">
        <!-- header/nav -->
        <header class="header ">
          <h3 class="header-logo">Imazon</h3>
          
          <nav class="header-nav">
            <ul>
              <li><a href="productPage.php">Products</a></li>
              <span class ="cart-quantity">0</span>
              <i id="cartIcon" class="fas fa-shopping-cart"></i>
              
              <!-- <li><a href="#0">Products</a></li>  <a href="#0">Login</a>-->
              <li> <a href="login.php" class="btn btn-primary ripple-surface" id="logOutBtn" style="min-width: 83px;">Log Out</a></li>
            </ul>
          </nav>
        </header>
    </div>
        
    <div class="container-cart"> 
      
        <!-- products -->
        <div class="products">          
          
        </div>
        <!-- end of products -->
        
        <!--  cart modal  -->
        <div class="shopping-cart">
            <i id="close-btn" class="fas fa-times"></i>            
            <div class="shopping-cart-head">
              
              <span class="product-quantity">0</span> Product(s) in Cart
            </div>
            <ul class="shopping-cart-list">
            </ul>
            <div class="cart-buttons">
              <a href="#0" class="button empty-cart-btn">Empty</a>
              <form action="checkoutform.php" method ="post">
                
              </form>
              <a href="checkoutForm.php" class="button cart-checkout">Checkout (10% GST) - <span class="total-price">$0</span></a>
            </div>
        </div>       
        <!--   end of cart modal -->
        
        

    </div>
    <!-- container -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="product.js"></script>
</body>
</html>
<?php
   session_unset();
   header ("location: index.html");
   exit();
?>
<?php
//Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">      
      <title>Egg Yolk | Contact</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet">
      <link href="css/hover.css" rel="stylesheet" media="all">      
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"> 
      <style type="text/css">
         #container {
             padding-bottom: 100px;  
         }
         #image1 {

         }
         #image2 {
            margin-left: 545px;
            z-index: 100;
            position: absolute;
            margin-top: 5px;
         }
         #contactbox {
            display: inline-block;
            margin-left: 90px;
            margin-top: 10px;
            position: absolute;
         }
         h4 {
            line-height: 1.5em;
         }
         form {
            margin-top: 40px;
         }
      </style>   
   </head>
   <body>
      <?php 
         // include_once("");//your website's header template 
      ?>  
      <!--   LOGO     -->
      <header class="header">
         <!--218 x 340 -->
         <!--200 x 115 cella logo-->
         <h2>egg yolk</h2>
         <h5>brooklyn</h5>
         <div id="cartandlogin">
            <a href="cart.php" class="hvr-bob"><i class="fa fa-shopping-cart" id="cart"></i></a> 
            <a href="logout.php" class="hvr-bob"><i class="fa fa-sign-out" id="logout"></i></a>
         </div>   
      </header>
      <!--   NAVIGATION  -->
      <nav>
         <ul>
            <li><a href='home.php' class="hvr-bounce-to-top"><span>Home</span></a></li>
            <li class='has-sub'><a href='orderselection.php' class="hvr-bounce-to-top"><span>Order</span></a></li>
            <li class='has-sub'><a href='#' class="hvr-bounce-to-top"><span>My Account</span></a>
               <ul>
                  <li class='has-sub'><a href='#'><span>My Info</span></a>
                     <ul>
                        <li><a href='#'><span>Sub Product</span></a></li>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                     </ul>
                  </li>
                  <li class='has-sub'><a href='#'><span>Billing Info</span></a>
                     <ul>
                        <li><a href='#'><span>Sub Product</span></a></li>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                     </ul>
                  </li>
                  <li class='has-sub'><a href='#'><span>Shipping Info</span></a>
                     <ul>
                        <li><a href='#'><span>Sub Product</span></a></li>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                     </ul>
                  </li>
                  <li class='has-sub'><a href='#'><span>My Orders</span></a>
                     <ul>
                        <li><a href='#'><span>Sub Product</span></a></li>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li><a href='l_about.php' class="hvr-bounce-to-top"><span>About</span></a></li>
            <li class='last'><a href='l_contact.php' class="hvr-bounce-to-top"><span>Contact</span></a></li>
         </ul>
      </nav>
      <!-- M A I N -->
      <div id="container">
         <p>You loged out.</p>
      </div>
      
      <!--   FOOTER   -->
      <footer>  
      <p>copyright &copy; 2015 egg yolk restaurant</p>
      <p>* * <a href="adminhome.php">*</a></p> 
      </footer> 
      
    
   </body>
</html>   
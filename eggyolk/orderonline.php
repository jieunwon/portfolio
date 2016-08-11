<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Egg Yolk | Order</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
      <link href="css/style.css" rel="stylesheet"> 
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">    
   </head>
   <body>
      <!--   LOGO     -->
      <header class="header">
         <!--218 x 340 -->
         <!--200 x 115 cella logo-->
         <h2>egg yolk</h2>
         <h5>brooklyn</h5>
         <div id="cartandlogin">
            <a href="cart.php"><i class="fa fa-shopping-cart" id="cart"></i></a> 
            <a href="#"><i class="fa fa-user" id="login"></i></a>
         </div> 
         <style type="text/css">
            td, tr {
               border: 1px solid #000;
            }
         </style>  
      </header>
      <!--   NAVIGATION  -->
      <nav>
         <ul>
            <li><a href='#'><span>Home</span></a></li>
            <li class='has-sub'><a href='#'><span>Menu</span></a>
               <ul>
                  <li class='has-sub'><a href='breakfast.php'><span>Breakfast</span></a>
                     <ul>
                        <li><a href='#'><span>Sub Product</span></a></li>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                     </ul>
                  </li>
                  <li class='has-sub'><a href='#'><span>Lunch</span></a>
                     <ul>
                        <li><a href='#'><span>Sub Product</span></a></li>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                     </ul>
                  </li>
                  <li class='has-sub'><a href='#'><span>Dinner</span></a>
                     <ul>
                        <li><a href='#'><span>Sub Product</span></a></li>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                     </ul>
                  </li>
                  <li class='has-sub'><a href='#'><span>Drink</span></a>
                     <ul>
                        <li><a href='#'><span>Sub Product</span></a></li>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                     </ul>
                  </li>
                  <li class='has-sub'><a href='#'><span>Dessert</span></a>
                     <ul>
                        <li><a href='#'><span>Sub Product</span></a></li>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                     </ul>
                  </li>
               </ul>
            </li>
            <li class='has-sub'><a href='#'><span>My Account</span></a>
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
            <li><a href='#'><span>About</span></a></li>
            <li class='last'><a href='#'><span>Contact</span></a></li>
         </ul>
      </nav>

      <div id="container">
        <!-- <h2>Login here: </h2>
        <form method="post" action="orderonline.php">
           <p>Username:
           <input type="text" name="user" placeholder="username">
              Password:
           <input type="password" name="pwd" placeholder="password">
           </p>
           <p><input type="submit" value="login"></p>   
        </form> -->
        <?php

     // Connect to the database
         $con = mysqli_connect ('localhost', 'root', 'root', 'orders')
   		or die('Error connecting to MySQL server.');

      // Grab the user login data
        $username = trim($_POST['user']);
        $password = trim($_POST['pwd']);

       if (!empty($username) && !empty($password)) {
          // Look up the username and password in the database
          $query = "SELECT username FROM custinfo WHERE username = '$username' AND password = '$password'";
          $result = mysqli_query($con, $query);

          if (mysqli_num_rows($result) == 1) {
             // Confirm the successful log-in
      	echo('<h2 style="text-align: center;">Login Successful!</h2><h3 style="text-align: center;">You are logged in as ' . $username . '.</h3>');
      	$_SESSION['username'] = $username;
      	setcookie('username', $row['username'], time() + (60 * 60 * 24 * 60));  // expires in 30 days
          }
          else {
            // The username/password are incorrect so set an error message
            	echo('<p> Sorry, you must enter a valid username and password to log in.');
           	echo('<h2> Create new account</h2>');
          	echo('<form method="post" action="newaccount.php">');
          	echo('<p> Create Username: <input type="text" name="username" placeholder="username"> ');
            	echo('<p> Create Password:<input type="password" name="password" placeholder="password"></p><p>');
            	echo('<p> First Name:<input type="text" name="firstname" placeholder="First Name"></p><p>');
            	echo('<p> Last Name:<input type="text" name="lastname" placeholder="Last Name"></p><p>');
            	echo('<p> Email:<input type="text" name="email" placeholder="Email"></p><p>');
            	echo('<p> Address:<input type="text" name="address" placeholder="Address"></p><p>');
            	echo('<p> Zip:<input type="text" name="zip" placeholder="Zip code"></p><p>');
            	echo('<p> Phone:<input type="text" name="phone" placeholder="Phone"></p><p>');
            	echo('<p> Comments:<input type="textarea" name="comments" placeholder="Special Instructions"></p><p>');
  			echo('<input type="submit" value="Create Account"></p></form>');
          	}
          	
        }
        else {
          // The username/password weren't entered so set an error message
          echo('<p> Sorry, you must enter your username and password to log in.');
        	echo('<h2> Create new account</h2>');
     	 	echo('<form method="post" action="newaccount.php">');
      	echo('<p> Create Username: <input type="text" name="username" placeholder="username"> ');
          echo('<p> Create Password:<input type="password" name="password" placeholder="password"></p><p>');
          echo('<p> First Name:<input type="text" name="firstname" placeholder="First Name"></p><p>');
          echo('<p> Last Name:<input type="text" name="lastname" placeholder="Last Name"></p><p>');
          echo('<p> Email:<input type="text" name="email" placeholder="Email"></p><p>');
          echo('<p> Address:<input type="text" name="address" placeholder="Address"></p><p>');
          echo('<p> Zip:<input type="text" name="zip" placeholder="Zip code"></p><p>');
          echo('<p> Phone:<input type="text" name="phone" placeholder="Phone"></p><p>');
          echo('<p> Comments:<input type="textarea" name="comments" placeholder="Special Instructions"></p><p>');
  		echo('<input type="submit" value="Create Account"></p></form>');
  		
        }


  	  ?>
      <a href="account_login.php">Back to login page.</a>
    </div>
   </body>
</html>




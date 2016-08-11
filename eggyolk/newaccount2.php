<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Egg Yolk | New Account</title>    
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet"> 
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">    
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <style type="text/css">
            #container {
               background-image: url("img/loginfail_bgd.png");
               width: 67%;
               margin: 40px auto;
            }
            td, tr {
               border: 1px solid #000;
            }
            #newacc {
               margin: 0 auto;
               height: 500px;
               display: block;
               width: 500px;
            }
            a {
              text-decoration: none;
            }

            h3 {
               margin-left: 10px;
            }
            .btn {
               display: block;
               margin: 0 auto;
            }
         </style>  
   </head>
   <body>
      <?php 
         include_once("header_after.php");//your website's header template 
      ?> 
      <div id="container">
         <div id="newacc">
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
          	echo('<h2 style="text-align: center;">Login Successful!</h2><h3 style="text-align: center;">You are logged in as ' . $username . '.</h3><a href="home.php"><input type="submit" class="btn" value="Go to Home"></a>');
          	$_SESSION['username'] = $username;
          	setcookie('username', $row['username'], time() + (60 * 60 * 24 * 60));  // expires in 30 days
              }
              else {
                // The username/password are incorrect so set an error message
                	echo('<h4> Sorry, you must enter a valid username and password to log in.</h4>');
               	echo('<h2 style="margin-top: 40px;"> Create new account</h2>');
              	echo('<form method="post" action="newaccount.php" class="input-list style-5 clearfix">');
              	echo('<p> Username:  <input type="text" name="username" placeholder="username"> ');
                	echo('<p> Password:  <input type="password" name="password" placeholder="password"></p><p>');
                	echo('<p> First Name:  <input type="text" name="firstname" placeholder="First Name"></p><p>');
                	echo('<p> Last Name:  <input type="text" name="lastname" placeholder="Last Name"></p><p>');
                	echo('<p> Email:  <input type="text" name="email" placeholder="Email"></p><p>');
                	echo('<p> Address: <input type="text" name="address" placeholder="Address"></p><p>');
                	echo('<p> Zip:  <input type="text" name="zip" placeholder="Zip code"></p><p>');
                	echo('<p> Phone:  <input type="text" name="phone" placeholder="Phone"></p><p>');
                	echo('<p> Comments:  <input type="textarea" name="comments" placeholder="Special Instructions"></p><p>');
      			       echo('<input type="submit" value="Create Account"></p></form>');
                   echo('<a href="index.html"><input type="submit" class="btn" value="Go to Home"></a>');
              	}
              	
            }
            else {
              // The username/password weren't entered so set an error message
              echo('<p> Sorry, you must enter your username and password to log in.');
            	echo('<h4> Create new account</h4>');
         	 	echo('<form method="post" action="newaccount.php">');
          	echo('<p>Username: <input type="text" name="username" placeholder="username"> ');
              echo('<p>Password:<input type="password" name="password" placeholder="password"></p><p>');
              echo('<p>First Name:<input type="text" name="firstname" placeholder="First Name"></p><p>');
              echo('<p>Last Name:<input type="text" name="lastname" placeholder="Last Name"></p><p>');
              echo('<p>Email:<input type="text" name="email" placeholder="Email"></p><p>');
              echo('<p>Address:<input type="text" name="address" placeholder="Address"></p><p>');
              echo('<p>Zip:<input type="text" name="zip" placeholder="Zip code"></p><p>');
              echo('<p>Phone:<input type="text" name="phone" placeholder="Phone"></p><p>');
              echo('<p>Comments:<input type="textarea" name="comments" placeholder="Special Instructions"></p><p>');
      		echo('<input type="submit" value="Create Account"></p></form>');
          echo('<a href="index.html"><input type="submit" class="btn" name="Go to Home"></a>');
      		
            }


      	  ?>
          
         </div>
      </div>
      <!--   FOOTER   -->
      <?php 
         include_once("footer.php");//your website's header template 
      ?>    
   </body>
</html>




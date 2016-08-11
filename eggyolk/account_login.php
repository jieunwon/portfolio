<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Login | egg yolk</title> 
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet"> 
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">      
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"> 
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <style type="text/css">
            #container {
               width: 67%;
               margin-left: auto;
               margin-right: auto;
               margin-top: 40px;
               background-image: url("img/login_bgd.png");
               height: 800px;
               padding-bottom: 20px;
            }
            td, tr {
               border: 1px solid #fff;
            }
            #loginpage {
               margin-left: 10%;
            }
            input {
               border: 2px solid #fff;
               box-shadow: 1px 1px 1px #fff;
               border-radius: 6px;  
            }
            #loginpage {
               width: 600px;
               display: block;
            }

            #firstform {
               padding-bottom: 20px;
               border-bottom: 2px solid #D8D8D8;
            }
            form {
              background-color: rgba(255, 255, 255, 0.8);
              border: 3px double #eee;
              width: 300px;
              margin-bottom: -50px;
              padding-left: 20px;
              padding-top: 20px;
            }
            h4 {
               padding-top: 20px;
               letter-spacing: 0.08em;
            }
            .btn {
               margin-top: 10px;
            }
         </style>  
   </head>
   <body>
      <?php 
         include_once("header_before.php");//your website's header template 
      ?>  
      <div id="container">
        <div id="loginpage">
            <h4><i class="fa fa-user"></i> Login</h4>
            <form method="post" action="newaccount2.php" id="firstform">
               <p>Username:
               <input type="text" name="user" placeholder=" Username"><br><br>
                  Password:
               <input type="password" name="pwd" placeholder=" Password">
               </p>
               <p><input type="submit" value="LOGIN" class="btn"></p>   
            </form>

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
          	echo('<h2>Login Successful!</h2><h3>You are logged in as ' . $username . '.</h3>');
          	$_SESSION['username'] = $username;
          	setcookie('username', $row['username'], time() + (60 * 60 * 24 * 60));  // expires in 30 days
              }
              else {
                // The username/password are incorrect so set an error message
                	echo('<p> Sorry, you must enter a valid username and password to log in.');
               	echo('<h2>Create new account</h2>');
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
      			echo('<input type="submit" value="CREATE ACCOUNT"></p></form>');
              	}
              	
            }
            else {
              // The username/password weren't entered so set an error message
              // echo('<p> Sorry, you must enter your username and password to log in.');
            	echo('<br><br><h4><i class="fa fa-user-plus"></i> Create new account</h4>');
         	 	  echo('<form method="post" action="newaccount.php">');
          	  echo('<p> Username: <input type="text" name="username" placeholder="username"></p>');
              echo('<p> Password: <input type="password" name="password" placeholder="password"></p><p>');
              echo('<p> First Name: <input type="text" name="firstname" placeholder="First Name"></p><p>');
              echo('<p> Last Name: <input type="text" name="lastname" placeholder="Last Name"></p><p>');
              echo('<p> Email: <input type="text" name="email" placeholder="Email"></p><p>');
              echo('<p> Address: <input type="text" name="address" placeholder="Address"></p><p>');
              echo('<p> Zip: <input type="text" name="zip" placeholder="Zip code"></p><p>');
              echo('<p> Phone: <input type="text" name="phone" placeholder="Phone"></p><p>');
              echo('<p> Comments: <input type="textarea" name="comments" placeholder="Special Instructions"></p><p>');
      		    echo('<input type="submit" value="CREATE ACCOUNT" class="btn"></p></form>');
      		
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




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
               margin-top: 40px;
               width: 67%;

            }
            td, tr {
               border: 1px solid #000;
            }
            #newacc {
               margin: 0 auto;
               height: 500px;
               display: block;
               width: 600px;
            }
            
            p {
               margin-top: 50px;
               padding-bottom: 50px;
            }
            .btn {
               display: block;
               margin: 0 auto;
            }
            button {
               padding-top: 50px;
            }
            a {
               text-decoration: none;
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

                  $username = trim($_POST['username']);
                  $password = trim($_POST['password']);
                  $firstname = trim($_POST['firstname']);
                  $lastname = trim($_POST['lastname']);
                  $email = trim($_POST['email']);
                  $address = trim($_POST['address']);
                  $zip = trim($_POST['zip']);
                  $phone = trim($_POST['phone']);
                  $comments = trim($_POST['comments']);
                  
                  
                  if (!empty($username) && !empty($password)) {
            //Store username and password in the database
                  $query = "INSERT INTO custinfo VALUES ('$username', '$password', '$firstname', '$lastname','$email', '$address', '$zip', '$phone', '$comments')";
                  
                  $result = mysqli_query($con, $query);
                  
                  echo('<h2> Dear, ' . $firstname. ' . Your Account has been successfully created!</h2>');  
                  
                  $query1 = "SELECT username FROM custinfo WHERE username = '$username' AND password = '$password'";
            $result1 = mysqli_query($con, $query1);
                  if (mysqli_num_rows($result1) == 1) {
           
            echo('<h2>Login Successful!</h2><h3>You are logged in as ' . $username . '.</h3>');
                  
                  }
                  else {
                  echo('<p> Sorry, you must enter a valid username and password to create account.');
                  }
                  }
                  else {
                  echo('<p> Sorry, you must enter a valid username and password to create account.');
                  }
                  
?>
            <br><br>
            <a href="newaccount2.php"><button class="btn">Back to Create Account</button></a>     
          
         </div>
      </div>
      <!--   FOOTER   -->
      <!--   FOOTER   -->
      <?php 
         include_once("footer.php");//your website's header template 
      ?>   
   </body>
</html>
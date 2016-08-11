<?php 
session_start();
?>
<?php
//Error Reporting
// error_reporting(E_ALL);
// ini_set ('display_errors', '1');

?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">      
      <title>Admin Panel | egg yolk</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="css/normalize.css" rel="stylesheet">
      <!-- FONT & FONT AWESOME ICON -->
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet"> 
      <style type="text/css">
         form {
            display: block;
            margin: 0 auto;
            width: 270px;
            background-color: #FECB00;
            padding: 20px;
         }
         input#loginbutton {
            margin-left: 90px;
            background-color: #000;
            color: #FECB00;
            border-radius: 10px;
            padding: 10px 20px;
         }
         h3, h4>i {
            color: #FECB00;
            letter-spacing: 0.1em;
         }

      </style>
   </head>
   <body>
      <?php 
         include_once("header_before.php");//your website's header template 
      ?> 
      <div id="container">
         <h3 align="center"><i class="fa fa-cog"></i> Administrative Login </h1><br>
         <?php 
            $con=mysqli_connect('localhost', 'root', 'root', 'customerDB')
            or die('Error connecting to MySQL Server.');
         
            $username = trim($_POST['user']);
            $password = trim($_POST['pwd']);
         
            if(!empty($username) && !empty($password)) {
            //look up username and password in the database
               $query = "select username from admins where username = '$username' and password = '$password'";
               $result = mysqli_query($con, $query);
            
               if(mysqli_num_rows($result) == 1) {
                  echo('<style>form {display: none;} footer {margin-top: 290px;}</style><h2 align="center">Login Successful!</h2><h4 align="center"><a href="adminhome.php">Click Here to access Admin Control Panel</a></h3>');   
               $_SESSION['manager'] = $username;
               setcookie ('manager', $row['manager'], time() + 60*60*24*120);
               
               }
               else {
                  echo('<h2 align="center">Login Failed! Try again.</h2>');
               }
            
         }   
         ?>   
         <form method="post" action="admin_login.php">
            <img src="img/Administrative_Tools.png">
            <p> Username: <input type="text" name="user" placeholder="admin_username"></p>
            <p>Password: <input type="password" name="pwd" placeholder="admin_password"></p>
            <input type="submit" value="Login" id="loginbutton"> 
         </form>
         
      </div>   
      <!--   FOOTER   -->
      <?php 
          include_once("footer.php");//your website's header template 
      ?>
      
      
   </body>
</html>

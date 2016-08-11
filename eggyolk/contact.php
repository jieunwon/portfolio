<?php
// session_start();
// // if (!isset ($_SESSION ["manager"])) {
// //    header ("location: admin_login.php");
// //    exit();
// }
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
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"> 
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <style type="text/css">
         #container {
             margin-top: 40px; 
             padding-bottom: 20px;  
         }
         img {
            display: inline-block;
            margin-left: 50px;
            margin-top: 20px;
         }
         input, textarea {
            border: 1px solid #FECB00;
         }
         label {
           font-size: 14px;
         }
         h4 {
            font-size: 14px;
            line-height: 1.4em;
         }
         #contact_box {
            border: 3px double #FECB00;
            padding-left: 20px;
            padding-right: 20px;
            padding-bottom: 20px;
         }
         
      </style>   
   </head>
   <body>
      <?php 
         include_once("header_before.php");//your website's header template 
      ?>  
      <div id="container">
         <div style="margin-left: 50px; display: inline-block;" id="contact_box">
           <h2 style="margin-top: 20px;">Contact Us</h2>
           <h4><em>For all other inquiries, including events and<br>catering,
           please contact info@eggyolk.com or<br>212.724.8101.</em></h4>
           <form method="post">
              <label for="name">Name</label><br />
              <input name="name" type="text" size="40" maxlength="40" placeholder="Name" /><br /><br />
              <label for="company">Company name</label><br />
              <input name="company" type="text" size="40" maxlength="40" placeholder="Company name" /><br /><br />
              <label for="email">Email</label><br />
              <input name="email" type="text" size="40" maxlength="40" placeholder="Email" /><br /><br />
              <label for="phone">Phone</label><br />
              <input name="phone" type="text" size="3" maxlength="3" placeholder="***" />
              <input name="phone" type="text" size="3" maxlength="3" placeholder="***" />
              <input name="phone" type="text" size="4" maxlength="4" placeholder="****" /><br /><br />
              <label for="message">Message</label><br />
              <textarea id="message" name="message" rows="10" cols="40" style="width: 240px;"></textarea><br /><br />
              <input type="submit" name="Send" value="SEND">
           </form>
         </div> 
         <img src="img/contact_img.png">
      </div>
      
      <!--   FOOTER   -->
      <footer>  
      <p>copyright &copy; 2015 egg yolk restaurant</p>
      <p>* * <a href="adminhome.php">*</a></p> 
      </footer> 
      
    
   </body>
</html>   
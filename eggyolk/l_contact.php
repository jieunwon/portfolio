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
      <title>Contact | Egg Yolk</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet">
      <link href="css/hover.css" rel="stylesheet" media="all">      
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"> 
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <style type="text/css">
         #container {
            padding-bottom: 50px;  
         }

         #image1 {
            display: block;
            margin: 0 auto;
            border: 1px solid #FECB00;

         }
         
         #contactbox {
            display: block;
            z-index: 2;
            position: relative;
            margin-top: -620px;
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(255,255,255, 0.9);
            width: 300px;
            padding-bottom: 30px;
            padding-top: 8px;
            box-shadow: 10px 10px 5px rgba(0,0,0, 0.3);
            border: 1px solid #000;
         }
         p {
            line-height: 1.5em;
            font-size: 12px;
            margin-bottom: 10px;
         }
         label {
            font-size: 14px;
         }
         form {
            display: block;
            width: 300px;
            margin-left: 25px;
         }
         input, textarea {
            border: 3px double #FECB00;
            margin-bottom: 10px;
         }
         #submit {
            background-color: #FECB00;
         }
      </style>   
   </head>
   <body>
      <?php 
         include_once("header_after.php");//your website's header template 
      ?>  
      <!-- M A I N -->
      <div id="container">
         <img src="img/contactus3.png" id="image1">
         <div>
           <div id="contactbox">
              <h3 align="center">Contact Us</h3>
              <p align="center">For all other inquiries, including events and<br> catering,
              please contact info@eggyolk.com or 212.724.8101.</p>
              <form method="post">
                 <label for="name">Name</label><br />
                 <input name="name" type="text" size="40" maxlength="30" placeholder="Name" /><br />
                 <label for="company">Company Name</label><br />
                 <input name="company" type="text" size="40" maxlength="30" placeholder="Company name" /><br />
                 <label for="email">Email</label><br />
                 <input name="email" type="text" size="40" maxlength="30" placeholder="Email" /><br />
                 <label for="phone">Phone</label><br />
                 <input name="phone" type="text" size="3" maxlength="3" placeholder="***" />
                 <input name="phone" type="text" size="3" maxlength="3" placeholder="***" />
                 <input name="phone" type="text" size="4" maxlength="4" placeholder="****" /><br />
                 <label for="message">Message</label>
                 <textarea id="message" name="message" rows="10" style="width: 240px;"></textarea><br />                 
                 <input type="submit" name="Submit" value="SEND" id="submit" />
              </form>
           </div>

         </div> 
      </div>
      
      <!--   FOOTER   -->
      <?php 
          include_once("footer.php");//your website's header template 
      ?>
      
    
   </body>
</html>   
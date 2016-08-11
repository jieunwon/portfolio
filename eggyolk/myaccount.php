<?php
   session_start();
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
      <title>Egg Yolk | My Account</title>      
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet">
      <link href="css/hover.css" rel="stylesheet" media="all">    
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <style type="text/css">
         #box {
            width: 962px;
            height: 100%;
            background-image: url("img/kinfolkcookies1.png");
            color: #000;
            padding-bottom: 40px;
         }

         #form1 {
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
            display: block;
            margin: 0 auto;
            width: 343px;
            margin-bottom: 20px;
            margin-top: 50px;

         }
         #form2 {
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
            display: block;
            margin: 0 auto;
            width: 410px;
            margin-bottom: 20px;
            margin-top: 50px;

         }
         #form3 {
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
            display: block;
            margin: 0 auto;
            width: 328px;
            margin-bottom: 20px;
            margin-top: 50px;

         }

         #form4 {
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
            display: block;
            margin: 0 auto;
            width: 657px;
            margin-bottom: 20px;
            margin-top: 50px;


         }

         td {
            text-align: center;
            padding: 10px 16px;
            border-bottom: 1px solid #fff;
            background: rgba(255, 255, 255, 0.8);

         }

         #form1 td:last-child, #form2 td:last-child, #form3 td:last-child {
            text-align: left;
         }

         tr td:first-child  {
            border-right: 3px double #fff;
            background-color: #FECB00;
            color: #000;   
         }
         #form4 td:nth-child(2)  {
            border-right: 1px solid #fff;   
         }
         #form4 td:nth-child(3)  {
            border-right: 1px solid #fff;   
         }
         #form4 tr:first-child {
            background-color: #FECB00;
            letter-spacing: 0.1em;
            color: #000;
         }
        
         h4{
            background-color: #000;
            border-top: 3px double #fff;
            border-bottom: 3px double #fff;
            padding: 20px 0;
            letter-spacing: 0.1em;
            color: #FECB00;
         }
         #edit, #delete {
            color: #FECB00;
            display: inline-block;
         }
         #edit {
            margin-left: 680px;
            margin-right: 10px;
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
         <img src="img/myaccount.png">
         <div id="box">  
            <h4 align="center" id="myinfo">MY INFORMATION</h4>
               <table id="form1">
                  <tr><td>Name</td><td>Jieun Won</td></tr>
                  <tr><td>Username</td><td>touro</td></tr>
                  <tr><td>Password</td><td>***ro</td></tr>
                  <tr><td>Address</td><td>601 West 110th St. Apt 6J5</td></tr>
                  <tr><td>City</td><td>New York</td></tr>
                  <tr><td>State</td><td>New York</td></tr>
                  <tr><td>Zip</td><td>10025</td></tr>
                  <tr><td>Phone</td><td>(123) 456 7890</td></tr> 
               </table>
               <a href="#"><p id="edit"><i class="fa fa-pencil" style="color: #FECB00;"></i> edit</p></a>
               <a href="#"><p id="delete"><i class="fa fa-times" style="color: #FECB00;"></i> delete</p></a>

            <h4 align="center" id="billinfo">BILLING INFORMATION</h4> 
               <table id="form2">
                  <tr><td>Cardholder's Name</td><td>Jieun Won</td></tr>
                  <tr><td>Card Number</td><td>123456789123</td></tr>
                  <tr><td>Card Type</td><td>Visa / Credit</td></tr>
                  <tr><td>Expire Date</td><td>May/17/2030</td></tr>
                  <tr><td>CVV Code</td><td>***</td></tr>
                  <tr><td>Address</td><td>601 West 110th St. Apt 6J5</td></tr>
                  <tr><td>City</td><td>New York</td></tr>
                  <tr><td>State</td><td>New York</td></tr>
                  <tr><td>Zip</td><td>10025</td></tr>
                  <tr><td>Phone</td><td>(123) 456 7890</td></tr> 
               </table>
               <a href="#"><p id="edit"><i class="fa fa-pencil" style="color: #FECB00;"></i> edit</p></a>
               <a href="#"><p id="delete"><i class="fa fa-times" style="color: #FECB00;"></i> delete</p></a>               
            <h4 align="center" id="shipinfo">SHIPPING INFORMATION</h4> 
               <table id="form3">
                  <tr><td>Name</td><td>Jieun Won</td></tr>
                  <tr><td>Address</td><td>601 West 110th St. Apt 6J5</td></tr>
                  <tr><td>City</td><td>New York</td></tr>
                  <tr><td>State</td><td>New York</td></tr>
                  <tr><td>Zip</td><td>10025</td></tr>
                  <tr><td>Phone</td><td>(123) 456 7890</td></tr> 
               </table>
               <a href="#"><p id="edit"><i class="fa fa-pencil" style="color: #FECB00;"></i> edit</p></a>
               <a href="#"><p id="delete"><i class="fa fa-times" style="color: #FECB00;"></i> delete</p></a>               
            <h4 align="center" id="myorder">MY ORDER</h4>
            <table id="form4">
               <tr><td>DATE</td><td>ORDER</td><td>SHIPPING</td><td>PAYMENT METHOD</td></tr>
               <tr><td>5/17</td><td>Pancakes</td><td>601 West 110th St. Apt 6J5</td><td>Visa/Credit</td></tr>
               <tr><td>5/23</td><td>Carrot Cakes</td><td>601 West 110th St. Apt 6J5</td><td>Visa/Credit</td></tr>  
            </table> 
            <a href="#"><p id="edit"><i class="fa fa-pencil" style="color: #FECB00;"></i> edit</p></a>
            <a href="#"><p id="delete"><i class="fa fa-times" style="color: #FECB00;"></i> delete</p></a>  
         </div>       
      </div>
      <!--   FOOTER   -->
      <?php 
          include_once("footer.php");//your website's header template 
      ?>   						
   </body>
</html>   
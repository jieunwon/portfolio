<?php
session_start();
if (!isset ($_SESSION ["manager"])) {
   header ("location: admin_login.php");
   exit();
}
?>
<?php
//Error Reporting
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8"> 
      <title>Admin Control Panel</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
      <link href="css/style.css" rel="stylesheet"> 
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"> 
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <?php 
         include_once("header_after.php");//your website's header template 
      ?>  
      
      <div id="container">
         <h2 align="center">Administrative Panel</h2>
         <hr>
         <h3 align="center">Manage Inventory</h3>
         <h3 align="center"><a href="updateinventory.php#AddNewItem">+Add New Menu Item</a></h3>   
      </div>
      
      <!--   FOOTER   -->
      <?php 
          include_once("footer.php");//your website's header template 
      ?>
   
   </body>
</html>   
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
      <title>Egg Yolk | Order</title>      
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet">
      <link href="css/order.css" rel="stylesheet">
      <link href="css/hover.css" rel="stylesheet" media="all">    
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

   </head>
   <body>
      <?php 
         include_once("header_after.php");//your website's header template 
      ?>  
      <div id="container">
         <img src="img/order.png">  

         <div id="order_menu"> 
            <h3><i class="fa fa-chevron-right"></i> Breakfast Menu</h3>
            <table id="table1">

                  <?php	
                     $con = mysqli_connect ('localhost', 'root', 'root', 'orders')
                     or die('Error connecting to MySQL server.');	
               	  	 $query = "SELECT * FROM menu where Category='Breakfast'";
               	  	 $result= mysqli_query($con, $query);
               	  	 $itemcount = mysqli_num_rows($result);
               	  	 
               	  	 if($itemcount>0) {
               	  	    while($row = mysqli_fetch_array($result)) {
               	  	       $itemid = $row["ItemID"];
               	  	       $itemtitle = $row["ItemTitle"];
               	  	       $itemDesc = $row["ItemDesc"];
               	  	       $price = $row["Price"];
               	  	       
               	  	       echo ('<tr><td class="firsttd"><a href="product_display.php?itemid=' .$itemid. '">'. $itemtitle. '</a></td><td>'.$itemDesc. '</td><td>$ '. $price. '</td><td class="add">');
                            echo ('<a href="cart.php?id='.$itemid. '"><i class="fa fa-plus"></i> Add</a> </td></tr>');
               	  	    }
               	  	 }   
               	  	 else {
               	  	    echo('No products to display');
               	  	 }      
               	  ?>
            </table>
      	   <h3><i class="fa fa-chevron-right"></i> Lunch Menu</h3>
            <table>
                      
                     <?php	
                        $con = mysqli_connect ('localhost', 'root', 'root', 'orders')
                        or die('Error connecting to MySQL server.');	
                  	  	 $query = "SELECT * FROM menu where Category='Lunch'";
                  	  	 $result= mysqli_query($con, $query);
                  	  	 $itemcount = mysqli_num_rows($result);
                  	  	 
                  	  	 if($itemcount>0) {
                  	  	    while($row = mysqli_fetch_array($result)) {
                  	  	       $itemid = $row["ItemID"];
                  	  	       $itemtitle = $row["ItemTitle"];
                  	  	       $itemDesc = $row["ItemDesc"];
                  	  	       $price = $row["Price"];
                  	  	       
                  	  	       echo ('<tr><td class="firsttd"><a href="product_display.php?itemid=' .$itemid. '">'. $itemtitle. '</td><td>'.$itemDesc. '</td><td>$'. $price. '</td><td class="add">');
                               echo ('<a href="cart.php?id='.$itemid. '"><i class="fa fa-plus"></i> Add</a></td></tr>');
                  	  	    }
                  	  	 }   
                  	  	 else {
                  	  	    echo('No products to display');
                  	  	 }      
                  	  ?>
            </table>
      	   <h3><i class="fa fa-chevron-right"></i> Dinner Menu</h3>
            <table>
                
               <?php	
                  $con = mysqli_connect ('localhost', 'root', 'root', 'orders')
                  or die('Error connecting to MySQL server.');	
            	  	 $query = "SELECT * FROM menu where Category='Dinner'";
            	  	 $result= mysqli_query($con, $query);
            	  	 $itemcount = mysqli_num_rows($result);
            	  	 
            	  	 if($itemcount>0) {
            	  	    while($row = mysqli_fetch_array($result)) {
            	  	       $itemid = $row["ItemID"];
            	  	       $itemtitle = $row["ItemTitle"];
            	  	       $itemDesc = $row["ItemDesc"];
            	  	       $price = $row["Price"];
            	  	       
            	  	       echo ('<tr><td class="firsttd"><a href="product_display.php?itemid=' .$itemid. '">' . $itemtitle. '</td><td>'.$itemDesc. '</td><td>$ '. $price. '</td><td class="add">');
                         echo ('<a href="cart.php?id='.$itemid. '"><i class="fa fa-plus"></i> Add</a></td></tr>');
            	  	    }
            	  	 }   
            	  	 else {
            	  	    echo('No products to display');
            	  	 }      
            	  ?>
      	   </table>
      	   <h3><i class="fa fa-chevron-right"></i> Drink &amp; Dessert Menu</h3>
            <table>
            
            <?php	
               $con = mysqli_connect ('localhost', 'root', 'root', 'orders')
               or die('Error connecting to MySQL server.');	
         	  	 $query = "SELECT * FROM menu where Category='Dessert'";
         	  	 $result= mysqli_query($con, $query);
         	  	 $itemcount = mysqli_num_rows($result);
         	  	 
         	  	 if($itemcount>0) {
         	  	    while($row = mysqli_fetch_array($result)) {
         	  	       $itemid = $row["ItemID"];
         	  	       $itemtitle = $row["ItemTitle"];
         	  	       $itemDesc = $row["ItemDesc"];
         	  	       $price = $row["Price"];
         	  	       
         	  	       echo ('<tr><td class="firsttd"><a href="product_display.php?itemid=' .$itemid. '">' . $itemtitle. '</td><td>'.$itemDesc. '</td><td>$ '. $price. '</td><td class="add">');
                      echo ('<a href="cart.php?id='.$itemid. '"><i class="fa fa-plus"></i> Add</a></td></tr>');
         	  	    }
         	  	 }   
         	  	 else {
         	  	    echo('No products to display');
         	  	 }      
         	  ?>
      	   </table>
         </div>     
      </div>
      <!--   FOOTER   -->
      <?php 
          include_once("footer.php");//your website's header template 
      ?>   						
   </body>
</html>   
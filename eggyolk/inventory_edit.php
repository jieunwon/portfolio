<?php
   session_start();
   if (!isset($_SESSION["manager"])) {
      header("location: admin_login.php");
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
               <link href="css/hover.css" rel="stylesheet" media="all">  

         <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
         <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"> 
         <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <?php 
         include_once("header_after.php");//your website's header template 
      ?>

      <div id="container">   
        <h1>Manage Inventory</h1>
        <hr>
        <h2>Edit Menu Item</h2>
        <?php
        //Display chosen menu item
           if(isset($_GET['itemid'])) {
   	        $con = mysqli_connect('localhost', 'root', 'root', 'orders')
   	           or die('Error connecting to MySQL server.');
   	        $iid = $_GET['itemid'];
   	        
   	        $sql = "SELECT * FROM menu where ItemID = '$iid' LIMIT 1";
   	        $result = mysqli_query($con, $sql);
   	        if (mysqli_num_rows($result) == 1) {
  			   $row = mysqli_fetch_array($result);
  			   $itemTitle = $row["ItemTitle"]; 	   
   	   		   $itemDesc = $row["ItemDesc"];
   	   		   $price = $row["Price"];
   	   		   $category = $row["Category"];
   	   		} else {
   			   echo ('No products to display');
   			}	   
   	     }
   	   ?>     	 
    	   <form action="inventory_edit.php" enctype="multipart/form-data" method="post">
    	      <table width="90%" border="0" cellspacing="10" cellpadding="5">
    	         <tr>
    	            <td width="20%">Menu Item Title</td>
    	            <td width="60%"><label><input name="ItemTitle" type="text" value="<?php echo $itemTitle; ?>" id="itemtitle" size="30">
    	            </label></td> 
    	   		 </tr>
    	   		 <tr>
    	            <td>Menu Item Description</td>
    	            <td><label><input name="ItemDesc" type="text" value="<?php echo $itemDesc; ?>" id="ItemDesc" size="80">
    	            </label></td> 
    	   		 </tr>
    	   		 <tr>
    	            <td>Menu Item Price</td>
    	            <td><label><input name="Price" type="text" value="<?php echo $price; ?>" id="Price" size="12">
    	            </label></td> 
    	   		 </tr>
    	   		 <tr>
    	            <td>Menu Item Category</td>
    	            <td><label><input name="Category" value="<?php echo $category; ?>" type="text" id="Category" size="20">
    	            </label></td> 
    	   		 </tr>
    	   		 <tr>
        	          <td>Product Image</td>
        	          <td><label><input name="fileField" type="file" id="fileField">
        	          </label></td>
        	     </tr> 
    	   		 <tr>
    	            <td><input type="hidden" name="thisID" value="<?php echo $iid; ?>">
    	            <input type="submit" value="Update Item"></td> 
    	   		 </tr>
             <a href="updateinventory.php" align="center">Back to Update</a> 
    	      </table>		 
    	   </form>
    	   <?php
    	       if (isset($_POST['ItemTitle'])) {
    	          $itemid = trim($_POST['thisID']);
   			        $title = trim($_POST['ItemTitle']);
   			        $desc = trim($_POST['ItemDesc']);
   			        $price = trim($_POST['Price']);
   			        $cat = trim($_POST['Category']);
   			  
   			        $con = mysqli_connect('localhost', 'root', 'root', 'orders');
         			  //Update this menu item in the menu table
         			  $sql = "UPDATE menu SET ItemTitle='$title', ItemDesc='$desc', Price='$price', Category='$cat' WHERE ItemID='$itemid' ";
         			  mysqli_query($con, $sql); //It is empty, so we don't need to use variable "$result=" ahead of mysqli_query. We use that with keyword "SELECT"
         			  $pid = mysqli_insert_id($con);
              	      //Place image in the folder
              	      $newname = "$pid.jpg";
              	      move_uploaded_file($_FILES['fileField']['tmp_name'],"Images/$newname");

         			  header("location: updateinventory.php");
         			  exit();	 	         	  
    	       }
    	   ?> 
         
  	   </div>
       <!--   FOOTER   -->
      <?php 
          include_once("footer.php");//your website's header template 
      ?>
   </body>
</html>
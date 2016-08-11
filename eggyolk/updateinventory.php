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

<?php
//Delete Item
if(isset($_GET['deleteid'])) {
   echo 'Are you sure you want to delete a menu item with ID '. $_GET['deleteid'].
   '?<a href="updateinventory.php?yesdelete='.$_GET['deleteid'].'"> Yes </a>
   <a href="updateinventory.php"> No </a>';
   exit();
}
if(isset($_GET['yesdelete'])) {
   //remove item from the database
   $itemid_todelete = $_GET['yesdelete'];
   $sql = "DELETE FROM menu WHERE ItemID='$itemid_todelete' LIMIT 1";
   $con = mysqli_connect('localhost', 'root', 'root', 'orders')
      or die('Error connecting to MySQL server.');	
   $result = mysqli_query($con, $sql);	
   header("location: updateinventory.php");
}   
?> 
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Egg Yolk | Admin Control Panel</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script' rel='stylesheet' type='text/css'>
      <link href="css/style.css" rel="stylesheet"> 
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"> 
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <style type="text/css">
         #table1 {
            border: 1px solid #000;
            border-spacing: 20px 12px;
            display: block;
            margin: 0px auto;
            margin-bottom: 60px;
         }
         #table1 #titletr td {
            border-bottom: 2px solid #FECB00;
            padding: 10px;
            text-align: center;
         }

         #table1 td:first-child, #table1 td:last-child, #table1 td:nth-child(6) {
            text-align: center;   
         }
         #table2 {
            border: 1px solid #000;
            border-spacing: 15px 15px;
            display: block;
            margin: 0px auto;
            margin-bottom: 30px;
         }
         #table2 input {
            border: 3px double #FECB00;
         }
        
         .addtitle {
            background-color: #FECB00; 
            padding-left: 20px;
         }
         #additem {
            display: block;
            margin: 0 auto;
            margin-bottom: 60px;
            padding: 10px;
            background-color: #FECB00;
            border-radius: 10px;
            font-weight: bold;
         }


      </style>
   </head>
   <body>
      <?php 
         include_once("header_after.php");//your website's header template 
      ?>
      
      <div id="container">
         <h2 align="center">Manage Inventory</h1>
         <hr><br>
         <table id="table1">
            <tr id="titletr">
               <td>Item ID</td><td>Item Title</td><td>Item Desc</td><td>Price</td><td>Category</td><td>Edit</td><td>Delete</td>
            </tr>   
           
         <?php 
            $con=mysqli_connect('localhost', 'root', 'root', 'orders')
            or die('Error connecting to MySQL Server.');
            $product_list="";
            $sql = "SELECT * FROM menu";
            $result = mysqli_query($con, $sql);
            $itemcount = mysqli_num_rows($result);
            if($itemcount>0) {
               while ($row = mysqli_fetch_array($result)) {
                  $itemid = $row["ItemID"];
                  $itemTitle = $row["ItemTitle"];
                  $itemDesc = $row["ItemDesc"];
                  $price = $row["Price"];
                  $category = $row["Category"];
                  $product_list="<tr><td>$itemid</td><td>$itemTitle</td><td>$itemDesc</td><td>$price</td><td>$category</td><td><a href='inventory_edit.php?itemid=$itemid'>Edit</a></td><td>
                  <a href='updateinventory.php?deleteid=$itemid'>Delete</a></td></tr>";
                  echo($product_list);
               }
            }   
            else {
         	   echo('No products to display');
            }         
      	 ?>
         </table>
         <a href="updateinventory.php" align="center">Refresh Inventory</a>


         <hr>
      	 <h2 align="center">Add New Item</h2>
      	 
      	 
      	 <form action="updateinventory.php" enctype="multipart/form-data" method="post">
      	    <table width="90%" border="0" cellspacing="10" cellpadding="5" id="table2">
      	       <tr>
      	          <td width="20%" class="addtitle">Menu Item Title</td>
      	          <td width="60%"><label><input name="ItemTitle" type="text" id="itemtitle" size="30"></label></td>
      	       </tr>
      	       <tr>
      	          <td class="addtitle">Menu Item Description</td>
      	          <td><label><input name="ItemDesc" type="text" id="ItemDesc" size="80"></label></td>
      	       </tr>
      	       <tr>
      	          <td class="addtitle">Menu Item Price</td>
      	          <td><label>$ <input name="Price" type="text" id="price" size="12"></label></td>
      	       </tr>
      	       <tr>
      	          <td class="addtitle">Menu Item Category</td>
      	          <td><label><input name="Category" type="text" id="Category" size="20"></label></td>
      	       </tr>
      	       <tr>
      	          <td class="addtitle">Product Image</td>
      	          <td><label><input name="fileField" type="file" id="fileField">
      	          </label></td>
      	       </tr>    
      	    </table>
      	    <input type="submit" value="ADD ITEM" id="additem">
      	 </form>
       
      	 <?php
      	    if(isset($_POST['ItemTitle'])) {
      	       $title = trim($_POST['ItemTitle']);
      	       $desc = trim($_POST['ItemDesc']);
      	       $price = trim($_POST['Price']);
      	       $cat = trim($_POST['Category']);
      	       $sql = "SELECT itemid FROM menu where itemtitle='$title' LIMIT 1";
      	       $result = mysqli_query($con, $sql);
      	       $itemcount = mysqli_num_rows($result);
      	       if($itemcount>0) {
      	          echo ('Sorry this item already exist.<a href="updateinventory.php">Click Here to continue.</a>');
      	          exit();
      	       }
      	       $sql = "INSERT INTO menu (ItemTitle, ItemDesc, Price, Category) VALUES ('$title', '$desc', '$price', '$cat')";
      	       mysqli_query($con, $sql);
      	       $pid = mysqli_insert_id($con);
      	       //Place image in the folder
      	       $newname = "$pid.jpg";
      	       move_uploaded_file($_FILES['fileField']['tmp_name'],"Images/$newname");
      	       // header("location: updateinventory.php");
      	    }     
      	           
      	 ?>    
         </div> 
         <!--   FOOTER   -->
         <?php 
            include_once("footer.php");//your website's header template 
         ?>	 
   </body>
</html>
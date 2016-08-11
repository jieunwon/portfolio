<?php
session_start();
if (!isset ($_SESSION ["username"])) {
   header ("location: account_login.php");
   exit();
}
?>
<?php
//Error Reporting
   // error_reporting(E_ALL);
   // ini_set('display_errors', '1');
?>

<?php
//check if itemid is set or exist in the database
if(isset($_GET['itemid'])) {
   $prodid = $_GET['itemid'];

   $con = mysqli_connect('localhost', 'root', 'root', 'orders') or die('Error connecting to MySQL server.');
   $query = "SELECT * FROM menu where ItemID = '$prodid' LIMIT 1";
   $result = mysqli_query($con, $query);
   $itemcount = mysqli_num_rows($result);

   if($itemcount>0) {
      while($row = mysqli_fetch_array($result)) {
         $itemid = $row["ItemID"];
         $itemtitle = $row["ItemTitle"];
         $itemDesc = $row["ItemDesc"];
         $price = $row["Price"];
         $cat = $row["Category"];
      }
   }
}
else {
      echo "No product to display";
  	  exit();
  
  	  mysql_close();
} 

?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title><?php echo $itemtitle; ?></title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet">
      <link href="css/hover.css" rel="stylesheet" media="all">      
      <link rel="stylesheet" href="css/prettify.css" />
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">  
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <style type="text/css">
         img {
            margin-left: 16px;
            border: 1px solid #FECB00;
            margin-top: -10px;   
         }
         #container {
            margin-top: 40px;
            margin-bottom: 100px;
         }
      </style>
   </head>
   <body>
      <?php 
         include_once("header_after.php");//your website's header template 
      ?> 
      <div id="container">
         <h1 style="margin-left: 40px;"><?php echo $itemtitle; ?></h1>
         <table width="100%" border="0" cellspacing="10" cellpadding="15">
            <tr>
               <td width="20%" valign="top"><img src="Images/<?php echo $itemid; ?>.jpg" width="200" height="220"><br>
               <a href="Images/<?php echo $itemid; ?>.jpg" style="margin-left: 24px;">View the Full Size Image</a></td>
    			<td width="80%" valign="top"><h3><?php echo $itemtitle; ?></h3>
    			   <p><?php echo $itemDesc; ?><br>
    			   $ <?php echo $price; ?><br>
    			   <?php echo $cat; ?><br>
    			   <a href="cart.php?id=<?php echo $itemid; ?>"><input type="submit" value="Add to cart" style="margin-top: 20px;"></a>
    		    </td>         
            </tr>   
         </table>
      </div>   
      <!--   FOOTER   -->
      <footer>  
         <p>copyright &copy; 2015 egg yolk restaurant</p>
         <p>* * <a href="adminhome.php">*</a></p> 
      </footer> 
      <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
      <script src="js/jquery.revolver.min.js"></script>
      <script src="js/prettify.js"></script>

      <script type="text/javascript">

            var $revolver = $('#revolver').revolver(),
                revolver  = $revolver.data('revolver'),
                $controls = $('.controls');

            $controls.find('.first, .previous, .next, .last, .play, .stop, .pause, .restart').click(function(e){
                e.preventDefault();
                revolver[this.className]();
            });

            $controls.find('.goto').click(function(e){
                e.preventDefault();
                revolver.goTo($(this).data('goto'));
            });

      </script>
      
      <?php 
         inclue_once("footer.php");//your website's footer template
      ?>   
   
   </body>
</html>   
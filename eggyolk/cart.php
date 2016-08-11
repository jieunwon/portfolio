<?php
//this section checks if user logged
session_start();
if (!isset($_SESSION["username"])) {
	header("location: account_login.php");
	exit();
	}
?>
<?php
//this section enables error handling
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>


<?php
//this section creates shopping cart array

if(isset($_GET['id'])) {
	$itemid = $_GET['id'];
	$wasFound = false;
	$i = 0;

	//if the cart session variable is not set or cart array is empty
	if(!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1) {
		//RUN if cart is empty or session is not set
			$_SESSION["cart_array"] = array(1 => array("itemid" => $itemid, "quantity" => 1));

	} else {
		//RUN if the cart has at least one item
		foreach ($_SESSION["cart_array"] as $each_item) {
			$i++;
			while (list($key, $value) = each($each_item)) {
				if($key == "itemid" && $value == $itemid) {
					//the item is already in the cart - adjust quantity
					array_splice($_SESSION["cart_array"], $i-1, 1, array(array("itemid" => $itemid, "quantity" => $each_item['quantity'] + 1)));
					$wasFound = true;
					}
				}
			}
			//new item added to the cart
			if($wasFound == false) {
				array_push($_SESSION["cart_array"], array("itemid" => $itemid, "quantity" => 1));
			}
		}
	}



?>

<?php
	////this section checks if user chooses to empty shopping cart
	if(isset($_GET['cmd']) && $_GET['cmd'] == "emptycart") {
		unset($_SESSION["cart_array"]);
		}

?>

<?php
	////this section checks if user chooses to adjust item quantity

	if (isset($_POST['item_to_adjust']) && $_POST['item_to_adjust'] != "") {
	    $item_to_adjust = $_POST['item_to_adjust'];
		$quantity = $_POST['quantity'];
		$quantity = preg_replace('#[^0-9]#i', '', $quantity); // filter everything but numbers
		if ($quantity >= 100) { $quantity = 99; }
		if ($quantity < 1) { $quantity = 1; }
		if ($quantity == "") { $quantity = 1; }
		$i = 0;
		foreach ($_SESSION["cart_array"] as $each_item) {
			      $i++;
			      while (list($key, $value) = each($each_item)) {
					  if ($key == "itemid" && $value == $item_to_adjust) {
						  // That item is in cart already so lets adjust its quantity using array_splice()
						  array_splice($_SESSION["cart_array"], $i-1, 1, array(array("itemid" => $item_to_adjust, "quantity" => $quantity)));
					  } // close if condition
			      } // close while loop
		} // close foreach loop
}
?>

<?php
	////this section checks if user chooses to remove an item from the shopping cart
if (isset($_POST['item_to_remove']) && $_POST['item_to_remove'] != "") {
    // Access the array and run code to remove that array index
	$key_to_remove = $_POST['item_to_remove'];
	if (count($_SESSION["cart_array"]) <= 1) {
		unset($_SESSION["cart_array"]);
	} else {
		unset($_SESSION["cart_array"]["$key_to_remove"]);
		sort($_SESSION["cart_array"]);
	}
}
?>

<?php
//Display Shopping Cart
$shoppingCart = "";
$product_id_array = "";
$cartTotal = "";
$priceTotal = "";
$pp_checkout_btn = "";

$con = mysqli_connect ('localhost', 'root', 'root', 'orders')
		or die('Error connecting to MySQL server.');

if(!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1) {
	$shoppingCart = "<h3>Your shopping cart is empty.</h3>";
}
else {
	// Start PayPal Checkout Button
	$pp_checkout_btn .= '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	    <input type="hidden" name="cmd" value="_cart">
	    <input type="hidden" name="upload" value="1">
    	<input type="hidden" name="business" value="you@youremail.com">';
	$i = 0;
	foreach ($_SESSION["cart_array"] as $each_item) {
		$itemid = $each_item['itemid'];
		$sql = "SELECT * FROM menu where ItemID ='$itemid' LIMIT 1";
		$result = mysqli_query($con, $sql);
		while ($row = mysqli_fetch_array($result)) {
			$itemtitle = $row['ItemTitle'];
			$price = $row['Price'];
		}
		$priceTotal = $price * $each_item['quantity'];
		$cartTotal = $priceTotal + $cartTotal;
		setlocale(LC_MONETARY, "en_US");
		$priceTotal = money_format("%10.2n", $priceTotal);
		// Dynamic Checkout Btn Assembly
		$x = $i + 1;
		$pp_checkout_btn .= '<input type="hidden" name="item_name_' . $x . '" value="' . $itemtitle . '">
		     <input type="hidden" name="amount_' . $x . '" value="' . $price . '">
        	<input type="hidden" name="quantity_' . $x . '" value="' . $each_item['quantity'] . '">  ';
		// Create the cart items array variable
		$product_id_array .= "$itemid-".$each_item['quantity'].",";
		// Dynamic shopping cart table display assembly
		$shoppingCart .= '<tr style="background: #fff;">';
		$shoppingCart .= '<td style="text-align: left; padding-left: 30px;">' .$itemtitle. '</td>&nbsp;';
		$shoppingCart .= '<td>$ ' .$price. '</td>';
		$shoppingCart .= '<td><form action="cart.php" method="post">
		<input name="quantity" type="text" value="' . $each_item['quantity'] . '" size="1" maxlength="2" />
		<input name="adjustBtn' . $itemid . '" type="submit" value="change" />
		<input name="item_to_adjust" type="hidden" value="' . $itemid . '" />
		</form></td>';
		$shoppingCart .= '<td>' .$priceTotal. '</td>';
		$shoppingCart .= '<td><form action="cart.php" method="post"><input name="deleteBtn'
		. $itemid . '" type="submit" value="X" /><input name="item_to_remove" type="hidden" value="' . $i . '" /></form></td>';
		$shoppingCart .= '</tr>';
		//$shoppingCart .= '<td>' . $each_item['quantity'] . '</td>';
		$i++;
	}
		setlocale(LC_MONETARY, "en_US");
	    $cartTotal = money_format("%10.2n", $cartTotal);
		$cartTotal = "<div style='font-size:18px; margin-top:25px;'>Cart Total : ".$cartTotal." USD</div>";
		//echo ($cartTotal);
		// Finish the Paypal Checkout Btn
			$pp_checkout_btn .= '<input type="hidden" name="custom" value="' . $product_id_array . '">
			<input type="hidden" name="notify_url" value="https://www.yoursite.com/storescripts/my_ipn.php">
			<input type="hidden" name="return" value="https://www.yoursite.com/checkout_complete.php">
			<input type="hidden" name="rm" value="2">
			<input type="hidden" name="cbt" value="Return to The Store">
			<input type="hidden" name="cancel_return" value="https://www.yoursite.com/paypal_cancel.php">
			<input type="hidden" name="lc" value="US">
			<input type="hidden" name="currency_code" value="USD">
			<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with PayPal - its fast, free and secure!">
	</form>';
}
?>
<!DOCTYPE html> 
<html>
	<head>
	  <meta charset="utf-8">	
	  <title>Cart | egg yolk</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet">
      <link href="css/hover.css" rel="stylesheet" media="all">      
	  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">      
	  <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">   	
	  <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
	  <style type="text/css">
         	#title {
         	   letter-spacing: 0.05em;
         	   color: #000;
         	   
         	   text-align: center;
         	}

         	td:first-child {
         		padding-left: 15px;
         	    padding-right: 15px;
         	}

         	table {
         	   margin-right: auto;
         	   margin-left: auto;
         	   margin-bottom: 50px;
         	   width: 660px;
         	   display: block;
         	}



         	h2 {
         	   padding-top: 50px;
         	   color: #FECB00;
         	   letter-spacing: 0.06em;
         	   display: block;
         	}
         	h3 {
         	   display: block;
         	   margin-left: 150px;
         	   color: #fff;
         	}
         	
         	a, #container i {
         	   text-decoration: none;
         	   color: #000;
         	}

         	img {
         		margin: 20px auto;
	            display: block;
	            border: 1px solid #FECB00;
	            margin-bottom: 40px;
         	}
         	
         	#cartbox {
         		color: #000;
         		display: block;
         		margin: 0 auto;
         		width: 960px;
         		background-image: url("img/kinfolkcookies2.png");
	            border: 1px solid #FECB00;
	            padding-bottom: 30px;

         	}
         	td {
         	   padding: 10px 15px;
         	   text-align: center;
         	   border: 3px double #000;
         	   
         	}
         	#carttotal {
         	   margin-left: 16%;
         	   color: #FECB00;

         	}

         	#carttotalamount {
         	   margin-left: 420px;
         	   color: #FECB00;

         	}

         	#paypalbutton {
               margin-left: 68%;
         	}
         	h4, h4 i {
         	   margin-top: -2%;
         	   color: #FECB00;
         	}
         	
         
      </style>	
	</head>
	<body>
	   <?php 
          include_once("header_after.php");//your website's header template 
       ?> 
	   
         <div id="container">
            <div id="pageContent">
			   <img src="img/newacc.png">	 
			   <div id="cartbox">
			      <h2 align="center">Shopping Cart </h2>
			      <a href="orderselection.php"><h3 style="color: #fff;"><i class="fa fa-angle-double-left" style="color: #fff;"></i>  back to order page</h3></a>
				  <br />
				  <table cellspacing="3" cellpadding="6">
				     <tr id="title">
				        <td bgcolor="#FECB00"><strong>PRODUCT</strong></td>
				        <td bgcolor="#FECB00"><strong>PRICE</strong></td>
				        <td bgcolor="#FECB00"><strong>QUANTITY</strong></td>
				        <td bgcolor="#FECB00"><strong>TOTAL</strong></td>
				        <td bgcolor="#FECB00"><strong>REMOVE</strong></td>
				     </tr>

				     <?php echo $shoppingCart; ?>

				  </table>
				  <div id="carttotal">
				     <div id="carttotalamount"><?php echo $cartTotal; ?></div>
					 <br />
					 <br />
					 <div id="paypalbutton"><?php echo $pp_checkout_btn; ?></div>
					 <br />
					 <br />
					 <a href="cart.php?cmd=emptycart"><h4><i class="fa fa-times" style="color: #FECB00;"></i> Click here to empty your shopping cart</h4></a>
					 <br />
				  </div>
			</div>
	     </div>
			
	  </div>
	  <!--   FOOTER   -->
      <?php 
          include_once("footer.php");//your website's header template 
      ?> 		
   </body>
</html>


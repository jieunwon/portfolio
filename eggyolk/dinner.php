<?php
   session_start();
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
      <title>Egg Yolk | Dinner</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
      <link href="css/style.css" rel="stylesheet"> 
      <link href="css/hover.css" rel="stylesheet" media="all">  
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"> 
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
   
   </head>
   <body>
      <?php 
         include_once("header_before.php");//your website's header template 
      ?>  
      <div id="container">
         <div class="menu_title">
            <h1>Dinner Menu</h1>
            <h3>entrées</h3>
         </div>
         <div id="row" align="left">
            <ul>
               <li><figure class="cap-bot"><img src="img/halfchicken.png"><figcaption>Half Chicken<br>barley and farro “risotto”, cauliflower, wilted kale, fig-balsamic reduction<br>19.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/porkchop.png"><figcaption>Pork Chop<br>caramelized gala apple, walnut, bourbon sauce, brioche stuffing, panko-breaded onion ring<br>21.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/steakfrites.png"><figcaption>Steak Frites<br>truffle french fries, creamed spinach gratin, marchand de vin sauce<br>24.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/chickenpaillards.png"><figcaption>Chicken Paillard<br>grilled chicken breast, market greens, hearts of palm, grape tomato, red onion, balsamic reduction<br>18.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/fishandchips.png"><figcaption>Fish and Chips<br>beer battered tilapia, classic tartar, french fries<br>16.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/tunaburger.png"><figcaption>Tuna Burger<br>yellowfin tuna, pickled bean sprouts, red onion, siracha mayo, brioche<br>18.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/shrimppopcorn.png"><figcaption>Popcorn Shrimp<br>bloody mary cocktail and tartar sauce<br>12.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/brieencroute.png"><figcaption>Brie En Croute<br>vermont brie, puff pastry, fig compote<br>8.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/beetsalad.png"><figcaption>Beet Salad<br>pink grapefruit chermoula, feta cheese, arugula<br>10.00</figcaption></figure></li>
       
            </ul>            
         </div> 
         <!--   FOOTER   -->
      <?php 
         include_once("footer.php");//your website's header template 
      ?>  
      </div>

   </body>
</html>   
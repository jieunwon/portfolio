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
      <title>Egg Yolk | Drink &amp; Dessert</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
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
            <h1>Drink &amp; Dessert Menu</h1>
            <h3>dessert &amp; drinks</h3>
         </div>   
         <div id="row">
            <ul>
               <li><figure class="cap-bot"><img src="img/appleturnover.png"><figcaption>Apple Turnover<br>apple, cherries, egg, nutmeg, orange zest, and orange juice<br>6.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/carrotcake.png"><figcaption>Carrot Cake<br>fresh grated carrot, brown sugar, eggs, yogurt and cream cheese frosting<br>5.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/brownie.png"><figcaption>Brownie<br>premiun belgian chocolate, butter, eggs, and walnuts<br>5.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/pumpkincremebrulee.png"><figcaption>Pumpkin Crème Brulee<br>pumpkin puree, coarse sugar, ground cloves, ginger, nutmeg, cinnamon, and heavy cream<br>8.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/bananasplit.png"><figcaption>Banana Split<br>banana, vanilla &amp; chocolate &amp; strawberry ice cream, fresh strawberries, pineapple, syrup, peanuts, cherries and whipped cream<br>9.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/belgianwaffle.png"><figcaption>Belgian Waffle<br>waffles, strawberries, sugar powder, blueberries and whipped cream<br>7.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/espressomartini.png"><figcaption>Classic Espresso Martini<br>shot of espresso, amaretto, coffee and hazelnut liqueur, irish cream<br>4.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/pumpkinspicemartini.png"><figcaption>Pumpkin Spice Martini<br>pumpkin spiced cream liqueur, kentucky bourbon, coffee liqueur, nutmeg<br>5.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/redzingericedtea.png"><figcaption>Red Ginger Iced Tea<br>Sliced, peeled fresh ginger, sugar, hibiscus, lemon juice and lemon wedges<br>4.00</figcaption></figure></li>
            </ul>            
         </div>
         <?php 
         include_once("footer.php");//your website's header template 
      ?>
      </div> 
      <!--   FOOTER   -->
           						
   </body>
</html>   
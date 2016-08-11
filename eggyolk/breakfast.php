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
      <title>egg yolk | Breakfast</title>
      <link rel="stylesheet" href="css/font-awesome.css"> 
      <script src="http://maps.google.com/maps/api/js?sensor=false"></script>     
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
            <h1>Breakfast Menu</h1>
            <h3>entrées</h3>
         </div>
         <div id="row">
            <ul>
               <li><figure class="cap-bot"><img src="img/pancake.png"><figcaption>Pancake<br>classic pancake with maple syrup and whipped cream for serving<br>7.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/CroissantFrenchToast.png"><figcaption>Croissant French Toast<br>fresh baked croissant, maple syrup, apples, whipped cream for serving<br>8.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/omelette.png"><figcaption>Omelette<br>choice of two: cheddar, swiss, blue or goat cheese, tomatoes, spinach, mushrooms, onions, avocado or bacon<br>10.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/sandwich.png"><figcaption>Classic Club<br>grilled or fried chicken, bacon, cheddar, avocado, chipotle mayo, grilled panini<br>11.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/kalefigsalad.png"><figcaption>Kale Fig Salad<br> chopeed kale, sweet balsamic dressing, romain lettuce, tomato, dried figs and sunflower seeds<br>11.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/grilledcheese.png"><figcaption>Grilled Cheese<br>aged new york cheddar, sliced brioche {add smoked bacon or tomato 2.00 each}<br>8.00<br></figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/shrimpsalad.png"><figcaption>Shrimp Salad<br>medium shrimp, butter lettuce, tomato, abocado and cucumber<br> 9.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/salmonblt.png"><figcaption>Salmon BLT <br>crisp smoked bacon, lettuce, tomato and herb mayo, sourdough toast<br>13.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/huevosrancheros.png"><figcaption>Huevos Rancheros<br>two eggs, corn tortillas, black beans, ranchero salsa, avocado, jack cheese<br>11.00</figcaption></figure></li>     
            </ul>            
         </div>

       <!--   FOOTER   -->
      <?php 
         include_once("footer.php");//your website's header template 
      ?>  

             

        
      </div>     						
   </body>
</html>   
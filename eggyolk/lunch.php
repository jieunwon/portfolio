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
      <title>Egg Yolk | Lunch</title>      
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet"> 
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 
            <link href="css/hover.css" rel="stylesheet" media="all">  
     
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"> 
            <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
   
   </head>
   <body>
      <?php 
         include_once("header_before.php");//your website's header template 
      ?>  
      <div id="container">
         <div class="menu_title">
            <h1>Lunch Menu</h1>
            <h3>entrées</h3>
         </div>
         <div id="row">
            <ul>
               <li><figure class="cap-bot"><img src="img/crispycalamari.png"><figcaption>Crispy Calamari<br>fresh creole remoulade, marinara, fresh lime<br>11.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/spinachartichokedip.png"><figcaption>Spinach Artichoke Dip<br>toasted pumpernickel, white truffle<br>9.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/tunatartare.png"><figcaption>Tuna Tartare<br>yellowfin tuna, soy, jalapeño, avocado, wonton<br>13.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/sweetandspicywings.png"><figcaption>Sweet and Spicy Wings<br>sesame, fresh scallion, soy-ginger-honey glaze<br>9.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/shrimppoboy.png"><figcaption>Shrimp Po' Boy<br>fried gulf shrimp, mignonette pickled red onion, shredded lettuce, tomato, cajun remoulade, grilled ciabatta<br>12.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/meatballparmesan.png"><figcaption>Meatball Parmesan<br>braised beef meatballs, fresh mozzarella, pan tomato sauce, basil, balsamic reduction, grilled ciabatta<br>11.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/meatloafsandwich.png"><figcaption>Meatloaf Sandwich<br> shoestring onion rings, arugula, caramelized onions, chive demi-glace, grilled panini roll<br>11.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/chickentaco.png"><figcaption>Chicken Taco<br>salsa verde, cotija cheese, quick pickled red cabbage<br>16.00</figcaption></figure></li>
               <li><figure class="cap-bot"><img src="img/salmonsaladnicoise.png"><figcaption>Salmon Salad Nicoise<br>herbed atlantic salmon, red bliss potato, hard- boiled egg, red onion, grape tomato, olives, green beans, red wine vinaigrette<br>18.00</figcaption></figure></li>
            </ul>            
         </div> 
         <?php 
         include_once("footer.php");//your website's header template 
      ?>      
      </div> 
      <!--   FOOTER   -->
          						
   </body>
</html>   
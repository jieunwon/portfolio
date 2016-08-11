<?php
//Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Egg Yolk Brooklyn</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="css/prettify.css" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">
      <link href="css/hover.css" rel="stylesheet" media="all">  
      <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <style type="text/css">
         #container {
             margin-top: 60px; 
             padding-bottom: 150px; 
             border: 3px double #FECB00;
         }
         #container p {
            margin-top: 100px;
            line-height: 27px;
         }
      </style>
   </head>
   <body>
      <?php 
         include_once("header_before.php");//your website's header template 
      ?>  
      <div id="container">
         <div style="margin-left: 140px; padding-top: 50px;" id="context">
         <h2 align="center" class="fadeInUp"></h2>
            <p>&ldquo;Egg Yolk Takes New York!&rdquo;<br>
                <span class="press">- New York Magazine -</span><br><br>
                &ldquo;The Best Restaurant of the Year. Swanky, trendy decor and American comfort cuisine, beautiful<br>
                people and an achingly cool reputation make Egg Yolk our pick for the best eatery of the year!&rdquo;<br>
                <span class="press">- Instinct Magazine -</span><br><br>
                &ldquo;Part of the Brooklyn arts scene? A follower of fashion? Part of the uber-attractive crowd?<br>
                You will love this sleek hotspot with the chicest of chow.&rdquo;<br>
                <span class="press">- Gotham Magazine -</span><br><br>
                &ldquo;There's no pressure and not too much attitude-yet at this Brooklyn eatery that<br> 
                attracts a fashionista crowd with
                fabulous cocktails and fancy schmancy
                1960's Miami decor.&rdquo;<br>
                <span class="press">- Zagat -</span></p>
          </div>
      </div>
      <script>
         $("#context").hide();

         $("#context").fadeIn(2000);
      </script>
      
      <!--   FOOTER   -->
      <?php 
         include_once("footer.php");//your website's header template 
      ?>  
      
      
   
   </body>
</html>   
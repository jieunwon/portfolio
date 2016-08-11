<?php
//Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">      
      <title>About | Egg Yolk Brooklyn</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="css/prettify.css" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <link href="css/hover.css" rel="stylesheet" media="all">       
      <style type="text/css">
         #container {
             background-image: url('img/aboutus.png'); 
             background-repeat: no-repeat;
             padding-bottom: 250px;
             margin-top: 40px; 
             margin-left: 16%;
         }
         #context {
            margin-top: 50px;
            line-height: 27px;
            font-style: italic;
            margin-left: -15px;
         }
      </style>
   </head>
   <body>
      <?php 
         include_once("header_after.php");//your website's header template 
      ?>  
      <div id="container">
         <div align="center" style="margin-top: 120px;">
              <p id="context">“Egg Yolk Takes New York!”<br>
                  <span class="press">- New York Magazine</span><br><br>
                  “The Best Restaurant of the Year. Swanky, trendy décor and American “comfort” cuisine, beautiful<br>
                  people and an achingly cool reputation make Egg Yolk our pick for the best eatery of the year!”<br>
                  <span class="press">- Instinct Magazine</span><br><br>
                  "Part of the Brooklyn arts scene? A follower of fashion? Part of the uber-attractive crowd?<br>
                  You’ll love this sleek hotspot with the chicest of chow.”<br>
                  <span class="press">- Gotham Magazine</span><br><br>
                  "There's no pressure and not too much attitude-yet at this Brooklyn eatery that<br> 
                  attracts a fashionista crowd with
                  fabulous cocktails and fancy schmancy
                  1960's Miami decor."<br>
                  <span class="press">- Zagat</span></p>
          </div>
      </div>
      
      <!--   FOOTER   -->
      <?php 
          include_once("footer.php");//your website's header template 
      ?> 
      
     
   
   </body>
</html>   
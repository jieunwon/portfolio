
<?php
// //Error Reporting
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Egg Yolk Brooklyn</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet">
      <link href="css/hover.css" rel="stylesheet" media="all">      
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <style type="text/css">
         .logo {
            text-decoration: none;
            color: #000;
         }
      </style>
   </head>
   <body>
      <?php 
         include_once("header_after.php");//your website's header template 
      ?>  
      
      <div id="container">
         <div id="revolver" class="revolver container stack">

                <img class="slide" src="img/1.png" alt="" />
                <img class="slide hidden" src="img/2.png" alt="" />
                <img class="slide hidden" src="img/3.png" alt="" />
                <img class="slide hidden" src="img/4.png" alt="" />
                <img class="slide hidden" src="img/5.png" alt="" />
                <img class="slide hidden" src="img/6.png" alt="" />
         </div>
      </div>
             
      <!--   FOOTER   -->
      <?php 
         include_once("footer.php");//your website's header template 
      ?> 
      
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
      
   
   </body>
</html>   
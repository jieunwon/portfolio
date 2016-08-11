<?php
// session_start();
// // if (!isset ($_SESSION ["manager"])) {
// //    header ("location: admin_login.php");
// //    exit();
// }
?>
<?php
//Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">    
      <title>Location | egg yolk</title>
      <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet">
      <link href="css/hover.css" rel="stylesheet" media="all"> 
      <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/prettify.css" />
      <style type="text/css">
        #container {
           width: 90%;
           height: 100%;
           margin-right: 15%;
           margin-left: 15%;
           padding-top: 1.5em;
           margin-bottom: 80px;
        }
        div#map {
          margin-top: 70px;
          margin-left: 10%;
          width: 400px; 
          height: 400px;
          display: inline-block;
          border: 4px double #FECB00;
          position: absolute;

        }
        div#list {
          width: 200px;
          height: 369px;
          margin-left: 570px;
          border: 3px double #FECB00;
          display: inline-block;
          position: relative;
          margin-top: 70px;
          padding-right: 30px;
          padding-top: 30px;
        }

        div#list ul {
        }
        
        .red-marker, #list i {
          color: #fd7567;
        }
        ul li {
          list-style: none;
          line-height: 1.5em;
        } 
        .border {
           border-bottom: 1px solid #000;
           margin-bottom: 20px;
           margin-top: 20px;
        }
        #firstline {
          margin-bottom: 10px;
        }
      </style>

 
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"> 
   </head>
   <body>
      <?php 
         include_once("header_before.php");//your website's header template 
      ?>  
      <div id="container">
         <div id="map">
         <script src="js/findastore.js"></script>
         </div>
         <div id="list">
           <ul>
              <li id="firstline"><span class="red-marker"><i class="fa fa-map-marker"></i></span> egg yolk</li><br>
              <li><span class="border">Address</span><br>109 N 3rd St Brooklyn, NY 11249</li><br>
              <li><span class="border">Phone</span><br>(718) 302-5151</li><br>
              <li><span class="border">Hours</span><br>7 days 8AM-5PM</li>
           </ul>   
         </div>  
         
      </div>
      
      <!--   FOOTER   -->
      <?php 
         include_once("footer.php");//your website's header template 
      ?> 
      
    
   </body>
</html>   
<?php
  $requested_page = isset($_GET['page']) ? $_GET['page'] : 'landing-page';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enjoy and Learn - Home of online learning. BETA</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800&effect=3d" rel="stylesheet">
    <link rel="stylesheet" href="css/eassy.css"/>
    <link rel="stylesheet" href="css/colours.css"/>
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="js/nifty.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.6.1/p5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.6.1/addons/p5.dom.js"></script>
  </head>
  
  <body>
    <?php require_once("header.php"); ?>
    
    <?php require("view/" . $requested_page . ".php") ?>
   
    <?php require_once("footer.php"); ?>
  </body>
  
</html>
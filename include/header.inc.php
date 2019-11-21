<?php
      // Pulls data information and configuration used through out the application.
      require_once 'config.inc.php';
     // Pulls data elements used through out the entier website
     require_once 'content.data.php';
     // Pulls functions used through out the entier website
     require_once 'functions.inc.php';
     if($_SERVER["SERVER_PORT"] == '80' && $_SERVER["HTTP_HOST"] !== 'localhost'){
       header('Location: https://'.$_SERVER["HTTP_HOST"]);
     }
?>

<!doctype html>
     <?php
          //this is begining of the html the browser will process
     ?>
<html>
     <?php
     //information used by the browser
     ?>
     <head>
          <meta charset="utf-8">
          <?php
          /*
               displayed anywhere the title is used
               for the browser, search engines, etc.
          */
          ?>
          <title><?php echo SITENAME; ?></title>
          <?php
          /*
               used to display information about the
               page by search engines and other sites
               looking at our page.
          */
          ?>
          <meta name="description" content="inside out is a class project we use to learn html."/>
          <link rel="stylesheet" type="text/css" href="assets/css/style.css">
          <script>
               var siteName = '<?php echo SITENAME; ?>';
          </script>
     </head>
     <?php
     //contnet displayed in the browser window
     ?>
     <body>
          <header>
               <h1><a href="index.php"><?php echo SITENAME; ?></a></h1>
               <h2>continuously falling forward in to the light...</h2>
               <nav>
			     <?php echo menuBuilder($content['pages']); ?>
               </nav>
          </header>
<?php 

    //Pulls data elements used through out the entier website
    require_once 'content.data.php';

    //Pulls functions used through out the entier website
    require_once 'functions.inc.php';


    /*
        The following will be passed along to JavaScript by estabilishing 
        variables in PHP and passing them into the HTML via Global 
        JavaScript variables the same names used in PHP
    */

    $sitename = 'inside out | 2xx';
?>

<!doctype html>
<?php
    //this is the begining of the html the browser will process
?>
<html>

<?php
    //information used by the browser
?>

<head>

    <meta charset="utf-8">

    <?php    
     /* displayed anywhere the title is used
      for the browser, search engines, ect.
    */
?>

    <title><?php echo $sitename; ?></title>

    <?php  
      /* used to display information about the
        page by search engines and other sites
        looking at out page.
      */
?>
    <meta name="description" content="inside out is a class project that we use to learn html." />

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script>
        var siteName = '<?php echo $siteName; ?>';
    </script>


</head>

<?php 
    //content displayed in the browser window
?>

<body>

    <header>

        <h1><a href="index.php"><?php echo $sitename; ?></a></h1>

        <h2>continously falling forward in the light...</h2>


        <nav>
            <?php echo menuBuilder($content['pages']); ?>
        </nav>


    </header>
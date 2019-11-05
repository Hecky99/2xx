<?php 

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
            <ul>
                <li><a href="love.php">love</a>
                    <ul>
                        <li><a href="things.html">things</a>

                            <ul>
                                <li><a href="music.html">music</a></li>
                                <li><a href="movies.html">movies</a></li>
                                <li><a href="books.html">books</a></li>
                                <li><a href="websites.html">websites</a></li>
                            </ul>

                        </li>
                        <li><a href="people.php">people</a>

                            <ul>
                                <li><a href="family.html">family</a></li>
                                <li><a href="friends.html">family</a></li>
                                <li><a href="others.html">others</a></li>
                            </ul>

                        </li>
                    </ul>

                </li>

                <li><a href="who.php">who</a>
                    <ul>
                        <li><a href="i.html">i</a>

                        <ul>
                            <li><a href="was_then.html">was then</a></li>
                            <li><a href="am_now.html">am now</a></li>
                            <li><a href="will_be.html">will be</a></li>
                        </ul>
                    </ul>
                </li>
                <li><a href="challenges.php">challenges</a>

                    <ul>
                        <li><a href="behind_me.html">behind me</a></li>
                        <li><a href="ahead_of_me.html">ahead of me</a></li>
                    </ul>
                </li>
                <li><a href="you.php">you</a>

                    <ul>
                        <li><a href="profile.html">profile</a></li>
                        <li><a href="settings.html">settings</a></li>
                    </ul>
            </ul>
            </li>
        </nav>

    </header>
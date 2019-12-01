<?php

	// defines the default title of the website 
	define('SITE_NAME','inside out | STEP 205');

	// defines the default page of the website 
	define('DEFUALT_PAGE','home');
	
	// get the file contents of the menu.json file and store it in this variable as a string.
	$menuData = file_get_contents("assets/data/menu.json");
	
	// create a variable that will capture the array resulting from the php json_decode function.
	$menuJson = json_decode($menuData, true);
	
	// get the file contents of the content.json file and store it in this variable as a string.
	$pageData = file_get_contents("assets/data/content.json");
	
	// create a variable that will capture the array resulting from the php json_decode function.
	$pageJson = json_decode( $pageData, true );

	if($_SERVER['SERVER_NAME'] === 'localhost'){
		/* Database credentials. server with default setting 
		(user 'root' with no password) */
		define( 'DB_SERVER', 'localhost' );
		define( 'DB_USERNAME', 'root' );
		define( 'DB_PASSWORD', '' );
		define( 'DB_NAME', 'web230app_step205' );
	}else{
		/* Database credentials. server with default setting 
		(user 'root' with no password) */
		define( 'DB_SERVER', 'localhost' );
		define( 'DB_USERNAME', 'briansavage_205' );
		define( 'DB_PASSWORD', 'raccpass' );
		define( 'DB_NAME', 'briansavage_205' );
	}

	/* Attempt to connect to MySQL database */
	$link = mysqli_connect( DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME );

	// Check connection
	if ( $link === false ) {
		die( "ERROR: Could not connect. " . mysqli_connect_error() );
	}

?>
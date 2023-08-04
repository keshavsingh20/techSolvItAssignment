<?php
    // start the session
    session_start();

    // constants for non-repeating values
    define('SITEURL','http://localhost/contact_us');
    define('LOCALHOST','localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD','');
    define('DB_NAME','techsolvit');

    // database connectoin
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
    // database selection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); 
    date_default_timezone_set('Asia/Kolkata');
?>

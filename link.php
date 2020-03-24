<?php 
    /* Blocco accesso alla pagina */
    if ($_SERVER["REQUEST_METHOD"]=="GET" && realpath(__FILE__) == realpath( $_SERVER["SCRIPT_FILENAME"] ) ) {
        header( "HTTP/1.0 403 Forbidden", TRUE, 403 );
        die( header( "location: 404.php") );
    }
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap-social.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
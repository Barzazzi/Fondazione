<?php 
    /* Blocco accesso alla pagina */
    if ($_SERVER["REQUEST_METHOD"]=="GET" && realpath(__FILE__) == realpath( $_SERVER["SCRIPT_FILENAME"] ) ) {
        header( "HTTP/1.0 403 Forbidden", TRUE, 403 );
        die( header( "location: 404.php") );
    }
?>
<div class="row mx-0 px-0">
    <div class="col-xl-2 col-lg-1 col-0"></div>
    <div class="col-xl-8 col-lg-10 col-12">
        <img src="Logo.gif" class="img-responsive">
    </div>
    <div class="col-xl-2 col-lg-1 col-0"></div>
    <div class="col-xl-2 col-lg-1 col-0"></div>
    <div class="col-xl-8 col-lg-10 col-12 px-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active border-right">
                <a class="nav-link mr-lg-2" href="index.php" >Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active border-right">
                <a class="nav-link mx-lg-2" href="#" >What We Do</a>
            </li>
            <li class="nav-item active border-right">
                <a class="nav-link mx-lg-2" href="#">Collaboration</a>
            </li>
            <li class="nav-item active border-right">
                <a class="nav-link mx-lg-2" href="aboutUs.php">About Us</a>
            </li>
            <li class="nav-item active border-right">
                <a class="nav-link mx-lg-2" href="contactUs.php">Contacts</a>
            </li>
            </ul>
            <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
    </div>
    <div class="col-xl-2 col-lg-1 col-0"></div>
</div>
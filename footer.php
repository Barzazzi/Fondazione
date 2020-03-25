<?php 
    /* Blocco accesso alla pagina */
    if ($_SERVER["REQUEST_METHOD"]=="GET" && realpath(__FILE__) == realpath( $_SERVER["SCRIPT_FILENAME"] ) ) {
        header( "HTTP/1.0 403 Forbidden", TRUE, 403 );
        die( header( "location: 404.php") );
    }
?>
<div class="sponsor pt-3">
    <div class="container">
        <div class="row mx-0 px-0">
            <div class="col-4 col-md-4">
                <div class="text-center">
                <h5>Sponsor</h5>
                <img class="mb-10 img-fluid" width="200" hight="200" src="sponsor.png">
                </div>
            </div>
            <div class="col-4 col-md-4">
                <div class="text-center">
                    <h5>Partner</h5>
                    <img class="mb-10 img-fluid" width="200" hight="200" src="sponsor.png">
                </div>
            </div>
            <div class="col-4 col-md-4">
                <div class="text-center">
                    <h5>Academic parter</h5>
                    <img class="mb-10 img-fluid" width="200" hight="200" src="sponsor.png">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="info mt-3 p-0 pt-3">
    <div class="row mx-0 px-0">
        <div class="col-7">
            <p>Green Sciences for Sustenaible Development Foundation</p>
        </div>
        <div class="col-5">
            <a class="legal" href="https://it.wikipedia.org/wiki/Legale">Legal notes</a>
        </div>
    </div>
</div>
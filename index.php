<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php require "link.php" ?>
    
    <title>Home Page</title>
  </head>
  <body class="sfondo">
    <header class="sfondo-logo">
      <?php require "header.php" ?>
    </header>
    <div class="row mx-0 px-0 mt-3">
      <div class="col-xl-2 col-lg-1 col-0"></div>
      <div class="col-xl-8 col-lg-10 col-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="articolo1.png" alt="First slide" width="1132 px" height="540 px">
              <div class="carousel-caption d-none d-md-block sfondo-carosello">
                <h5>Call for IUPAC Postgraduate Summer School on Green Chemistry</h5>
                <p>This Summer School will ideally follow the 10 previous editions held in Venice from 1998 to 2008, but this will be the first one under the International Union of Pure and Applied Chemistry IUPAC sponsorship.</p>
                <a class="text-white" href="article.php">Read more >></a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="chemistry.jpg" alt="Second slide" width="1132 px" height="540 px">
              <div class="carousel-caption d-none d-md-block sfondo-carosello">
                <h5>Title 2</h5>
                <p>Subtitle 2</p>
                <a class="text-white" href="#">Read more >></a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="chemistry.jpg" alt="Third slide" width="1132 px" height="540 px">
              <div class="carousel-caption d-none d-md-block sfondo-carosello">
                <h5>Title 3</h5>
                <p>Subtitle 3</p>
                <a class="text-white" href="#">Read more >></a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <div class="sfondo-carosello rounded-circle pt-1 px-1">  
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </div>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <div class="sfondo-carosello rounded-circle pt-1 px-1">  
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </div>
          </a>
        </div>
        <div class="row mt-3 mx-0 articolo">
          <div clas="col-sm-5 col-12">
            <img src="articolo1.png" class="img-fluid" height="215 px" width="360 px">
          </div>
          <div class="col-xl-7 col-sm-6 col-xs-12 pt-1 mx-0">
            <h3>Call for IUPAC Postgraduate Summer School on Green Chemistry</h3>
            <p class="lead"><small>This Summer School will ideally follow the 10 previous editions held in Venice from 1998 to 2008, but this will be the first one under the International Union of Pure and Applied Chemistry IUPAC sponsorship.</small></p>
            <a class="float-right link" href="article.php">Read more >></a>
          </div>
        </div>
        <div class="row mt-3 mx-0 articolo">
          <div clas="col-sm-6 col-12">
            <img src="placeholder.png" class="mr-3 img-fluid" height="215 px" width="360 px">
          </div>
          <div class="col-xl-7 col-sm-6 col-xs-12 pt-1 mx-0">
            <h3>Article title</h3>
            <p class="lead">The subtitle of the article.</p>
            <a class="float-right link" href="#">Read more >></a>
          </div>
        </div>
        <div class="row mt-3 mx-0 articolo">
          <div clas="col-sm-6 col-12 ">
            <img src="placeholder.png" class="mr-3 img-fluid" height="215 px" width="360 px">
          </div>
          <div class=" col-xl-7 col-sm-6 col-xs-12 pt-1 mx-0">
            <h3>Article title</h3>
            <p class="lead">The subtitle of the article.</p>
            <a class="float-right link" href="#">Read more >></a>
          </div>
        </div>
        <nav aria-label="pagination">
          <ul class="pagination justify-content-center mt-3 mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Prev</a>
            </li>
            <li class="page-item ">
              <a class="page-link active" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-xl-2 col-lg-1 col-0"></div>
    </div>
    <footer class="footer mt-3">
      <?php require "footer.php" ?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php require "script.php" ?>
  </body>
</html>
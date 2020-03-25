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
    <div class="row mx-0 px-0">
      <div class="col-sm-2"></div>
      <div class="col-sm-8 pt-2">
        <div class="row mt-3 mx-0 articolo">
          <div clas="col-xs-12 col-sm-5">
            <img src="articolo1.png" class="mr-3" height="215 px" width="360 px">
          </div>
          <div class="col-xs-12 col-sm-7 pt-1">
            <h3>Call for IUPAC Postgraduate Summer School on Green Chemistry</h3>
            <p class="lead"><small>This Summer School will ideally follow the 10 previous editions held in Venice from 1998 to 2008, but this will be the first one under the International Union of Pure and Applied Chemistry IUPAC sponsorship.</small></p>
            <a class="float-right link" href="article.php">Read more >></a>
          </div>
        </div>
        <div class="row mt-3 mx-0 articolo">
          <div clas="col-xs-12 col-sm-5">
            <img src="placeholder.png" class="mr-3" height="215 px" width="360 px">
          </div>
          <div class="col-xs-12 col-sm-7">
            <h1 class="display-4">Article title</h1>
            <p class="lead">The subtitle of the article.</p>
            <a class="float-right link" href="#">Read more >></a>
          </div>
        </div>
        <div class="row mt-3 mx-0 articolo">
          <div clas="col-xs-12 col-sm-5">
            <img src="placeholder.png" class="mr-3" height="215 px" width="360 px">
          </div>
          <div class="col-xs-12 col-sm-7">
            <h1 class="display-4">Article title</h1>
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
      <div class="col-sm-2"></div>
    </div>
    <footer class="footer mt-3">
      <div class="sponsor pt-3">
        <div class="container">
          <div class="row mx-0 px-0">
            <div class="col-4 col-md-4">
              <div class="text-center">
                <h5>Sponsor</h5>
                <img width="200" hight="200" src="sponsor.png">
              </div>
            </div>
            <div class="col-4 col-md-4">
              <div class="text-center">
                <h5>Partner</h5>
                <img width="200" hight="200" src="sponsor.png">
              </div>
            </div>
            <div class="col-4 col-md-4">
              <div class="text-center">
                <h5>Academic parter</h5>
                <img class="mb-10" width="200" hight="200" src="sponsor.png">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="info mt-3 p-0 pt-3">
        <div class="row mx-0 px-0">
          <div class="col-7">
            <p>Foundation Green Sciences for Sustenaible Development</p>
          </div>
          <div class="col-5">
            <a class="legal" href="https://it.wikipedia.org/wiki/Legale">Legal notes</a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php require "script.php" ?>
  </body>
</html>
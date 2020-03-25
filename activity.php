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
    <div class="row mx-0 px-3">
      <div class="col-sm-2"></div>
      <div class="col-sm-8 pt-2">
      <a href="aboutUs.php" class="link"><ion-icon name="caret-back-outline"></ion-icon>Back</a>
      <h2>Activity</h2>
      <img src="placeholder.png" class="mr-3" height="360 px" width="360 px" alt="Responsive image">
      <p>The foundation can carry out all the activity usefull at the realization of the goals.</p>
      </div>
      <div class="col-sm-2"></div>
    </div>
    <footer class="footer mt-3">
      <?php require "footer.php" ?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php require "script.php" ?>
  </body>
</html>
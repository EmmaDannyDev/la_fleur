<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- MY CSS -->
    <link rel="stylesheet" href="css/main.css">

    <title>La Fleur</title>
  </head>
  <body>

    <header>
      <div class="container">
        <img id="logo" src="img/logo.png" alt="logo_tulip" data-id="roses">
        <button id="btn_hamburger_menu" class="btn float-right d-lg-none" type="button">
          <img src="img/hamburger_menu.svg" alt="Hamburger Menu">
        </button>
        <!-- MAIN NAVBAR -->
        <nav id="main_nav" class="navbar navbar-expand-lg navbar-light float-right">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <button class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                BOUQUETS
              </button>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" data-id="composition_florale">Composition florale</a>
                <a class="dropdown-item" href="#" data-id="fleurs_de_saison">Fleurs de saison</a>
                <a class="dropdown-item" href="#" data-id="fleurs_et_chocolat">Fleurs et chocolat</a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#" data-id="roses">ROSES</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-id="orchidees">ORCHIDÉES</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-id="plantes">PLANTES</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- CARDS -->
    <div id="cards_container" class="container">
      <?php include('roses.html')?>
      <?php include('orchidees.html')?>
      <?php include('plantes.html')?>
      <?php include('composition_florale.html')?>
      <?php include('fleurs_de_saison.html')?>
      <?php include('fleurs_et_chocolat.html')?>
    </div>

    <!-- MODAL - FILLED BY JAVASCRIPT (...) -->
    <div class="modal fade" id="my_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title w-100 mb-3 text-center" id="exampleModalLabel">...</h1>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mb-5">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div id="image_viewer" class="row justify-content-center mb-5">
                    <img src="..." width="350" alt="...">
                  </div>
                  <div id="additional_view" class="row justify-content-center">
                    <img class="mr-2" src="..." width="100" alt="...">
                    <img class="mr-2" src="..." width="100" alt="...">
                    <img class="mr-2" src="..." width="100" alt="...">
                    <img class="mr-2" src="..." width="100" alt="...">
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <!--  DESCRIPTION -->
                  <div id="label_description">
                    <span>Description</span>
                  </div>
                  <div id="description" class="mt-4 mb-5">
                    <p>...</p>
                  </div>
                  <!--  COMPOSITION -->
                  <div id="label_composition">
                    <span>Composition</span>
                  </div>
                  <div id="composition" class="mt-4 mb-5">
                    <p>...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="text-center">
      © 2016 All rights reserved | Danny Emma
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- MY JAVASCRIPT -->
    <script src="js/show_content.js"></script>
    <script src="js/filling_modal.js"></script>
    <script src="js/additional_view.js"></script>
    <script src="js/hamburger_menu.js"></script>
  </body>
</html>

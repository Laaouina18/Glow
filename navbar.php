
<?php
include_once("header.php");?>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
         
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PARFUM
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: white;">
                  <li><a class="dropdown-item" href="#">PARFUMS POUR FEMMES</a></li>
                  <li><a class="dropdown-item" href="#">PARFUMS POUR HOMMES</a></li>
                  <li><a class="dropdown-item" href="#">LOTIONS POUR LE CORPS</a></li> 
                  <li><a class="dropdown-item" href="#">AUTRES PRODUITS PARFUMÉS</a></li> 
                  <li><a class="dropdown-item" href="#">COFFRETS CADEAU</a></li> 
               
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  MAQUIAGE
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:white;">
                  <li><a class="dropdown-item" href="#">YEUX</a></li>
                  <li><a class="dropdown-item" href="#">VISAGE</a></li>
                  <li><a class="dropdown-item" href="#">ONGLES</a></li>
                  <li><a class="dropdown-item" href="#">LÈVRES</a></li>
                  <li><a class="dropdown-item" href="#">PINCEAUX ET OUTILS</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  CHEVEUX
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: white;">
                  <li><a class="dropdown-item" href="#">SHAMPOINGS</a></li>
                  <li><a class="dropdown-item" href="#">APRÈS-SHAMPOINGS</a></li>
                  <li><a class="dropdown-item" href="#">COLORATIONS</a></li>
                  <li><a class="dropdown-item" href="#">OUTILS ET BROSSES</a></li>
               
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  SOIN DE LA PEAU
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: white;">
                  <li><a class="dropdown-item" href="#">NETTOYANTS</a></li>
                  <li><a class="dropdown-item" href="#">SÉRUMS ET TRAITEMENTS</a></li>
                  <li><a class="dropdown-item" href="#">MASQUES</a></li>
                  <li><a class="dropdown-item" href="#">PEAUX À PROBLÈMES</a></li>
                  <li><a class="dropdown-item" href="#">CRÈMES HYDRATANTES</a></li>
                  <li><a class="dropdown-item" href="#">OUTILS</a></li>
               
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  SOIN DE CORP
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: white;">
                  <li><a class="dropdown-item" href="#">CORPS</a></li>
                  <li><a class="dropdown-item" href="#">PIEDS</a></li>
                  <li><a class="dropdown-item" href="#">HYGIÈNE INTIME</a></li>
                  <li><a class="dropdown-item" href="#">ENFANTS</a></li>
                  <li><a class="dropdown-item" href="#">Mains</a></li>
                  <li><a class="dropdown-item" href="#">BRUMES PARFUMÉES</a></li>
                </ul>
              </li>
              <?php if (isset($_SESSION['user'])) { ?>
              <li><a class="nav-link " href="dashbord.php" id="navbar" role="button" aria-expanded="false"><i class="fas fa-user-secret me-2"></i>
               <?php echo ' Dashbord';  ?> </a></li>
              <?php }  ?>
           
            </ul>
            <form class="d-flex" id="search">
              <input class="form-floating" type="search" placeholder="Search" aria-label="Search" style="color:black;border-radius:1px solid black;">
              <button class="btn " type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <!-- navbar -->
    


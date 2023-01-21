
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
                <a class="nav-link dropdown-toggle" href="categorie.php?cat=PARFUM" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PARFUM
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: white;">
                  <li><a class="dropdown-item" href="categorie.php?cat=PFEMMES">PARFUMS POUR FEMMES</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=PHOMMES">PARFUMS POUR HOMMES</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=LOTIONS">LOTIONS POUR LE CORPS</a></li> 
                  <li><a class="dropdown-item" href="categorie.php?cat=AUTRES">AUTRES PRODUITS PARFUMÉS</a></li> 
                  <li><a class="dropdown-item" href="categorie.php?cat=COFFRETS">COFFRETS CADEAU</a></li> 
               
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="categorie.php?cat=MAQUIAGE" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  MAQUIAGE
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:white;">
                  <li><a class="dropdown-item" href="categorie.php?cat=YEUX">YEUX</a></li>
                  <li><a class="dropdown-item"href="categorie.php?cat=VISAGE">VISAGE</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=ONGLES">ONGLES</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=LEVRES">LÈVRES</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=POUTILS">PINCEAUX ET OUTILS</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="categorie.php?cat=CHEVEUX" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  CHEVEUX
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: white;">
                  <li><a class="dropdown-item" href="categorie.php?cat=SHAMPOINGS">SHAMPOINGS</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=APRES">APRÈS-SHAMPOINGS</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=COLORATIONS">COLORATIONS</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=OUTILS">OUTILS ET BROSSES</a></li>
               
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="categorie.php?cat=SOIN DE LA PEAU" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  SOIN DE LA PEAU
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: white;">
                  <li><a class="dropdown-item" href="categorie.php?cat=NETTOYANTS">NETTOYANTS</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=SERUMS">SÉRUMS ET TRAITEMENTS</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=MASQUES">MASQUES</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=PPROBLEMES">PEAUX À PROBLÈMES</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=CREMES">CRÈMES HYDRATANTES</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=OUTILS">OUTILS</a></li>
               
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="categorie.php?cat=SOINDECORP" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  SOIN DE CORP
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: white;">
                  <li><a class="dropdown-item"  href="categorie.php?cat=CORPS">CORPS</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=PIEDS">PIEDS</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=HYGIENE">HYGIÈNE INTIME</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=ENFANTS">ENFANTS</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=MAINS">MAIN</a></li>
                  <li><a class="dropdown-item" href="categorie.php?cat=BRUNES">BRUMES PARFUMÉES</a></li>
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
    


<?php
session_start();
include_once("productClass.php");
$test=new product;
$produit=$test->getProduct();
include_once("navbar.php");


?>

    <!-- product cards -->
  
    <div class="container" id="product-cards">
     
      <div class="row " style="margin-top: 30px;">
      <?php foreach ($produit as $produit): ?>
        <div class="col-md-3 py-3 py-md-0 produit" style="margin-bottom:22px;">
          <div class="card ">
          <?php echo '<img class="imgfluid" src="data:image/jpeg;base64,' . base64_encode($produit["image"]) . '" />'; ?>
            <div class="card-body">
              <h3 class="text-center produit_name"><?php echo $produit["name"]; ?> </h3>
              <p class="text-center"><?php echo $produit["description"]; ?></p>
              <div class="star text-center">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
              </div>
              <h2><?php echo $produit["prix"] ?>$<span><li class="fa-solid fa-cart-shopping"></li></span></h2>
            </div>
            <div><a href="about.php?id=<?php echo $produit["id"] ?>" class="btn btn-secondary d-flex justify-content-start" style="margin-bottom:2px; width:40%;">Voir plus...</a></div>
          </div>
        </div>
        <?php endforeach;?> 
        </div>
      </div>
   









<?php include_once("footer.php") ?>














    
   



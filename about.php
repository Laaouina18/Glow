
<?php session_start();
include_once("productClass.php");
$test=new product;
$id = $_GET["id"];
$produit=$test->get($id);

include_once("navbar.php")?>
    <div class="container" id="about">
        
        <hr>
        <h1><?php echo $produit["name"] ?></h1> 
        <hr>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-5 py-3 py-md-0">
                <div class="card">
                <?php echo '<img class="imgfluid" src="data:image/jpeg;base64,' . base64_encode($produit["image"]) . '" />'; ?>
                </div>
            </div>
            <div class="col-md-7 py-3 py-md-0">
              
              <h1><label for="">Prix:</label><?php echo $produit["prix"]?>$</h1>
              
                <p><?php echo $produit ["description"]?></p>
            </div>
        </div>
    </div>








    <!-- offer -->
    <div class="container" id="offer">
      <div class="row">
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-cart-shopping"></i>
          <h3>Free Shipping</h3>
          <p>On order over $1000</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-rotate-left"></i>
          <h3>Free Returns</h3>
          <p>Within 30 days</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-truck"></i>
          <h3>Fast Delivery</h3>
          <p>World Wide</p>
        </div>
        <div class="col-md-3 py-3 py-md-0">
          <i class="fa-solid fa-thumbs-up"></i>
          <h3>Big choice</h3>
          <p>Of products</p>
        </div>
      </div>
    </div>
    <!-- offer -->





    
 



<?php  include_once("footer.php")?>
   
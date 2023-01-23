<?php
include_once("productClass.php");
$id=$_GET["id"];
$test = new product;
$produit = $test->get($id);
// if (isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
//     // Add the image to the data array
//     $data['image'] = file_get_contents($_FILES['image']['tmp_name']);
// } else {
//     // Get the old image from the database
//     $furniture = $produit->getProduct($data);
//     // Add the old image to the data array
//     $data['image'] = $furniture->image;
// }
if(isset($_POST["submit"])){
    $data = array(
        'id' => $id,
        'name' => $_POST['name'],
        'prix' => $_POST['prix'],
        'description' => $_POST['description'],
        'categorie' =>$_POST["categorie"],
        'quantite' =>$_POST["quantite"],

    );
    if (isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])) {
        // Add the image to the data array
        $data['image'] = file_get_contents($_FILES['image']['tmp_name']);
    } else {
        // Get the old image from the database
        $test = new product;
        $produit = $test->get($data["id"]);
        // Add the old image to the data array
        $data["image"] = $produit['image'];
    }
    $test = new product;
    $poduit = $test->update($data);
    header("location:dashbord.php");

}
include_once("navbar.php");
 ?>
<div class="container" >
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
           <h1 class="text-center">Modifier Produit</h1>
        <div>
                    <form method="post" enctype="multipart/form-data" id="form-1">
                        <div class="form-fieldset">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $produit["name"] ?>"placeholder="name"style=" border-color: #ed008c;">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file"  id="image" class="form-control" placeholder="image"name="image"style=" border-color: #ed008c;">
                            </div>
                            <div class="form-group mb-3">
                                <label for="statut">Catégorie</label>
                                <select class="form-select" aria-label="Default select example"value="<?php echo $produit["categorie"] ?>" name="categorie"style=" border-color: #ed008c;">
                                    <option value="PFEMMES" selected>PARFUMS POUR FEMMES</option>
                                    <option value="PHOMMES">PARFUMS POUR HOMMES</option>
                                    <option value="LOTIONS" selected>LOTIONS POUR LE CORPS</option>
                                    <option value="AUTRES">AUTRES PRODUITS PARFUMES</option>
                                    <option value="COFFRETS" selected>COFFRETS CADEAUX</option>
                                    <option value="YEUX">YEUX</option>
                                    <option value="VISAGE">VIQSAGE</option>
                                    <option value="ONGLES" selected>ONGLES</option>
                                    <option value="LEVRES">LEVRES</option>
                                    <option value="POUTILS" selected>PINCEAUX ET OUTILS</option>
                                    <option value="SHAMPOINGS">SHAMPOINGS</option>
                                    <option value="APRES" selected>APRES SHAMPOINGS</option>
                                    <option value="COLORATIONS">COLORATIONS</option>
                                    <option value="OUTILS" selected>OUTILS ET BROSSES</option>
                                    <option value="NETTOYANTS">NETTOYANTS</option>
                                    <option value="SERUMS" selected>SERUMS ET NETTOYANTS</option>
                                    <option value="MASQUES">MASQUES</option>
                                    <option value="PPROBLEMES">PEAUX A PROBLEMES</option>
                                    <option value="CREMES">CREMES HYDRATANTES</option>
                                    <option value="OUTILS">OUTILS</option>
                                    <option value="CORPS">CORPS</option>
                                    <option value="PIEDS">PIEDS</option>
                                    <option value="HYGIENE">HYGIENE INTIME</option>
                                    <option value="ENFANTS">ENFANTS</option>
                                    <option value="MAINS">MAINS</option>
                                    <option value="BRUMES">BRUMES PARFUMES</option>
                                 
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" value="<?php echo $produit["description"] ?>" style=" border-color: #ed008c;">
                            </div>
                            <div class="form-group">
                                <label for="prix">Prix</label>
                                <input type="number" name="prix" class="form-control" value="<?php echo $produit["prix"] ?>" name="prix"style=" border-color: #ed008c;">
                            </div>
                            <div class="form-group">
                                <label for="prix">Quantité</label>
                                <input type="number" class="form-control" value="<?php echo $produit["quantite"] ?>" name="quantite"style=" border-color: #ed008c;">
                            </div>
                        </div>
                        <div class="form-group2">
                            <button type="submit" class="btn btn-primary" name="submit"style=" color: white;
    background-color:#ed008c;
    
    margin:20px;">Valider</button>
    
                        </div>
                    </form>

                </div>
            </div>
        </div>
    
</div>
<?php include_once("footer.php")?>
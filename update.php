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
        'statut' =>1,

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

}
include_once("navbar.php");
 ?>
<div class="container" style="margin-right: 0px; margin-top:8%;  margin-bottom:8%;">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center"><a href="#"
                        class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fa fa-home"></i></a>Ajouter un Product
                </div>
                <div>
                    <form method="post" enctype="multipart/form-data" id="form-1">
                        <div class="form-fieldset">
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $produit["name"] ?>"placeholder="name">
                            </div>
                            <div class="form-group">
                                <label for="image">image</label>
                                <input type="file"  id="image" class="form-control" placeholder="image"name="image">
                            </div>
                            <div class="form-group">
                                <label for="description">description*</label>
                                <input type="text" name="description" class="form-control" placeholder="description">
                            </div>
                            <div class="form-group">
                                <label for="prix">prix*</label>
                                <input type="number" name="prix" class="form-control" placeholder="prix" name="prix">
                            </div>
                        </div>
                        <div class="form-group2">
                            <button type="submit" class="btn btn-primary" name="submit">Valider</button>
    
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("footer.php")?>
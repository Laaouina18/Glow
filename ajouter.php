<?php
include_once("productClass.php");
if (isset($_POST['submit'])) {
    $newProduct = new product();
    $newProduct->addProduct();
}

?>
<?php 
include_once("navbar.php");

?>
<div class="container" style="margin-right: 0px; margin-top:8%;  margin-bottom:8%;">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="d.flex align-items-center">
            <h1 class="text-center">Ajouter Produit</h1>
                <div>
                    <form method="post" enctype="multipart/form-data" id="form-1">
                        <div class="form-fieldset">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" name="name[]" class=" form-control"placeholder="name" style=" border-color: #ed008c;">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image[]" id="image" class="form-control" placeholder="image"style=" border-color: #ed008c;">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description[]" class="form-control" placeholder="description"style=" border-color: #ed008c;">
                            </div>
                            <div class="form-group mb-3">
                                <label for="statut">Statut</label>
                                <select class="form-select" aria-label="Default select example" name="statut[]"style=" border-color: #ed008c;">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Résilié</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="prix">prix*</label>
                                <input type="number" name="prix[]" class="form-control" placeholder="prix" style=" border-color: #ed008c;">
                            </div>
                        </div>
                        <div class="form-group2">
                            <button type="submit" class="btn btn-primary" name="submit" style=" color: white;
    background-color:#ed008c;
    width:20%;
    margin:20px;">Valider</button>
                            <button type="button" class="add-more btn btn-secondary"style=" color: white;
    background-color:#ed008c;
    
    margin:20px;">Add More</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Clone the first form fieldset and add a button to remove it
        var formFieldset = document.querySelector(".form-fieldset").cloneNode(true);
        var removeBtn = document.createElement("button");
        removeBtn.classList.add("remove-fieldset", "btn", "btn-danger");
        removeBtn.innerHTML = "Remove";
        removeBtn.style.color='white';
        removeBtn.style.margin='20px';
    
        formFieldset.appendChild(removeBtn);

        // Add click event listener to the "Add More" button
        var addMoreBtn = document.querySelector(".add-more");
        addMoreBtn.addEventListener("click", function () {
            // Append the cloned form fieldset to the form
            var form = document.querySelector("#form-1");
            form.appendChild(formFieldset.cloneNode(true));
        });

        // Add click event listener to the "Remove" buttons
        document.addEventListener("click", function (event) {
            if (event.target.classList.contains("remove-fieldset")) {
                // Remove the parent fieldset when the "Remove" button is clicked
                event.target.parentNode.remove();
            }
        });
    });
</script>


<?php include_once("footer.php") ?>

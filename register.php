<?php
include_once("productCalass.php");
if (isset($_POST['submit'])) {
    $createUser = new User();
    $createUser->register();
}
include("navbar.php");

?>

<div class="container" style="margin-top: 10%; margin-bottom:10%;">
    <div class="row my-4">
        <div class="col-md-1- mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Inscription</h3>
                </div>
                <div class="card-body bg-light">
                    <form method="post" class="mr-1">
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" placeholder="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pass">pass</label>
                            <input type="password" name="pass" placeholder="pass" class="form-control">
                        </div>
                        <button name="submit" class="btn btn-sm btn-warning">Inscription</button>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="login" class="btn btn-link">Connexion</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("footer.php") ?>
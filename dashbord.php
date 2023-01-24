<?php 
session_start();
if(!isset($_SESSION['user'])){
    header("location:index.php");
}

$user = json_decode(json_encode($_SESSION['user']), true);

include_once("productClass.php");
$test=new product;
$produit=$test->getProduct();
if (isset($_GET["a"])) {
    if ($_GET["a"] == "supprimer") {
        $id = $_GET["id"];
        $sup = new product;
        $sup->deleteProduct($id);
        header("location:dashbord.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOWGURU</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white " id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Dashbord</div>
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item bg-transparent  active" style="color:#000;"><i
                    class="fas fa-shopping-cart me-2"></i>PRODUITS</a>
                <a href="categorie.php?cat=SHAMPOINGS" class="list-group-item  bg-transparent  fw-bold">CHEVEUX</a>
                <a href="categorie.php?cat=CORPS" class="list-group-item  bg-transparent  fw-bold">SOIN DE CORP</a>
                <a href="categorie.php?cat=NETTOYANTS" class="list-group-item bg-transparent fw-bold">SOIN DE PEAUX</a>
                <a href="#" class="list-group-item  bg-transparent  fw-bold">MAQUIALLGES</a>
                <a href="categorie.php?cat=PFEMMES" class="list-group-item  bg-transparent  fw-bold">PARFUMS</a>
                <a href="categorie.php?cat=VISAGE" class="list-group-item bg-transparent fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Chat</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent  fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>Outlet</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <a class="navbar-brand" href="index.html" id="logo"><span id="span1">Glow</span>Guru</a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
           
                                <i class="fas fa-user me-2"></i><?php echo $user['name'];?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                <li><a class="dropdown-item" href="logout.php"><img src="./images/register.png" alt="" width="18px">Logout</a></li>
                                <li>  <a href="ajouter.php" class="dropdown-item" >Ajouter Produit</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php echo count($produit) ?></h3>
                                <p class="fs-5">Produits</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Sales</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                 
                    <h3 class="fs-4 mb-3">Les produits</h3>
                
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Produit</th>
                                    <th scope="col">image</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">quantité</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($produit as $produit): ?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?php echo $produit["name"]; ?></td>
                                    <td><?php echo '<img class="imgfluid" src="data:image/jpeg;base64,' . base64_encode($produit["image"]) . '" style="width:20%;border-radius:40%;margin:0;"/>'; ?></td>
                                    <td><?php echo $produit["prix"]; ?>$</td>
                                    <td><?php echo $produit["quantite"]?></td>
                                     <td><form class="d-flex flex-wrap">
                                        <div class="p-2"><a href="update.php?a=modifier&id=<?php echo $produit["id"] ?>"style="color:blue;"><img src="/images/update.png" style="width:20px;color:red;"></i></a></div>
                                        <div  class="p-2"><a href="dashbord.php?a=supprimer&id=<?php echo $produit["id"] ?>" style="color:#ed008c;"><img src="/images/DELETE.png" alt="" style="width:20px;color:blue;"></a></div>
                                     
                                     
                            </form> </td>
                            
            
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
 
</body>

</html>

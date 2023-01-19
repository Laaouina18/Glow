
<?php include_once("header.php");

// Classe Database pour gérer la connexion à la base de données
class Database {
  private $host = "localhost";
  private $dbname = "glow";
  private $username = "root";

  private $conn;
  public function connect() {
    try {
      $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, "");
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      die("Connection failed: " . $e->getMessage());
    }
    return $this->conn;
  }
}

// Classe User pour gérer les utilisateurs
class User {
  private $conn;
  public function __construct() {
    $db = new Database();
    $this->conn = $db->connect();
  }
  public function checkUser($email, $pass) {
    $stmt = $this->conn->prepare("SELECT * FROM admin WHERE email = :email AND pass = :pass");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $pass);
    $stmt->execute();
    return $stmt;
  }
}
if ($_SERVER['REQUEST_METHOD']=='POST') {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Vérification de l'utilisateur
    $user = new User();
    $stmt = $user->checkUser($email, $pass);
    if ($stmt->rowCount() == 1) {
        // Connexion réussie
        session_start();
        $_SESSION['user'] = $email;
        header('Location: index.php');
    } else {
        // Connexion échouée
        
        echo "<div class='alert alert-danger' style='width:30%;margin:auto;'>
        <strong>!!!</strong> Nom d'utilisateur ou mot de passe incorrect
      </div>";
    }
}

?>

<div class="d.flex align-items-center" style="margin-top: 10%;">
<h1 class="text-center">Connection à l'espace d'admin</h1>
<form action="/login.php" method="post">
  <div class="mb-3 mt-3">
  
    <input type="email"  class=" form-control" id="email" placeholder="Enter email" name="email" required >
  </div>
  <div class="mb-3">
   
    <input type="password" id="pass" class="form-control"  placeholder="Enter password" name="pass"required>
  </div>
 <div class="mb-3">
  <button type="submit" id="btn"class=" form-control" name="save" >Enregistrer</button></div>
</form>
</div>


<?php include_once("footer.php") ?>


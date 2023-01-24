<?php include_once("header.php");
      include_once("connection.php");
session_start();
// Classe Database pour gérer la connexion à la base de données


// Classe User pour gérer les utilisateurs
class User
{
    private $conn;
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }





    public function login($data)
    {
        $email = $data['email'];
        try {
            $stmt = $this->conn->prepare("SELECT * FROM admin WHERE email=:email");
            $stmt->execute(array(":email" => $email));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            // die(print_r($user));

            return $user;
        } catch(PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
  public function auth()
  {
      if (isset($_POST['submit'])) {
          $data['email'] = $_POST['email'];
      $user = new user;
          $result = $user->login($data);

          // if($result->email === $_POST['email'] && password_verify($_POST['pass'],$result->pass)){
          if (isset($result) && $result->email === $_POST['email'] && password_verify($_POST['pass'], $result->pass)) {
              $_SESSION['user'] = $result;
              header("location:index.php");

              $_SESSION['user'] = $result;
          } else {
              echo "<div class='alert alert-danger' style='width:30%;margin:auto;'>
                <strong>!!!</strong> Nom d'utilisateur ou mot de passe incorrect
                </div>";
          }
      }
  }
}
  
if (isset($_POST['submit'])) {
    $loginUser = new User();
    $loginUser->auth();
}

?>

<div class="d.flex align-items-center" style="margin-top: 10%;">
  <h1 class="text-center">Connection à l'espace d'admin</h1>
  <form action="/login.php" method="post">
    <div class="mb-3 mt-3">

      <input type="email" class=" form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="mb-3">

      <input type="password" id="pass" class="form-control" placeholder="Enter password" name="pass" required>
    </div>
    <div class="mb-3">
      <button type="submit" id="btn" class=" form-control" name="submit">Enregistrer</button>
    </div>
  </form>
</div>


<?php include_once("footer.php") ?>
<?php
include_once("connection.php");


class User
{
    private $conn;
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }


    public function createUser($data){
        $stmt = $this->conn->prepare("INSERT INTO admin (email,pass)
        VALUES (:email,:pass)");
        $stmt->bindParam(':email',$data['email']);
        $stmt->bindParam(':pass',$data['pass']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt->close();
        $stmt = null;


    }
    public function register(){
        if(isset($_POST['submit'])){
            // $options = [
            //     'cost' => 12
            // ];
            $pass = password_hash($_POST['pass'],PASSWORD_BCRYPT);
            $data = array(
                'email' => $_POST['email'],
                'pass' => $pass,
            );
            $result = User::createUser($data);
            if($result === 'ok'){
                header("location:login.php");

            }else{
                echo $result;
            }
        }
    }

}
class product
{

    public function addProduct()
    {
        if (isset($_POST['submit'])) {
            // Check if any of the form fields are empty
            if (empty($_POST['name']) && empty($_POST['description']) && empty($_POST['prix'])&& empty($_POST['quantite']) || empty($_FILES['image'])) {
                // Display error message
                echo "All form fields are required. Please fill out the form and try again.";
            } else {
                $data = array();
                // loop through the name, description, statut and prix arrays
                foreach ($_POST['name'] as $key => $name) {
                    $data[$key]['name'] = $name;
                    $data[$key]['description'] = $_POST['description'][$key];
                    $data[$key]['categorie'] = $_POST['categorie'][$key];
                    $data[$key]['prix'] = $_POST['prix'][$key];
                    $data[$key]['quantite'] = $_POST['quantite'][$key];
                }
                // loop through the image array
                foreach ($_FILES['image']['tmp_name'] as $key => $image) {
                    $data[$key]['image'] = file_get_contents($image);
                }
                $db = new product();
                $result =$db->add($data);
                if ($result === 'ok') {
                   header("location:index.php");
                    // Form was submitted successfully
                } else {
                    echo $result;
                }
            }
        }
    }
     public function add($data)
    {
        $db = new Database();

        foreach ($data as $product) {
          
            $stmt =$db->connect()->prepare("INSERT INTO produit(name,image,description,categorie,prix,quantite) VALUES (:name,:image,:description,:categorie,:prix,:quantite)");
            $stmt->bindParam(':name', $product['name'], PDO::PARAM_STR);
            $stmt->bindParam(':image', $product['image'], PDO::PARAM_STR);
            $stmt->bindParam(':description', $product['description'], PDO::PARAM_STR);
            $stmt->bindParam(':categorie', $product['categorie'], PDO::PARAM_STR);
            $stmt->bindParam(':prix', $product['prix'], PDO::PARAM_STR);
            $stmt->bindParam(':quantite', $product['quantite'], PDO::PARAM_STR);
            $stmt->execute();
            // $stmt->close();
            $stmt = null;
        }
        return 'ok';
    }
    function select($id){
        $db = new Database();
        $conn=$db->connect();
        $stmt=$conn->query("SELECT produit from produit where id=$id");
        $result=$stmt->fetch();
        return $result;
    }
    public function getProduct(){
        $db = new Database();
        $conn=$db->connect();
            $stmt=$conn->query("select * from produit");
        
        $produit=$stmt->fetchAll();
        return $produit;
    }
    public function get($id){
        $db = new Database();
        $conn=$db->connect();
            $stmt=$conn->query("select * from produit where id=$id");
        
        $produit=$stmt->fetch();
        return $produit;
    }
    public function deleteProduct($id){
        $db = new Database();
        $conn=$db->connect();
        $stmt=$conn->query("delete from produit where id= $id;");
    }
  
    public function read($id) {
        $db = new Database();
        $conn=$db->connect();
        $stmt = $conn->prepare("SELECT * FROM produit WHERE id =$id");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    static function update($data) {
        $db = new Database();
        $conn=$db->connect();
        $stmt = $conn->prepare("UPDATE produit SET image=:image,name =:name,description =:description,prix=:prix,quantite=:quantite,categorie=:categorie WHERE id = :id");
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_STR);

        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':image', $data['image'], PDO::PARAM_STR);
        $stmt->bindParam(':description', $data['description'], PDO::PARAM_STR);
        $stmt->bindParam(':prix', $data['prix'], PDO::PARAM_STR);
        $stmt->bindParam(':quantite', $data['quantite'], PDO::PARAM_STR);
        $stmt->bindParam(':categorie', $data['categorie'], PDO::PARAM_STR);
        if ($stmt->execute()) {

            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt = null;
    }


        
    }
?>
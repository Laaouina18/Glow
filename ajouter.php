

<?php

class database
{
    private $root = 'root';
    private $pass = '';
    private $host = "mysql:host=localhost;dbname=glow";

    protected function connect()
    {
        $pdo = new PDO($this->host, $this->root, $this->pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}


class addproduct extends database{
 public function addproduct($value1,$value2,$value3,$value4,$value5){
    for($i=0;$i<count($value1);$i++){
    $db = new database();
    $pdo = $db->connect();
    $requet = "INSERT INTO `produit`(`image`, `name`, `description`, `prix`, `quantite`) VALUES ('$value1[$i]','$value2[$i]','$value3[$i]','$value4[$i]','$value5[$i]')";
    $exe = $pdo->prepare($requet);
    $result = $exe->execute();
}
    return $result;
 }
}
if(isset($_POST['submit'])){
   $value1=$_POST['value1'];
   $value2=$_POST['value2'];
   $value3=$_POST['value3'];
   $value4=$_POST['value4'];
   $value5=$_POST['value5'];
   $addproduct = new addproduct();
   $addproduct->addproduct($value1,$value2,$value3,$value4,$value5);
//    header("Location: http://localhost/GlowGuru/selectproduct.php"); 
}

?>

<?php include_once("navbar.php") ?>

   <div style="width:50%;margin:auto;">
  <div class="mb-3 mt-3">  <label for="email" class="form-label">Photo de produit:</label>
        <td><input type="text" class="form-control"id="inp2" placeholder="imag"></td></div>
      
        <div class="mb-3 mt-3"> <label for="email" class="form-label">Nom de produit:</label>
        <td><input type="text" class="form-control "id="inp1" placeholder="Nom"></td></div>
        <div class="mb-3 mt-3">  <label for="email" class="form-label">Description de produit:</label>
        <td><input type="text" class="form-control"id="inp4" placeholder="description"></td></div>
        <div class="mb-3 mt-3">
        <label for="email" class="form-label">Prix de produit:</label>
        <td><input type="text" class="form-control"id="inp3" placeholder="Prix"></td>
        </div>
      
      <div class="mb-3 mt-3">
      <label for="email" class="form-label">Quantité de produit:</label>
        <td><input type="text" class="form-control"id="inp5" placeholder="Quantite"></td>
      </div>
      
     
        <form method="POST">
            <div id="tbody">

            </div>
           
            <div class="mb-3 mt-3"> <button onclick="myfunction()"  type="submit" name="submit" id="btn"class="btn btn-outline-secondary">Enregistrer</button></div>
          
        </form>
       <button onclick="cc()"class="btn btn-outline-secondary" id="btn"><A>Ajouter Nouveau</A></button></div>
    
    </div>
    </div>
    <script>
        function cc(){
            var add = document.getElementById("tbody");
    var value1 = document.getElementById("inp1");
    var value2 = document.getElementById("inp2");
    var value3 = document.getElementById("inp3");
    var value4 = document.getElementById("inp4");
    var value5 = document.getElementById("inp5");
    var value6 = document.getElementById("inp6");
    //add value to inpute
    add.innerHTML +=` <div class="mb-3 mt-3">  <label for="email" class="form-label">Photo de produit:</label>
        <input type="text" class="form-control"id="inp1" placeholder="imag"name="value1[]" value="${value1.value}"/>`;
    add.innerHTML += `<div class="mb-3 mt-3">  <label for="email" class="form-label">Photo de produit:</label>
        <input type="text" class="form-control"id="inp2"name="value2[]" value="${value2.value}"/>`;
    add.innerHTML += `<div class="mb-3 mt-3">  <label for="email" class="form-label">Photo de produit:</label>
        <input type="text" class="form-control"id="inp3"name="value3[]" value="${value3.value}"/>`;
    add.innerHTML += `<div class="mb-3 mt-3">  <label for="email" class="form-label">Photo de produit:</label>
        <input type="text" class="form-control"id="inp4"name="value4[]" value="${value4.value}"/>`;
    add.innerHTML += `<div class="mb-3 mt-3">  <label for="email" class="form-label">Photo de produit:</label>
        <input type="text" class="form-control"id="inp5" name="value5[]" value="${value5.value}"/>`;
        }
function myfunction(){
   
  

    value1.value = "";
    value2.value = "";
    value3.value = "";
    value4.value = "";
    value5.value = "";
    value6.value = "";
}
</script>

<?php include_once("footer.php") ?>

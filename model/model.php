<?php 
// le modele qui permet l'appication d'interagir avec la base de données 

function authentificate($u,$p){
  //fonction qui permet de verifier l'authentification d'un utilisateur
       $authentic= false;
         //check the db
 
     $bdd = getBdd();
    $sql="SELECT email,password FROM user";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetchAll();
    foreach ($user as $key => $value){


       if($value['email'] == $u && $value['password'] == $p) $authentic = true; 
           }
       return $authentic;

  }

function getShop() {

//selectionner les diffferentes shops pour les afficher
    $bdd = getBdd();
     $sql="SELECT * FROM  shop";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $shops= $stmt->fetchAll();
    return  $shops;
}
function getShopD() {

//selectionner les diffferentes shops en fonction de la distance par ordre ascendant pour les afficher
    $bdd = getBdd();
     $sql="SELECT distance FROM  shop ORDER BY distance ASC";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $distance= $stmt->fetchAll();
    return  $distance;
}

function addUser($name,$email,$password){
    //enregitrement d'un nouveau utilisateur
 $conn=getBdd();
    
 $stmt1= $conn->prepare("INSERT INTO user(name,email,password) VALUES (?,?,?)");
 $stmt1->bindParam(1, $name);
 $stmt1->bindParam(2, $email);
 $stmt1->bindParam(3, $password);
 $stmt1->execute();
}

function likeshop($id) {
    //changer la valeur du jaime pour ajouter le shop à la liste des magasins preferes 
$bdd=getBdd();
   $sql="UPDATE shop SET jaime='1' where id_shop=$id";
   $stmt=$bdd->prepare($sql);
   $stmt->execute();
}
function deslikeshop($id) {
    //changer la valeur du deslike et ajouter 2 heures au temps actuel et aprés va etre afficher
   $temps_Actuel= time() + '3600'; 
   $bdd=getBdd();
   $sql="UPDATE shop SET deslike= '$temps_Actuel' where id_shop=$id";
   $stmt=$bdd->prepare($sql);
   $stmt->execute();
       
}

function removeshop($id) {
    ////changer la valeur du jaime pour supprimer le shop de la liste des magasins preferes 
$bdd=getBdd();
   $sql="UPDATE shop SET jaime='0' where id_shop=$id";
   $stmt=$bdd->prepare($sql);
   $stmt->execute();
}


function getBdd() {
    // Effectue la connexion à la BDD
    // Instancie et renvoie l'objet PDO associé
    $bdd = new PDO('mysql:host=localhost;dbname=project;charset=utf8', 'root',
            '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

?>
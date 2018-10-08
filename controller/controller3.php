<?php
 require '../model/model.php';
 //le controlleur qui permet d'ajouter un shop à la liste des magasin perefere et de la supprimer
   if(isset($_GET['t'],$_GET['id'])){
   	$id= (int) $_GET['id'];
   	$t=(int) $_GET['t'];
   	if($t=='1'){
   	likeshop($id);
   	echo "<script >alert(\"magasin aimée!\")</script>";
    }
    elseif ($t=='0'){
      deslikeshop($id);
      echo "<script >alert(\"magasin n'est pas aimée!\")</script>";
    }
    elseif ($t=='3') {
    removeshop($id);
    echo "<script >alert(\"magasin supprimé!\")</script>";
    }

   }

?>
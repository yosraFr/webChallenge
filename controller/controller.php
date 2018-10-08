<?php
   // le controlleur qui permet d'afficher la page principale et d'enregister un nouveau utilisateur
   require 'model/model.php';
   function affichage(){ 
   
   require 'views/login.php';

   if(isset($_POST['register'])){
   // enregistrement d'un noveau utilisateur 
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
    addUser($name,$email,$password);

    echo "<script >alert(\"l'enregitrement a été bien effectuée\")</script>";
   

}
   
   }
  

?>
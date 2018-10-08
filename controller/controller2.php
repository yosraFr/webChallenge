<?php
  require '../model/model.php';
        //controlleur qui permet d'authentifier l'utilisateur
   	 $email=$_POST['email'];
   	 $paswd=$_POST['password'];
   	if (authentificate($email,$paswd)) {
   		header('Location: ../views/mainPage.php');
   		
   	}
   	else { 
   		echo "<script >alert(\"email ou mot de passe incoreccte\")</script>";
   		header('Location: ../index.php');
   	
   		
       
   	}
   	?>
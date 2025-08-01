<?php
session_start();

if(!isset($_SESSION['contacts']))
{
  $_SESSION['contacts'] = [];
}

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  

    $nom = $_POST['nom'] ?? '';
    $age = $_POST['age'] ?? '';

    

    $errors = [];
    if(empty($nom)){
      $errors[] = "vous n'avez pas renseigné le nom";
    }
    if(empty($age)){
      $errors[] = "vous n'avez pas renseigné l'age";
    }
    if($age < 18){
      $errors[] = "vous êtes mineur";
    }
    
   
   
  // Nettoyage des données

  if(empty($errors)){

    $nom = htmlspecialchars(trim($nom));
    $age = htmlspecialchars(trim($age));

    $newContact = [
      "name" => $nom,
      "age" => $age
    ];

    $_SESSION['contacts'][] = $newContact;

    // Redirige vers une autre page
    header('Location: confirmation.php');
    exit();

  }

  else{

    foreach($errors as $error ) {
    echo $error;
   }
      
  }

    
}
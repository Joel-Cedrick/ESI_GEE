<?php

session_start();

//test des variables



$etat="bon";

if (isset($_POST['email']) && isset($_POST['contact']) &&
 isset($_POST['mdp']) && isset($_POST['tcdd'])&& isset($_POST['tmdd'])) {
  
  if (isset($_POST['entreprise']) ){
  $email=$_POST['email'];
  $contact=htmlspecialchars($_POST['contact']);
  $contact2=htmlspecialchars($_POST['contact2']);
  $address=htmlspecialchars($_POST['address']);
  $pays=htmlspecialchars($_POST['pays']);
  $ville=htmlspecialchars($_POST['ville']);
  $mdp=md5(htmlspecialchars($_POST['mdp']));
  $tcdd=htmlspecialchars($_POST['tcdd']);
  $tmdd=htmlspecialchars($_POST['tmdd']);
  $fonction=htmlspecialchars($_POST['fonction']);
  $entreprise=htmlspecialchars($_POST['entreprise']);
  
  $matricule = $_SESSION['matricule'];
 // echo $email;
 // echo $salaire1;
 // echo $matricule;
  // connexion à la base de données
  $db_username = 'root';                                 // les infos liees a notre base de donnees
  $db_password = '';
  $db_name     = 'esi';
  $db_host     = 'localhost';
  $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');
  
  $sql="UPDATE enregis SET email='$email',contact='$contact',contact2='$contact2',address='$address',password='$mdp',pays='$pays',ville='$ville', tempspremier='$tcdd',tempscdi='$tmdd', nomentreprise='$entreprise'
   WHERE  matricule='$matricule' ";
   $etat="bon"; 
  if(!mysqli_query($db,$sql)){
    $etat="mauvais";
    ;}

  

  if ($_POST['domaine']!=""){

    $domaine=$_POST['domaine'];
    $sql="UPDATE enregis SET domaine='$domaine'WHERE  matricule='$matricule' ";
    if(!mysqli_query($db,$sql)){

      $etat="mauvais";}
  }
  if ($_POST['fonction']!=""){
    
    
    $fonction=$_POST['fonction'];
    $sql="UPDATE enregis SET fonction='$fonction' WHERE  matricule='$matricule' ";
    if(!mysqli_query($db,$sql)){

      $etat="mauvais";}
  }
  if ($_POST['salaire6']!=""){
    
    $salaire6=$_POST['salaire6'];
    $sql="UPDATE enregis SET salaire6='$salaire6' WHERE  matricule='$matricule' ";
    if(!mysqli_query($db,$sql)){

      $etat="mauvais";}
  }
  }
  if ($_POST['salaire1']!=""){
    
    $salaire1=$_POST['salaire1'];
    $sql="UPDATE enregis SET salaire1='$salaire1' WHERE  matricule='$matricule' ";
    if(!mysqli_query($db,$sql)){

      $etat="mauvais";}
  }
  if ($_POST['salaire3']!=""){
    
    $salaire3=$_POST['salaire3'];
    
    $sql="UPDATE enregis SET salaire3='$salaire3' WHERE  matricule='$matricule' ";
    if(!mysqli_query($db,$sql)){

      $etat="mauvais";}
  }
  
  }

  mysqli_free_result($sql);
  if ($etat=="bon"){
    $_SESSION['info'] = "Vous  etes Bien inscrit";
    header('Location: ../erreur/success.php');
  
  }
  else{
    $_SESSION['info'] = "Votre demande n'a pas ete prise en compte merci de bien vouloir réessayer";
    header('Location: ../erreur/erreur.php');
  }

 










?>

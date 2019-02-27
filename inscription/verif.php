<?php

session_start();

//test des variables
/*
if (!empty($_POST['contact'])){
    $contact=$_POST['contact'];
    echo" bonjour,$contact";
}
else {
    echo"bad";
     && (isset($_POST['entreprise']))&& (isset($_POST['domaine']))
     && (isset($_POST['email']))&&(isset($_POST['contact'])) &&(isset($_POST['mdp'])) && (isset($_POST['tcdd']))&& (isset($_POST['tmdd'])
}*/

if (isset($_POST['email']) && isset($_POST['contact']) &&
 isset($_POST['mdp']) && isset($_POST['tcdd'])&& isset($_POST['tmdd'])) {
  if (isset($_POST['entreprise']) && isset($_POST['domaine'])) {
  $email=$_POST['email'];
  $contact=htmlspecialchars($_POST['contact']);
  $contact2=htmlspecialchars($_POST['contact2']);
  if(!isset($contact2)) $contact2 = 0;
  $address=htmlspecialchars($_POST['address']);
  $pays=htmlspecialchars($_POST['pays']);
  $ville=htmlspecialchars($_POST['ville']);
  $mdp=md5(htmlspecialchars($_POST['mdp']));
  $tcdd=htmlspecialchars($_POST['tcdd']);
  $tmdd=htmlspecialchars($_POST['tmdd']);
  $fonction=htmlspecialchars($_POST['fonction']);
  $entreprise=htmlspecialchars($_POST['entreprise']);
  $domaine=htmlspecialchars($_POST['domaine']);
  $salaire6=htmlspecialchars($_POST['salaire6']);
  $salaire1=htmlspecialchars($_POST['salaire1']);
  $salaire3=htmlspecialchars($_POST['salaire3']);
  $matricule = $_SESSION['matricule'];
  /*
  echo $matricule ;
  echo "fa1";
  echo $email;
  echo "fa2";
  echo $contact ;
  echo "fa3";
  echo $contact2;
  echo "fa4";
  echo $addresse;
  echo "fa5";
  echo $mdp;
  echo "fa6";
  echo $pays;
  echo "fa7";
  echo $ville;
  echo "fa8";
  echo $tcdd;
  echo "fa9";
  echo $tmdd;
  echo "fa10";
  echo $entreprise;
  echo "fa11";
  echo $domaine;
  echo "fa12";
  echo $fonction;
  echo "fa13";
  echo $salaire6;
  echo "fa14"; 
  echo $salaire1;
  echo "fa15";
  echo $salaire3;*/
  // connexion à la base de données
  $db_username = 'root';                                 // les infos liees a notre base de donnees
  $db_password = '';
  $db_name     = 'esi';
  $db_host     = 'localhost';
  $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');
 
  $_SESSION['info'] = "Votre demande n'a pas ete prise en compte merci de bien vouloir réessayer";

  $stmt = $db->prepare("INSERT INTO enregis
              (matricule,email,contact,contact2,address,password,pays,ville, tempspremier,tempscdi, 
              nomentreprise,domaine, fonction,salaire6,salaire1,salaire3) 
              values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
  $stmt->bind_param("ssiisssssssssiii", $matricule, $email, $contact,$contact2,$address,$mdp,
                    $pays,$ville,$tcdd,$tmdd,$entreprise,$domaine,$fonction,$salaire6,$salaire1,$salaire3);

  //$requete="INSERT INTO enregis (matricule,email,contact,contact2,address,password,pays,ville, tempspremier,tempscdi, nomentreprise,domaine, fonction,salaire6,salaire1,salaire3)
            //values('".$matricule."','".$email."','".$contact."','".$contact2."','".$address."','".$mdp."','".$pays."','".$ville."','".$tcdd."','".$tmdd."','".$entreprise."','".$domaine."','".$fonction."','".$salaire6."','".$salaire1."','".$salaire3."')";
  
  //mysqli_query($db,$requete) or die ('error');

  //$requete='INSERT INTO enregis (matricule,email) values(".$matricule.",".$email.")';
  if(!$stmt->execute()) {
      printf("message d erreur %s \n \n",mysqli_error($db));
      $_SESSION['info'] = "Votre demande n'a pas ete prise en compte merci de bien vouloir réessayer";
    header('Location: ../erreur/erreur.php');

     // echo $requete;
    }
else{
    $_SESSION['matricule'] = $matricule;
    $_SESSION['info'] = "Vous  etes Bien inscrit";
    header('Location: ../erreur/success.php');
}
  /*
  $requete=mysqli_prepare($db,'INSERT INTO enregis (matricule,email,contact,contact2,address,password,pays,ville, tempspremier,
    tempscdi, nomentreprise,domaine, fonction,salaire6,salaire1,salaire3) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ' );
  mysqli_stmt_bind_param($requete,"ssssssssssssssss",$matricule,$email,$contact,$contact2,$address,$mdp,$pays,$ville,$tcdd,$tmdd,$entreprise,$domaine,$fonction,$salaire6,$salaire1,$salaire3) ;
  mysqli_stmt_execute($requete) or die(header('Location: ../erreur/erreur.php'));
  $_SESSION['matricule'] = $matricule;
  $_SESSION['info'] = "Vous  etes Bien inscrit";
  header('Location: ../erreur/success.php');

  }

   else{

    $_SESSION['info'] = "Votre demande n'a pas ete prise en compte merci de bien vouloir réessayer";
    header('Location: ../erreur/erreur.php');
   }*/

   }
   else{

    $_SESSION['info'] = "Votre demande n'a pas ete prise en compte merci de bien vouloir réessayer";
    header('Location: ../erreur/erreur.php');
   }
}






?>

<!--

$contact=htmlspecialchars($_POST['contact']);
$mail=htmlspecialchars($_POST['email']);
$contact2=htmlspecialchars($_POST['contact2']);
$address=htmlspecialchars($_POST['address']);
$pays=htmlspecialchars($_POST['pays']);
$ville=htmlspecialchars($_POST['ville']);
$tcdd=htmlspecialchars($_POST['tcdd']);





// connexion à la base de données
$db_username = 'root';                                 // les infos liees a notre base de donnees
$db_password = '';
$db_name     = 'esi';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
     or die('could not connect to database');

$requete=mysqli_prepare($db,'INSERT INTO connexion (matricule, mdp) VALUES (?,?) ' );
mysqli_stmt_bind_param($requete,"ss",$mail,$contact);
mysqli_stmt_execute($requete)

*/



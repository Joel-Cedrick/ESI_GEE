<?php
session_start();


/*
print( "bonjour mr  $username ton mdp est $password")
*/

if(isset($_POST['matricule']) )
{
    // connexion à la base de données
    $db_username = 'root';                                 // les infos liees a notre base de donnees
    $db_password = '';
    $db_name     = 'esi';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $matricule = mysqli_real_escape_string($db,htmlspecialchars($_POST['matricule']));
    
    if($matricule !== "" )
    {
        $requete = "SELECT count(*) FROM idesi where matricule = '".$matricule."'  ";
              // les infos liees a la table
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        // On verifie egalement sa presence dans la base de donnnees enregis histoire de verifier que celui
        // qu'on veut enregistrer n'a pas été enregistré au préalabable

        $requet = "SELECT count(*) FROM enregis where matricule = '".$matricule."'  ";
        $exec_requet = mysqli_query($db,$requet);
        $repons      = mysqli_fetch_array($exec_requet);
        $counte = $repons['count(*)'];
        echo $requete;

        if(($count!=0)&($counte==0))// nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['matricule'] = $matricule;
           header('Location: principale.php');
        }
        else
        {
           if ($counte){
            $_SESSION['info']="Le numero de matricule entré est deja inscrit ";
            header('Location: ../erreur/erreur.php'); // utilisateur ou mot de passe incorrect
           }
           if (!$count){
           $_SESSION['info']="Le numero de matricule  que vous avez entré est incorrect";
           header('Location: ../erreur/erreur.php'); // utilisateur ou mot de passe incorrect
        }
        }
    }
    else
    {  $_SESSION['info']="Le numero de matricule  que vous avez entré est vide";
       header('Location: ../erreur/erreur.php'); // utilisateur ou mot de passe vide
    }
}
else
{
  echo" champs vide";
  // header('Location: connexion.php?erreur=3');
}
mysqli_close($db); // fermer la connexion*/

?>

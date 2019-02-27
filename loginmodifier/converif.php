<?php
session_start();
$matricule=$_POST['matricule'];
$password=$_POST['passe'];

/*
print( "bonjour mr  $username ton mdp est $password")
*/

if(isset($_POST['matricule']) && isset($_POST['passe']))
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
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['passe']));

    if($matricule !== "" && $password !== "")
    {
        $password=md5($password);
        $requete = "SELECT count(*) FROM enregis inner join idesi on idesi.matricule=enregis.matricule where
              enregis.matricule = '$matricule'
              and  enregis.password= '$password' "; // les infos liees a la table
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['matricule'] = $matricule;
           $_SESSION['info'] = "Vous pouvez modifier vos informations";

           header('Location:../modification/index.php');
        }
        else
        {   $_SESSION['info']="Le numero de matricule ou le mot de passe que vous avez entré est incorrect";
            header('Location: ../erreur/erreur.php');
           // utilisateur ou mot de passe incorrect
        }
    }
    else
    {   $_SESSION['info']="Le numero de matricule ou le mot de passe que vous avez entré est incorrect";
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

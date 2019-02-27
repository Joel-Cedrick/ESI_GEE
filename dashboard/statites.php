<?php



session_start();




    // connexion à la base de données
    $db_username = 'root';                                 // les infos liees a notre base de donnees
    $db_password = '';
    $db_name     = 'esi';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

/*
    */

    //taux  de reponse $filiere
    $filiere='TLC';
    $exec_requete = mysqli_query($db,"SELECT count(*) FROM `enregis`inner join idesi on enregis.matricule=idesi.matricule where idesi.filiere='$filiere'");
    $totali      = mysqli_fetch_array($exec_requete);
    $totali=$totali[0];

    //2015
    $requete = "SELECT count(*) FROM `enregis`inner join idesi on enregis.matricule= idesi.matricule where filiere='$filiere' and promo=2015";
    $exec_requete = mysqli_query($db,$requete);
    $nbre      = mysqli_fetch_array($exec_requete);
    $nbre      =$nbre[0];
    $exec_requete = mysqli_query($db,"SELECT count(*) FROM `idesi` where filiere='$filiere' and promo=2015");
    $tot      = mysqli_fetch_array($exec_requete);
    $tot=$tot[0];
    $quinz=(int)(($nbre/$tot)*100);
    
    //2016
    $requete = "SELECT count(*) FROM `enregis`inner join idesi on enregis.matricule= idesi.matricule where filiere='$filiere' and promo=2016";
    $exec_requete = mysqli_query($db,$requete);
    $nbre      = mysqli_fetch_array($exec_requete);
    $nbre      =$nbre[0];
    $exec_requete = mysqli_query($db,"SELECT count(*) FROM `idesi` where filiere='$filiere' and promo=2016");
    $tot      = mysqli_fetch_array($exec_requete);
    $tot=$tot[0];
    $seiz=(int)(($nbre/$tot)*100);
    
    //2017

    $requete = "SELECT count(*) FROM `enregis`inner join idesi on enregis.matricule= idesi.matricule where filiere='$filiere' and promo=2017";
    $exec_requete = mysqli_query($db,$requete);
    $nbre      = mysqli_fetch_array($exec_requete);
    $nbre      =$nbre[0];
    $exec_requete = mysqli_query($db,"SELECT count(*) FROM `idesi` where filiere='$filiere' and promo=2017");
    $tot      = mysqli_fetch_array($exec_requete);
    $tot=$tot[0];
    $sept=(int)(($nbre/$tot)*100);
    
    $donnees=array($quinz,$seiz,$sept);
    

    

    //repartion 
    /*
    "Equipementiers telecom et informatique",                                                                                                                                                                        
    "Operateurs de service telecom et informatique",
    "Autorites de normalisation",
    "Fournisseurs de services",
    "Reseaux telecom et informatique",
    "Enseignement, recherche, développement",
    "Multimedia",
    "Integrateurs et solutions",
    "Societés de service (banques, assurances)",
    "Sante",
    "industrie"
    "autre",*/
    $labels=array("Equipementiers telecom et informatique",                                                                                                                                                                        
    "Operateurs de service telecom et informatique",
    "Autorites de normalisation",
    "BI, Big Data",
    "Developpement d’Application",
    "Enseignement, recherche",
    "Multimedia",
    "Integrateurs de solutions",
    "Societés de service (banques, assurances)",
    "Sante",
    "industrie",
    "autre");

     $nb   =mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and domaine ='Equipementiers telecom et informatique'"));
     $nbre1=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and domaine ='Operateurs de service telecom et informatique'"));
     $nbre2=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere' and domaine ='Autorites de normalisation'"));     
     $nbre3=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and domaine ='Fournisseurs de services'"));
     $nbre4=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and domaine ='Reseaux telecom et informatique'"));
     $nbre5=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and domaine ='Enseignement, recherche, développement'"));
     $nbre6=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and domaine ='Multimedia'"));
     $nbre7=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere' and domaine ='Integrateurs et solutions'"));
     $nbre8=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and domaine ='Societés de service (banques, assurances)'"));
     $nbre9=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and domaine ='Sante'"));
    $nbre10=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and domaine ='industrie'"));
    $nbre11=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere' and domaine ='autre'"));
   
   $donneesrepart=array($nb,$nbre1,$nbre2,$nbre3,$nbre4,$nbre5,$nbre6,$nbre7,$nbre8,$nbre9,$nbre10,$nbre11); // ajouter le reste


   // Temps Mis Avant Premier Stage


   //temps inferieur ou egale 1 mois

$mois1   =mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and tempspremier<=1"));

    //temps inferieur ou egale 3 mois puis sup a 3 mois

$mois2   =mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and tempspremier<=3 and tempspremier > 1 "));
$mois3   =mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and tempspremier > 3 "));
$mois   =array($mois1,$mois2,$mois3);

    //Temps Mis Avant CDI

    
   //temps inferieur ou egale 1 mois temps inferieur ou egale 3 mois puis sup a 3 mois

$moisi1   =mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and tempscdi<=6"));
$moisi2   =mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and tempscdi<=12 and tempscdi > 6 "));
$moisi3   =mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and tempscdi<=24 and tempscdi > 12 "));
$moisi4   =mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and tempscdi<=36 and tempscdi > 24 "));
$moisi5   =mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and tempscdi > 36 "));
$moisi    =array($moisi1,$moisi2,$moisi3,$moisi4,$moisi5);


// remuneration

//apres 6 MOIS

$salaire61=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and salaire6<=200000"));

$salaire62=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and salaire6<=500000 and salaire6>200000"));

$salaire63=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and salaire6<=1000000 and salaire6>500000"));
$salaire64=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and salaire6>1000000"));
$salaire6    =array($salaire61,$salaire62,$salaire63,$salaire64);

// apres 1an

$salaire11=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and salaire1<=300000"));

$salaire12=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and salaire1<=800000 and salaire1>300000"));

$salaire13=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and salaire1>800000"));
$salaire1    =array($salaire11,$salaire12,$salaire13);


// apres 3ans 
$salaire31=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and salaire3<=500000"));

$salaire32=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and salaire3<=1200000 and salaire3>500000"));

$salaire33=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `idesi`inner join enregis on idesi.matricule=enregis.matricule where filiere='$filiere'  and salaire3>1200000"));
$salaire3    =array($salaire31,$salaire32,$salaire33);




        ?>
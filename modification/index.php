

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="auteur" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Modification</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="form-validation.css" rel="stylesheet">
  </head>


 <?php



session_start();




    // connexion à la base de données
    $db_username = 'root';                                 // les infos liees a notre base de donnees
    $db_password = '';
    $db_name     = 'esi';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

    $matricule = $_SESSION['matricule'];

    // afin d eviter l acces a la page via l'adresse uniquement 
    $matricule = $_SESSION['matricule'];
    if (!$matricule){
      $_SESSION['info']="Vous n'avez pas acces a cette page ! ";
      header('Location: ../erreur/erreur.php');
    }
    //requete

    $requete = "SELECT * FROM idesi inner join enregis on idesi.matricule=enregis.matricule where idesi.matricule = '".$matricule."'  ";
    $exec_requete = mysqli_query($db,$requete);
    $reponse      = mysqli_fetch_array($exec_requete);

    
    //echo $reponse['nom'] ;



           ?>

  <body class="bg-light">
  
  
  
  <div  class="tete">
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-transparent p-1">
      <h5 class="text-dark h4">Ecole Superieure d'Industrie</h5>
      <span class="text-muted-">Ingenieur STIC.</span>
    </div>
  </div>
  
  
  
    <div class="tete d-flex  flex-column flex-md-row align-items-center p-3 px-md-4 mb-4 border-bottom box-shadow">
        
    <nav class="navbar navbar-dark bg-transparent">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
      <h5  class="my-0 mr-md-auto font-weight-normal text-light ">Ecole Superieure d'Industrie</h5>
      <nav class="my-2 my-md-0 mr-md-3">
          
        <a class="p-2 text-light active" href="../acceuil/">Acceuil <span class="sr-only">(current)</span></a> </a>
        <a class="p-2 text-light" href="../loginscription/login/">Inscription</a>
        <a class="p-2 text-light" href="../loginmodifier/index.html">Connexion</a>
        <a class="p-2 text-light" href="../dashboard/">Statistique</a>
      </nav>
      
      <a class="btn btn-danger text-light" href='../loginscription/principale.php?deconnexion=true'><span>Deconnexion</span></a>
    </div>
</div>
    
    <div class="container " style= "margin-top: 1px ;">

      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="" alt="" width="72" height="72">
        <h2><div class="alert alert-success" role="alert">
          <?php 
        if ($_SESSION['info']) echo $_SESSION['info']; 
        ?></div></h2>
        <h2>Formulaire de Modification</h2>
        <p class="lead">
        
           </br> Cette fonctionnalité  permettra à l'utilisateur de modifier dans la Base de données ses informations préalablement remplis.
            L'utilisateur modifie que les informations ayant evoluées. les Champs  portant l'asterix sont obligatoires : </p>
            </div>


      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Votre identité</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nom</h6>
                <small class="text-danger"><?php echo $reponse['nom']; ?></small>
              </div>
              <span class="text-muted"><?php echo $reponse['birth']; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Promotion</h6>
                <small class="text-muted"><?php echo $reponse['promo']; ?></small>
              </div>
              <span class="text-muted"><?php echo $_SESSION['matricule']; ?>  </span>
            </li>

            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Specialite</h6>
                <small>
                  <?php  
                  if (($reponse['filiere'])=="E2IT") echo "E2I";
                    
                else echo $reponse['filiere'] ; ?></small>
              </div>
              <span class="text-success">ESI</span>
            </li>

          </ul>

          <!--form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="wanpan">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Modifier</button>
              </div>
            </div>
          </form-->
        </div>

        <div class="col-md-8 order-md-1">

        <form method="post" action="verif.php" class="needs-validation" novalidate   >

          <h4 class=" mb-4">Informations Personnelles</h4>

<!--
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nom</label>
                <input type="text" class="form-control" name="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Un nom valide est necessaire
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Prenom</label>
                <input type="text" class="form-control" name="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Un prenom valide est necessaire.
                </div>
              </div>
            </div>
-->

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>

              <input type="email" class="form-control" name="email" value= "<?php echo $reponse['email']; ?>" aria-describedby="emailHelp" placeholder="you@example.com" required>
              <small id="emailHelp" class="form-text text-muted">L'ecole utilisera votre mail en cas de quete d'information.</small>
              <div class="invalid-feedback">
                Entrer SVP un mail correct.
              </div>
            </div>

            <div class="mb-3">
              <label for="contact">contact</label>
              <input type="text" class="form-control" name="contact" value= "<?php echo $reponse['contact']; ?>" placeholder="+225 49-857-825" required>
              <div class="invalid-feedback">
                Entrer SVP un numero correct.
              </div>
            </div>

            <div class="mb-3">
              <label for="contact2">contact 2<span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" name="contact2" value= "<?php echo $reponse['contact2']; ?>" placeholder="+221 01-857-825" >

            </div>

            <div class="mb-3">
              <label for="address2">Address  <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" name="address" value= "<?php echo $reponse['address']; ?>" placeholder="Abidjan Cocody rue 18">
            </div>

            <div class="mb-3">
              <label for="inputPassword5">Password * </label>
              <input type="password" name="mdp" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
              <small id="passwordHelpBlock" class="form-text text-muted">
              Il est souhaitable que votre mot de passe soit en entre 8 et 20 caractere contiennent des chiffres et des lettres 
              </small>
              <div class="invalid-feedback">Entrer SVP un mot de passe correct.</div>


            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="country">Pays</label>
                <input type="text" class="form-control" name="pays" value= "<?php echo $reponse['pays']; ?>" placeholder="Cote d'ivoire">

                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="state">Ville</label>
              <input type="text" class="form-control" value= "<?php echo $reponse['ville']; ?>" name="ville" placeholder="Yamoussoukro">

                <div class="invalid-feedback">
                  Entrer SVP une ville correcte.
                </div>
              </div>

           </div>


            <hr class="mb-4">
            <h4 class="mb-4">Information Post Etude</h4>
          <div class=" row">
            <div class=" col-md-6 mb-3">
              <label for="tcdd">Temps Mis avant CDD (en mois) </label>
              <input type="number" class="form-control" name="tcdd" placeholder=" 1" value= "<?php echo $reponse['tempspremier']; ?>" required>
             
              <div class="invalid-feedback">
                entrer svp une duree valide
              </div>
            </div>

            <div class=" col-md-6 mb-3">
              <label for="tcdd">Temps Mis avant premier CDI (en mois) </label>
              <input type="number" class="form-control" name="tmdd" placeholder=" 6 " value= "<?php echo $reponse['tempscdi']; ?>" required>
              
              <div class="invalid-feedback">
                entrer svp une duree valide
              </div>
            </div>
          </div>
            <hr class="mb-4">
            <h4 class="mb-4">Informations Professionnelles</h4>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Entreprise">Nom<span class="text-muted">(Entreprise)</span></label>
                <input type="text" class="form-control" name="entreprise" placeholder=" wanpan enterprise" value= "<?php echo $reponse['nomentreprise']; ?>" required>
                <div class="invalid-feedback">
                  Un nom valide est necessaire
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="domaine">Domaine<span class="text-muted">(Entreprise)<?php echo $reponse['domaine']; ?> </span></label>
                <!--input type="text" class="form-control" name="typeentreprise" placeholder=" agronomie" value="" required-->
                <select class="custom-select d-block w-100" name="domaine" value= "<?php echo $reponse['domaine']; ?>" >
                  <option value="">Choose...</option>
                  <option value="Equipementiers telecom et informatique" <?php if ($reponse['domaine']=="Equipementiers telecom et informatique") echo 'selected'; ?> >Équipementiers télécom et informatique</option>
                  <option value="Operateurs de service telecom et informatique <?php if ($reponse['domaine']=="Operateurs de service telecom et informatique") echo "selected"; ?>">Opérateurs de service télécom et informatique</option>
                  <option value="Autorites de normalisation"<?php if ($reponse['domaine']=="Autorités de normalisation") echo "selected"; ?>>Autorités de normalisation</option>
                  <option value="BI, Big Data"<?php if ($reponse['domaine']=="BI, Big Data") echo "selected"; ?>>BI Big data</option>
                  <option value="Developpement d’application"<?php if ($reponse['domaine']=="Developpement d’application") echo "selected"; ?>>Développement d’application,Conception de systèmes</option>
                  <option value="Enseignement, recherche"<?php if ($reponse['domaine']=="Enseignement, recherche") echo "selected"; ?>>Enseignement, Recherche </option>
                  <option value="Multimedia" <?php if ($reponse['domaine']=="Multimedia") echo "selected"; ?>>Multimédia </option>
                  <option value="Integrateurs et solutions" <?php if ($reponse['domaine']=="Integrateurs et solutions") echo "selected"; ?>>Intégrateurs et solutions</option>
                  <option value="Societés de service (banques, assurances)" <?php if ($reponse['domaine']=="Societés de service (banques, assurances)") echo "selected"; ?>>Sociétés de service (banques, assurances)</option>
                  <option value="Sante" <?php if ($reponse['domaine']=="Sante") echo "selected"; ?>>Santé</option>
                  <option value="industrie" <?php if ($reponse['domaine']=="industrie") echo 'selected'; ?>>industrie </option>
                  <option value="autre" <?php if ($reponse['domaine']=="autre") echo 'selected'; ?>>autres </option>
                </select>
                <div class="invalid-feedback">
                  Une entree  valide est necessaire.
                </div>
              </div>
            </div>


            <div class="mb-6">
              <label for="Contact">Fonction<span class="text-muted">(Poste) <?php echo $reponse['fonction']; ?></span></label>
              <!--input type="text" class="form-control" name="poste" placeholder="Ingenieur chef de projet" required-->
              <select class="custom-select d-block w-100" name="fonction" >
                <option value="">Choose...</option>
                <option value="Equipementiers telecom et informatique" <?php if ($reponse['fonction']=="Equipementiers telecom et informatique") echo 'selected'; ?> >Conception de systèmes, de logiciels</option>
                <option value="Operateurs de service telecom et informatique" <?php if ($reponse['fonction']=="Operateurs de service telecom et informatique") echo 'selected'; ?> >Administration de réseaux ou de bases de données</option>
                <option value="Planification" <?php if ($reponse['fonction']=="Planification") echo 'selected'; ?>>Planification</option>
                <option value="Developpement d’application" <?php if ($reponse['fonction']=="Développement d’application") echo 'selected'; ?>>Développement d’application</option>
                <option value="Consultant, audit" <?php if ($reponse['fonction']=="Consultant, audit") echo 'selected'; ?>>Consultant, audit</option>
                <option value="Technico-commercial"<?php if ($reponse['fonction']=="Technico-commercial") echo 'selected'; ?>>Technico-commercial </option>
                <option value="Maintenance"<?php if ($reponse['fonction']=="Maintenance") echo 'selected'; ?>>Maintenance </option>
                <option value="Recherche"<?php if ($reponse['fonction']=="Recherche") echo 'selected'; ?>>Recherche</option>
                <option value="Maintenancier"<?php if ($reponse['fonction']=="Maintenancier") echo 'selected'; ?>>Maintenancier</option>
                <option value="Fournisseurs de services"<?php if ($reponse['fonction']=="Fournisseurs de services") echo 'selected'; ?>>Fournisseurs de services</option>
                <option value="Chef de projet"<?php if ($reponse['fonction']=="Chef de projet") echo 'selected'; ?>>Chef de projet</option>
                <option value="autre" <?php if ($reponse['fonction']=="autre") echo 'selected'; ?>>autres </option>
                
              </select>
              <div class="invalid-feedback">
                Entrer SVP un numero correct.
              </div>
            </div>

            <hr class="mb-4" >
            

            

            

            <h4 class="mb-4">Remuneration</h4>
            <p class="lead mb-4"><h10>Dans cette partie il est demandé de facon annonyme....</h10></p>
            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="salaire">Salaire Apres 6 Mois<span class="text-muted"></span></label>
              
              <select class="custom-select d-block w-100" name="salaire6" >
              <option value="">Choose...</option>
                <option value="200000" <?php if ($reponse['salaire6'] <= 200000) echo 'selected'; ?>>moins de 200000</option>
                <option value="500000"<?php if (($reponse['salaire6'] > 200000) &&(($reponse['salaire6'] <= 500000))) echo 'selected'; ?>>entre 200000 et 500000</option>
                <option value="750000"<?php if (($reponse['salaire6'] > 500000) &&(($reponse['salaire6'] <= 1000000))) echo 'selected'; ?>> entre 500000 et 1 million</option>
                <option value="1000001"<?php if ($reponse['salaire6'] > 1000000) echo 'selected'; ?>> +1 million</option>
                
              </select>
              </div>
              <div class="col-md-4 mb-3">
              <label for="salaire">Salaire Apres 1 an<span class="text-muted"></span></label>
              
              <select class="custom-select d-block w-100" name="salaire1" >
                <option value="">Choose...</option>
                <option value="300000" <?php if ($reponse['salaire1'] <= 300000) echo 'selected'; ?>>moins de 300000</option>
                <option value="500000"<?php if (($reponse['salaire1'] > 300000) &&(($reponse['salaire6'] <= 700000))) echo 'selected'; ?>>entre 300000 et 700000</option>
                <option value="750000"<?php if (($reponse['salaire1'] > 700000) &&(($reponse['salaire6'] <= 1500000))) echo 'selected'; ?>> entre 700000 et 1.5 million</option>
                <option value="1500001"<?php if (($reponse['salaire1'] > 1500000) ) echo 'selected'; ?>> +1.5 million</option>
                
              </select>
              </div>

              <div class="col-md-4 mb-3">
              <label for="salaire">Salaire Apres 3 Ans<span class="text-muted"></span></label>
              
              <select class="custom-select d-block w-100" name="salaire3" >
                <option value="">Choose...</option>
                <option value="500000"<?php if ($reponse['salaire3'] <= 500000) echo 'selected'; ?>>moins de 500000</option>
                <option value="750000"<?php if (($reponse['salaire3'] > 500000) &&(($reponse['salaire6'] <= 1000000))) echo 'selected'; ?>>entre 500000 et 1000000</option>
                <option value="1200000" <?php if (($reponse['salaire3'] > 1000000) &&(($reponse['salaire6'] <= 1500000))) echo 'selected'; ?>> entre 1000000 et 1.5 million</option>
                <option value="2500000"<?php if ($reponse['salaire3'] >= 500000) echo 'selected'; ?>> +2 million</option>
                
              </select>
              </div>
            </div>


            

            

                
            
            <hr class="mb-4">
            <button class="btn btn-danger btn-lg btn-block" type="submit">Modifier</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Ecole Superieure Industrie</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Acceuil</a></li>
          <li class="list-inline-item"><a href="#">Statistique</a></li>
          
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

  </body> ";

</html>

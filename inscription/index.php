

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="auteur" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Inscription</title>

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
    // afin d eviter l acces a la page via l'adresse uniquement 
    $matricule = $_SESSION['matricule'];
    if (!$matricule){
      $_SESSION['info']="Vous n'avez pas acces a cette page ! ";
      header('Location: ../erreur/erreur.php');
    }
    //requete

    $requete = "SELECT * FROM idesi where matricule = '".$matricule."'  ";
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
        <a class="p-2 text-light" href="#">Inscription</a>
        <!--a class="p-2 text-light" href="#">Connexion</a-->
        <a class="p-2 text-light" href="../dashboard/">Statistique</a>
      </nav>
      
      <a class="btn btn-danger text-light" href='../loginscription/principale.php?deconnexion=true'><span>Deconnexion</span></a>
    </div>
</div>
    
    <div class="container " style= "margin-top: 1px ;">

      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="" alt="" width="72" height="72">
        
        <h2 class="text-danger">Formulaire d'inscription</h2>
        <p class="lead"></br>
            Cette fonctionnalité surement la plus importante permettra d’enregistrer dans la Base de données les informations des anciens étudiants.
            L’inscription consiste, pour le diplômé, à s’enregistrer dans la base de données des diplômés du parcours STIC. Les champs portant l'asterix sont obligatoires Il devra fournir les informations suivantes :
        </p>
      </div>


      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-danger">Votre identité</span>
            <span class="badge badge-secondary badge-pill"></span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Nom</h6>
                <small class="text-success"><?php echo $reponse['nom']; ?></small>
              </div>
              <span class="text-muted"><?php echo $reponse['birth']; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Promotion</h6>
                <small class="text-danger"><?php echo $reponse['promo']; ?></small>
              </div>
              <span class="text-danger"><?php echo $_SESSION['matricule']; ?>  </span>
            </li>

            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Specialite</h6>
                <small><?php  
                  if (($reponse['filiere'])=="E2IT") echo "E2I";
                    
                else echo $reponse['filiere'] ; ?></small>
              </div>
              <span class="text-success">ESI</span>
            </li>

          </ul>

          
        </div>

        <div class="col-md-8 order-md-1">

        <form method="post" action="verif.php" class="needs-validation" novalidate   >

          <h4 class=" mb-4 text-danger">Informations Personnelles</h4>

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
              <label for="email">Email * <span class="text-muted"></span></label>

              <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="you@example.com" required>
              <small id="emailHelp" class="form-text text-muted">L'ecole utilisera votre mail en cas de quete d'information.</small>
              <div class="invalid-feedback">
                Entrer SVP un mail correct.
              </div>
            </div>

            <div class="mb-3">
              <label for="contact">contact *</label>
              <input type="text" class="form-control" name="contact" placeholder="+225 49-857-825" required>
              <div class="invalid-feedback">
                Entrer SVP un numero correct.
              </div>
            </div>

            <div class="mb-3">
              <label for="contact2">contact 2 <span class="text-muted">(Optionnel)</span></label>
              <input type="text" class="form-control" name="contact2" placeholder="+221 01-857-825" >

            </div>

            <div class="mb-3">
              <label for="address2">Address  <span class="text-muted">(Optionnel)</span></label>
              <input type="text" class="form-control" name="address" placeholder="Abidjan Cocody rue 18">
            </div>

            <div class="mb-3">
              <label for="inputPassword5">Password *</label>
              <input type="password" name="mdp" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
              <small id="passwordHelpBlock" class="form-text text-muted">
              Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
              </small>
              <div class="invalid-feedback">Entrer SVP un mot de passe correct.</div>


            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="country">Pays</label>
                <input type="text" class="form-control" name="pays" placeholder="Cote d'ivoire">

                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="state">Ville</label>
              <input type="text" class="form-control" name="ville" placeholder="Yamoussoukro">

                <div class="invalid-feedback">
                  Entrer SVP une ville correcte.
                </div>
              </div>

           </div>


            <hr class="mb-4">
            <h4 class="mb-4 text-danger">Information Post Etude</h4>
          <div class=" row">
            <div class=" col-md-6 mb-3">
              <label for="tcdd">Temps Mis avant CDD (en mois)* </label>
              <input type="number" class="form-control" name="tcdd" placeholder=" 1" value="" required>
              <!--select class="custom-select d-block w-100" name="tcdd" required>
                <option value="">Choose...</option>
                <option value="0">moins d'1 mois</option>
                <option value="1">1 mois</option>
                <option value="2">2 mois</option>
                <option value="3">3 mois</option>
                <option value="4">4 mois</option>
              </select-->
              <div class="invalid-feedback">
                entrer svp une duree valide
              </div>
            </div>

            <div class=" col-md-6 mb-3">
              <label for="tcdd">Temps Mis avant premier CDI (en mois) * </label>
              <input type="number" class="form-control" name="tmdd" placeholder=" 6 " value="" required>
              <!--select class="custom-select d-block w-100" name="tmdd" required>
                <option value="">Choose...</option>
                <option value="6">moins de 6 mois</option>
                <option value="12">1 an </option>
                <option value="18">1 an et demi</option>
                <option value="24">2 ans</option>
                <option value="30">2 ans et demi</option>
                <option value="36">3 ans </option>
              </select-->
              <div class="invalid-feedback">
                entrer svp une duree valide
              </div>
            </div>
          </div>
            <hr class="mb-4">
            <h4 class="mb-4 text-danger">Information Professionnelle</h4>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="Entreprise">Nom *<span class="text-muted">(Entreprise)</span></label>
                <input type="text" class="form-control" name="entreprise" placeholder=" wanpan enterprise" value="" required>
                <div class="invalid-feedback">
                  Un nom valide est necessaire
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="domaine">Domaine *<span class="text-muted">(Entreprise)</span></label>
                <!--input type="text" class="form-control" name="typeentreprise" placeholder=" agronomie" value="" required-->
                <select class="custom-select d-block w-100" name="domaine" required>
                  <option value="">Choose...</option>
                  <option value="Equipementiers telecom et informatique">Équipementiers télécom et informatique</option>
                  <option value="Operateurs de service telecom et informatique">Opérateurs de service télécom et informatique</option>
                  <option value="Autorites de normalisation">Autorités de normalisation</option>
                  <option value="BI, Big Data">BI Big Data</option>
                  <option value="Developpement d’application">Développement d’application,Conception de systèmes</option>
                  <option value="Enseignement, recherche">Enseignement, Recherche </option>
                  <option value="Multimedia">Multimédia </option>
                  <option value="Integrateurs et solutions">Intégrateurs et solutions</option>
                  <option value="Societes de service (banques, assurances)">Sociétés de service (banques, assurances)</option>
                  <option value="Sante">Santé</option>
                  <option value="industrie">industrie </option>
                  <option value="autre">autres </option>
                </select>
                <div class="invalid-feedback">
                  Une entree  valide est necessaire.
                </div>
              </div>
            </div>


            <div class="mb-6">
              <label for="Contact">Fonction *<span class="text-muted">(Poste)</span></label>
              <!--input type="text" class="form-control" name="poste" placeholder="Ingenieur chef de projet" required-->
              <select class="custom-select d-block w-100" name="fonction" required>
                <option value="">Choose...</option>
                <option value="Equipementiers telecom et informatique">Conception de systèmes, de logiciels</option>
                <option value="Operateurs de service telecom et informatique">Administration de réseaux ou de bases de données</option>
                <option value="Planification">Planification</option>
                <option value="Developpement d’application">Développement d’application,Conception de systèmes</option>
                <option value="Reseaux télécom et informatique">Consultant, audit</option>
                <option value="Enseignement, recherche, développement">Technico-commercial </option>
                <option value="Maintenance">Maintenance </option>
                <option value="R&D">R&D</option>
                <option value="Maintenancier">Maintenancier</option>
                <option value="Chef de projet">Chef de projet</option>
                <option value="autre">autres </option>

              </select>
              <div class="invalid-feedback">
                Entrer SVP un numero correct.
              </div>
            </div>

            <hr class="mb-4" >
            

            

            

            <h4 class="mb-4 text-danger">Remuneration</h4>
            <p class="lead mb-4"><h10>Les informations renseignés dans cette partie reste confidentielles </h10></p>
            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="salaire">Salaire Apres 6 Mois<span class="text-muted"></span></label>
              
              <select class="custom-select d-block w-100" name="salaire6" >
              <option value="">Choose...</option>
                <option value="200000">moins de 200000</option>
                <option value="500000">entre 200000 et 500000</option>
                <option value="750000"> entre 500000 et 1 million</option>
                <option value="1000001"> +1 million</option>
                
              </select>
              </div>
              <div class="col-md-4 mb-3">
              <label for="salaire">Salaire Apres 1 an<span class="text-muted"></span></label>
              
              <select class="custom-select d-block w-100" name="salaire1" >
                <option value="">Choose...</option>
                <option value="300000">moins de 300000</option>
                <option value="550000">entre 300000 et 800000</option>
                
                <option value="850000"> + 800000</option>
                
              </select>
              </div>

              <div class="col-md-4 mb-3">
              <label for="salaire">Salaire Apres 3 Ans<span class="text-muted"></span></label>
              
              <select class="custom-select d-block w-100" name="salaire3" >
                <option value="">Choose...</option>
                <option value="500000">moins de 500000</option>
                <option value="850000">entre 500000 et 1200000</option>
                <option value="1500000"> + 1.2million</option>
                
                
              </select>
              </div>
            </div>


            

            

                
            <!--
            <hr >

            Position

            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>-->
            <hr class="mb-4">
            <button class="btn btn-danger btn-lg btn-block" type="submit">Envoyer</button>
          </form>
        </div>
      </div>

      
		
        
		<p class="float-right"><a href="#">retour en haut.</a></p>
      
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
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

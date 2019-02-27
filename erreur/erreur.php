<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Statistique</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="erreur.css" rel="stylesheet">
  </head>
<?php
session_start();
?>
  <body>
 
  <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-transparent p-1">
      <h5 class="text-dark h4">Ecole Superieure d'Industrie</h5>
      <span class="text-muted-">Ingenieur STIC.</span>
    </div>
  </div>
  
  
  
    <div class="d-flex  flex-column flex-md-row align-items-center p-3 px-md-4 mb-4 border-bottom box-shadow " style="background-color: #6d071A">
        
    <nav class="navbar navbar-dark bg-transparent">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
      <h5  class="my-0 mr-md-auto font-weight-normal text-light ">Ecole Superieure d'Industrie</h5>
      <nav class="my-2 my-md-0 mr-md-3">
          
        <a class="p-2 text-light active" href="#">Acceuil <span class="sr-only">(current)</span></a> </a>
        <a class="p-2 text-light" href="../loginscription/login/">Inscription</a>
        <a class="p-2 text-light" href="../loginmodifier/">Connexion</a>
        <a class="p-2 text-light" href="../dashboard/">Statistique</a>
      </nav>
      
      <a class="btn btn-danger text-light" href="../loginscription/login/">Sign up</a>
    </div>

    <main role="main" class="container">

      <div class="starter-template">
      <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Erreur!</h4>
  <p><?php
  if (isset($_SESSION['info'])) {echo $_SESSION['info'];}

?> </br> Rassurez vous que les donnees entrés sont justes En cas de doute contacter l'administration </p>
  <hr>
  <p class="mb-0">Voulez vous réeassayer? <a href="../loginscription/login/" class="alert-link">connexion</a> etes vous deja inscrit vous pouvez egalement modifier vos info <a href="../loginmodifier/index.html" class="alert-link">modifier</a> </p>
</div>
      </div>

    </main>
    <!-- /.container -->

    

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
    </div >
  </body>
</html>

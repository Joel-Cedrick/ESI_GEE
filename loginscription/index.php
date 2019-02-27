<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Connexion</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>

  <body>
  <!--tete de
  <div class="tete d-flex  flex-column flex-md-row align-items-center p-3 px-md-4 mb-4 border-bottom box-shadow">
        
          <nav class="navbar navbar-dark ">
    
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          </nav>
          <h5  class="my-0 mr-md-auto font-weight-normal text-light ">Ecole Superieure d'Industrie</h5>
          <nav class="my-2 my-md-0 mr-md-3">
              
            <a class="p-2 text-light active" href="#">Acceuil <span class="sr-only">(current)</span></a> </a>
            <a class="p-2 text-light" href="#">Inscription</a>
            <a class="p-2 text-light" href="#">Connexion</a>
            <a class="p-2 text-light" href="#">Statistique</a>
          </nav>
          
          <a class="btn btn-danger text-light" href="#">Sign up</a>
  </div> -->
  
    
    <div>
    <form method="post" action="converif.php" class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Inscription</h1>
        <p>Entrer votre numero de matricule inp 09INP05129 afin  d avoir acces au formulaire d'inscription <code></code> </p>
      </div>

      <div class="form-label-group">
        <input type="text" name="matricule" class="form-control" placeholder="Matricule-Inp 12INP00742" required >
        <label for="matricule">Matricule</label>
      </div>

      

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2018-wanpan</p>
    </form>
</div>
  </body>
</html>

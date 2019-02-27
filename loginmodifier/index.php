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
    <link href="float.css" rel="stylesheet">
  </head>

  <body>
  <?php include("../en_tete/entete.php"); ?>
     
          
      <div class= "zeus" class="card  border-secondary mb-3" style="width: 20rem ;background-color: rgba(0, 0, 0, 0.5) ">
          <div class="card-header text-light">Modifier vos information</div>
          <div class="card-body text-light">
              <h5 class="card-title"></h5>
              <form method="post" action="converif.php" class="form-signin">
                  <!--<div class="text-center mb-4">

                    <h1 class="h3 mb-3 font-weight-normal"></h1>

                  </div>-->

                  <div class="form-group">
                      <label for="matricule">Matricule</label>
                      <input type="text" name="matricule" class="form-control" placeholder="Matricule-Inp 12INP00742" autofocus>
                  </div>

                  <div class="form-group">
                      <label for="inputPassword">Password</label>
                      <input type="password" name="passe" class="form-control" placeholder="Password">
                  </div>

                  <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Se souvenir
                    </label>
                  </div>
                  <button class="btn btn-lg btn-danger btn-block" type="submit">Modifier</button>

              </form>
          </div>
      </div>

              <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
              <script src="../assets/js/vendor/popper.min.js"></script>
              <script src="../dist/js/bootstrap.min.js"></script>

  </body>
</html>

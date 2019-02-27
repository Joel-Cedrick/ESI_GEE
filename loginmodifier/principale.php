<html>
    <head>
      <meta charset="utf-8" />

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">

    </head>
    <body >
    <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>


        <div id="container">
          <blockquote>
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if(isset($_GET['deconnexion'])){
                    if($_GET['deconnexion']==true)
                   {
                      session_unset();
                      header("location:index.html");
                   }

                  else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<h10>Bonjour $user, vous êtes connecté vous pouvez modifier vos informations<h10/>";
                    header("location:../inscription/");
                }
                }
                
            ?>
          </blockquote>
        </div>
        
    </body>
</html>

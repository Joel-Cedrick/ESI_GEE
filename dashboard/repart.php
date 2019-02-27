<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Statitiques des diplomes de L'Ecole superieur d'industrie</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboardi.css" rel="stylesheet">
  </head>

  <body>
    <?php

    include("statites.php");


              ?>
<div class=" d-flex  flex-column flex-md-row align-items-center p-3 px-md-4 mb-4 border-bottom box-shadow " style="background-color: #6d071A">

        <nav class="navbar navbar-dark ">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
          <h5  class="my-0 mr-md-auto font-weight-normal text-light ">Ecole Superieure d'Industrie</h5>
          <nav class="my-2 my-md-0 mr-md-3">

            <a class="p-2 text-light active" href="../acceuil/">Acceuil <span class="sr-only">(current)</span></a> </a>
            <a class="p-2 text-light" href="../loginscription/login/">Inscription</a>
            <a class="p-2 text-light" href="../loginmodifier/">Connexion</a>
            <a class="p-2 text-light" href="#">Statistique</a>
          </nav>

          <a class="btn btn-danger text-light" href="">Se connecter</a>
</div>

    <!-- fin tete de page -->

    <!--nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Ecole Superieure d'Industrie</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav-->


<div class="container-fluid">
      <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light  sidebar" >
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active text-dark" href="index.php">
                  <span data-feather="home"></span>
                  Taux De Reponses <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark " href="repart.php">
                  <span data-feather="file"></span>
                  Repartition par secteur d'activité
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link text-dark" href="tcdi.php">
                  <span data-feather="users"></span>
                  Temps Mis Avant CDI
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="salaire.php">
                  <span data-feather="bar-chart-2"></span>
                  Grille salariale
                </a>
              </li>
              
            </ul>

            
        </nav>
        

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Repartition par secteur d'activités</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <!--button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                E2I
              </button-->
            </div>
          </div>

          
          <div class="container" style= width:75%>
          <div class="mb-4" >
          
              <canvas  id="doughnut-chart" ></canvas>
              <h6> <lead> Repartition par secteur d'activite </lead> </h6>
  
            </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
            <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>-->
            <script src="Chart.js"></script>
    <?php $donnees = json_encode($donnees,JSON_NUMERIC_CHECK);?>
    <?php $labels = json_encode($labels,JSON_NUMERIC_CHECK);?>
    <?php $donneesrepart = json_encode($donneesrepart,JSON_NUMERIC_CHECK);?>

    <?php $mois     = json_encode($mois,JSON_NUMERIC_CHECK);?>
    <?php $moisi    = json_encode($moisi,JSON_NUMERIC_CHECK);?>
    <?php $salaire6 = json_encode($salaire6,JSON_NUMERIC_CHECK);?>
    <?php $salaire1 = json_encode($salaire1,JSON_NUMERIC_CHECK);?>
    <?php $salaire3 = json_encode($salaire3,JSON_NUMERIC_CHECK);?>

    <script type="text/javascript">
    

      /*!-- Graphs  temps mis avant cdi mychart-->*/
      console.log(<?php echo $labels;  ?>);
      new Chart(document.getElementById("doughnut-chart"), {
        type: 'doughnut',
        data: {
          labels: <?php echo $labels;  ?>,
            datasets: [
            {
              label: "Pourcentage",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", 'rgba(54, 162, 023)',"#3e95cd","#3cab9f","#d41650",'rgba(255, 206, 86)','rgba(255, 159, 64)','rgba(255, 100, 150, 1)'],
              data: <?php echo $donneesrepart ?>
            }
            ]
        },
        options: {
            legend: {
              display: true,
            position:'right',

          title: {

          }}

        }
      });

      /* graph avant premier stage */
      var tp = document.getElementById("tps").getContext('2d');
      var tps = new Chart(tp, {
          type: 'bar',
          data: {
              labels: ["Moins d'un mois", "]1-3]", "Plus de 3 MOIs"],
              datasets: [{
                  label: '# of Votes',
                  data: <?php echo $mois;  ?>,
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:true
                      }
                  }]
              }
          }
      });

/* graph de temps mis avant CDI */
var tc = document.getElementById("tcdi").getContext('2d');
var tcdi = new Chart(tc, {
    type: 'bar',
    data: {
        labels: ["[0-6] mois", "6 mois a 1 ans ", "1 a 2 ans", "2 a 3 ans","Plus de 3 Ans"],
        datasets: [{
            label: '# of Votes',
            data: <?php echo $moisi ;?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});


/* graph salaire */


/* apres 6 mois */
var si = document.getElementById("six").getContext('2d');
var six = new Chart(si, {
    type: 'pie',
    data: {
        labels: ["-200000", "200000-500000","500000-1Million", "+1 Million"],
        datasets: [{
            label: '# of Votes',
            backgroundColor:['rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(153, 102, 255, 1)'],
            data:<?php echo $salaire6 ?>,

        }]
    },
    options: {
      title: {
        display: false,
        text: 'grille salariale apres 6 mois'
      }

    }
});
/* apres 1 an */
var u = document.getElementById("un").getContext('2d');
var un = new Chart(u, {
    type: 'pie',
    data: {
        labels: ["300000", "700000", "+1,5 Millions"],
        datasets: [{
            label: '# of Votes',
            backgroundColor: ['rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'],
            data: <?php echo $salaire1 ?>,

        }]
    },
    options: {
      title: {
        display: false,
        text: 'grille salariale a pres 6 mois'
      }

    }
});
/* apres 3 ans */
var tr = document.getElementById("trois").getContext('2d');
var trois = new Chart(tr, {
    type: 'pie',
    data: {
        labels: ["500000", "+1 Million", "+2 Millions"],
        datasets: [{
            label: '# of Votes',
            backgroundColor: ['rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'],
            data: <?php echo $salaire3 ?>,

        }]
    },
    options: {
      title: {
        display: false,
        text: 'Grille Salariale Apres 3 Ans '
      }

    }
});







    </script>

  </body>
</html>

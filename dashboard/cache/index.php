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
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <?php

    include("stati.php");
    
    
              ?>
<div class="tete d-flex  flex-column flex-md-row align-items-center p-3 px-md-4 mb-4 border-bottom box-shadow">
        
        <nav class="navbar navbar-dark ">
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
          <h5  class="my-0 mr-md-auto font-weight-normal text-light ">Ecole Superieure d'Industrie</h5>
          <nav class="my-2 my-md-0 mr-md-3">
              
            <a class="p-2 text-light active" href="../acceuil/">Acceuil <span class="sr-only">(current)</span></a> </a>
            <a class="p-2 text-light" href="../loginscription/login/">Inscription</a>
            <a class="p-2 text-light" href="../loginmodifier/index.html">Connexion</a-->
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
<!-- pause 
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-1 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                E2I <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Informatique

                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Telecom
                </a>
              </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>STIC</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Resultats
                </a>
              </li>

            </ul>
          </div>
        </nav>
        </div>
        </div>
-->

        <main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Statistique</h1>

          </div>
          <div class="mb-3">
          <div class="row">
            <div class="col-md-5">
              <h6><lead> Taux de reponses </lead></h6>
              <canvas class="my-6" id="myChart" ></canvas>
  
            </div>
            <div class="col-md-7">
              <h6><lead >Repartition par secteur d'activite  </lead></h6>
              <canvas class="my-6" id="doughnut-chart" ></canvas>
            </div>
          </div>
            </div>
          <div class="mb-3">
            <hr></hr>
          <div class="row">
            <div class="col-md-6">
              <h6><lead >Temps Mis Avant Premier Stage </lead></h6>
              <canvas class="my-6" id="tps" ></canvas>
            </div>
            <div class="col-md-6">
              <h6><lead >Temps Mis Avant cdi  </lead></h6>
              <canvas class="my-6" id="tcdi" ></canvas>
            </div>
          </div>
          </div>
          <div class="mb-4">
            <hr> <h4><lead >Grille salariale  </lead></h4></hr>
          <div class="row">

            <div class="col-md-4">
              <h6><lead >Apres 6 mois </lead></h6>
              <canvas class="my-4" id="six" ></canvas>
            </div>
            <div class="col-md-4">
              <h6><lead >Apres 1 An </lead></h6>
              <canvas class="my-4" id="un" ></canvas>
            </div>
            <div class="col-md-4">
              <h6><lead >Apres 3 An </lead></h6>
              <canvas class="my-4" id="trois" ></canvas>
            </div>
            </div>
            </div>


        </main>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <?php $donnees = json_encode($donnees,JSON_NUMERIC_CHECK);?>
    <?php $labels = json_encode($labels,JSON_NUMERIC_CHECK);?>
    <?php $donneesrepart = json_encode($donneesrepart,JSON_NUMERIC_CHECK);?>
    
    <?php $mois = json_encode($mois,JSON_NUMERIC_CHECK);?>
    <?php $moisi = json_encode($moisi,JSON_NUMERIC_CHECK);?>
    <?php $salaire6 = json_encode($salaire6,JSON_NUMERIC_CHECK);?>
    <?php $salaire1 = json_encode($salaire1,JSON_NUMERIC_CHECK);?>
    <?php $salaire3 = json_encode($salaire3,JSON_NUMERIC_CHECK);?>
    
    <script type="text/javascript">
    /*-- Graphs  taux de reponses mychart--*/
    console.log("ffff");
    console.log(<?php echo $moisi;  ?>);
    console.log(<?php echo $donnees;  ?>);
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
          labels: ["2015", "2016", "2017"],
          datasets: [{
            data: <?php echo $donnees;  ?>            /* echo $labels */ ,
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
            text: 'Répartition gaz par bâtiment'
          }

        }
      });

      /*!-- Graphs  temps mis avant cdi mychart-->*/
      console.log(<?php echo $labels;  ?>);
      new Chart(document.getElementById("doughnut-chart"), {
        type: 'doughnut',
        data: {
          labels: <?php echo $labels;  ?>,
            datasets: [
            {
              label: "Pourcentage",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#8e5ea2","#3e95cd","#3cab9f","#d41650"],
              data: <?php echo $donneesrepart ?>
            }
            ]
        },
        options: {
          title: {
            
          }

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

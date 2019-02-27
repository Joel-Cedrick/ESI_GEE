

/*-- Graphs  taux de reponses mychart--*/
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
      labels: ["2015", "2016", "2017"],
      datasets: [{
        data: [30, 25, 70],
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
  new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Moulage", "Ebarbage", "Montage", "Expédition", "Autres"],
        datasets: [
        {
          label: "Pourcentage",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,734,1734,784,233]
        }
        ]
    },
    options: {
      title: {
        display: true,
        text: 'Répartition gaz par bâtiment'
      }

    }
  });

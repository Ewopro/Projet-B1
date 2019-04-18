<!--------------------------------------------------------------------------------Code en php ------------------------------------------------------->

<?php session_start (); include ("header.php");  ?>

<!--------------------------------------------------------------------------------Graphique Bar------------------------------------------------------->

<div class="container-graph">
       <canvas id="myChart" width="100" height="30"></canvas>
              <script>
              var ctx = document.getElementById('myChart').getContext('2d');
              var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: ['Formulaire remplis', 'Formulaire non-remplis'],
                      datasets: [{
                          label: 'Nombre de formulaire',
                          data: [12, 19],
                          backgroundColor: [
                              'rgba(255, 99, 132, 0.2)',
                              'rgba(54, 162, 235, 0.2)',
                          ],
                          borderColor: [
                              'rgba(255, 99, 132, 1)',
                              'rgba(54, 162, 235, 1)',
                          ],
                      }]
                  },
                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero: true
                              }
                          }]
                      }
                  }
              });
              </script>
</div>

<!--------------------------------------------------------------------------------Graphique Line------------------------------------------------------->

<div class="container-graph2">
     <canvas id="line" width="100" height="30"></canvas>
              <script>
              new Chart(document.getElementById("line"), {
                       type: 'line',
                       data: {
                         labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
                         datasets: [{ 
                             data: [86,114,106,106,107,111,133,221,783,2478],
                             label: "Afrique",
                             borderColor: "#3e95cd",
                             fill: '+2',
                           }, { 
                             data: [282,350,411,502,635,809,947,1402,3700,5267],
                             label: "Asie",
                             borderColor: "#8e5ea2",
                             fill: '+2',
                           }, { 
                             data: [168,170,178,190,203,276,408,547,675,734],
                             label: "Europe",
                             borderColor: "#3cba9f",
                             fill: '+2',
                           }, { 
                             data: [40,20,10,16,24,38,74,167,508,784],
                             label: "Amerique du sud",
                             borderColor: "#e8c3b9",
                             fill: '+2',
                           }, { 
                             data: [6,3,2,2,7,26,82,172,312,433],
                             label: "Amerique du Nord",
                             borderColor: "#c45850",
                             fill: '+2',
                           }
                         ]
                       },
                       options: {
                         title: {
                           display: true,
                           text: 'Pib par région'
                         }
                       }
                     });
              </script>
</div>

<!--------------------------------------------------------------------------------Graphique Radar------------------------------------------------------->

<div class="container-graph4">
       <canvas id="radar" width="100" height="30"></canvas>
              <script>
              new Chart(document.getElementById("radar"), {
                  type: 'radar',
                  data: {
                    labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                    datasets: [
                      {
                        label: "1950",
                        fill: true,
                        backgroundColor: "rgba(179,181,198,0.2)",
                        borderColor: "rgba(179,181,198,1)",
                        pointBorderColor: "#fff",
                        pointBackgroundColor: "rgba(179,181,198,1)",
                        data: [8.77,55.61,21.69,6.62,6.82]
                      }, {
                        label: "2050",
                        fill: true,
                        backgroundColor: "rgba(255,99,132,0.2)",
                        borderColor: "rgba(255,99,132,1)",
                        pointBorderColor: "#fff",
                        pointBackgroundColor: "rgba(255,99,132,1)",
                        pointBorderColor: "#fff",
                        data: [25.48,54.16,7.61,8.06,4.45]
                      }
                    ]
                  },
                 options: {
				      title: {
				        display: true,
				        text:'Unions des Populations',
				      }
				    }
              });
              </script>
</div>

<!--------------------------------------------------------------------------------Graphique Polar------------------------------------------------------->

<div class="container-graph4">
       <canvas id="polarArea1" width="100" height="30"></canvas>
              <script>
              new Chart(document.getElementById("polarArea1"), {
				    type: 'polarArea',
				    data: {
				      labels: ["Afrique", "Asie", "Europe", "Amérique du sud", "Amérique du Nord"],
				      datasets: [
				        {
				          label: "Population (millions)",
				          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
				          data: [4478,6267,2734,5784,4433]
				        }
				      ]
				    },
				    options: {
				      title: {
				        display: true,
				        text: 'Prédiction Population (en millions) en 2050'
				      }
				    }
				});
              </script>
</div>

<!-------------------------------------------------------------------------------- On inclu le Footer ------------------------------------------------------->

<?php include ("footer.php");  ?>

<!-------------------------------------------------------------------------------- Fin ---------------------------------------------------------------------->
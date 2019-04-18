<!--------------------------------------------------------------------------------Code en php ------------------------------------------------------->

<?php session_start (); include ("header.php");  ?>
<?php 
if (!isset($_SESSION['Username'])) {
  header('Location: connect.php');
  exit();
}
?>
<!--------------------------------------------------------------------------------Formulaire en Javascript---------------------------------------------------->

<div class="formulaire">
       <H1>Formulaire </H1>
       <form id="formtest" method="POST" action="" >
              <input type="text" class="bang" id="Nom" name="Nom" placeholder="Votre Nom"></br>
              <input type="text" class="bang" id="Prenom" name="Prenom" placeholder="Votre Prenom"></br>
              <input type="text" class="bang" id="email" name="email" placeholder="Votre email"></br>
              <input type="submit" class="bang" name="send">
       </form>
</div>

<!--------------------------------------------------------------------------------Graphique line-------------------------------------------------------------->
<div class="container-gra">
     <canvas id="line" width="100" height="30"></canvas>
              <script>
              new Chart(document.getElementById("line"), {
                       type: 'line',
                       data: {
                         labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
                         labels: ['janvier','fevrier','mars','avril','mai','juin','juillet'],
                         datasets: [{ 
                             data: [1500,1200,1800,2000,2600,1783,3478],
                             label: "Croissance",
                             borderColor: "#3e95cd",
                           }, 
                         ]
                       },
                       options: {
                         title: {
                           display: true,
                           text: 'Votre Compte en banque'
                         }
                       }
                     });
              </script>
</div>

<div class="container-titre">
  <p>Cours des Crypto-Monnaies</p>
</div>
<div class="container-graph3">
            <canvas id="myLineChart"></canvas>
            <script type="text/javascript">
              var ctx = document.getElementById('myLineChart').getContext('2d');
                var myLineChart = new Chart(ctx, {
                type: 'line',

                data: {
                    labels: [],
                    datasets: [{
                        label: 'Bitcoin',
                        backgroundColor: 'rgb(255, 255, 255, 0',
                        borderColor: 'rgb(255, 99, 132)',
                        data: []
                    }]
                },

                options: {}
            });
                var postId = 1;

                var getData = function() {
                    $.ajax({
                    url: 'https://jsonplaceholder.typicode.com/posts/' + postId + '/comments',
                    success: function(data) {
                        level = Math.floor(Math.random() * (25))+1;
                        myLineChart.data.labels.push("Post " + postId++);
                        myLineChart.data.datasets[0].data.push(level);
                        myLineChart.update();
                
                    }
                })
            }
            setInterval(getData, 1000);
          </script>

</div>
<div class="container-graph5">
            <canvas id="myLine"></canvas>
            <script type="text/javascript">
              var ctx = document.getElementById('myLine').getContext('2d');
                var myLine = new Chart(ctx, {
                type: 'line',

                data: {
                    labels: [],
                    datasets: [{
                        label: 'Ethereum',
                        backgroundColor: 'rgb(0,191,255',
                        borderColor: 'rgb(0,0,255',
                        data: []
                    }]
                },

                options: {}
            });
                var postId = 1;

                var getData = function() {
                    $.ajax({
                    url: 'https://jsonplaceholder.typicode.com/posts/' + postId + '/comments',
                    success: function(data) {
                        level = Math.floor(Math.random() * (25))+1;
                        myLine.data.labels.push("Post " + postId++);
                        myLine.data.datasets[0].data.push(level);
                        myLine.update();
                
                    }
                })
            }
            setInterval(getData, 1000);
          </script>
</div>

<!--------------------------------------------------------------------------------Graphique Bar ------------------------------------------------------->

<div class="container-titre">
  <p>Cours des Matières Premières</p>
</div>
<div class="container-graph3">
            <canvas id="bar"></canvas>
            <script type="text/javascript">
              var ctx = document.getElementById('bar').getContext('2d');
                var bar = new Chart(ctx, {
                type: 'bar',

                data: {
                    labels: [{
                      xAxisID :'bang',
                    }],
                    datasets: [{
                        label: 'Or',
                        backgroundColor: 'rgb(255, 99, 132, 0.2,rgb(255, 99, 132, 1',
                        data: []
                    }]
                },

                options: {}
            });
                var postId = 1;

                var getData = function() {
                    $.ajax({
                    url: 'https://jsonplaceholder.typicode.com/posts/' + postId + '/comments',
                    success: function(data) {
                        level = Math.floor(Math.random() * (25))+1;
                        bar.data.labels.push("Post " + postId++);
                        bar.data.datasets[0].data.push(level);
                        bar.update();
                
                    }
                })
            }
            setInterval(getData, 2000);
          </script>

</div>
<div class="container-graph5">
            <canvas id="barbis"></canvas>
            <script type="text/javascript">
              var ctx = document.getElementById('barbis').getContext('2d');
                var barbis = new Chart(ctx, {
                type: 'bar',

                data: {
                    labels: [],
                    datasets: [{
                        label: 'Pétrole',
                        backgroundColor: 'rgb(0,128,0,0.2',
                        borderColor: 'rgb(124,252,0,0.2',
                        data: []
                    }]
                },

                options: {}
            });
                var postId = 1;

                var getData = function() {
                    $.ajax({
                    url: 'https://jsonplaceholder.typicode.com/posts/' + postId + '/comments',
                    success: function(data) {
                        level = Math.floor(Math.random() * (25))+1;
                        barbis.data.labels.push("Post " + postId++);
                        barbis.data.datasets[0].data.push(level);
                        barbis.update();
                
                    }
                })
            }
            setInterval(getData, 2000);
          </script>
</div>

<!--------------------------------------------------------------------------------Graphique Radar------------------------------------------------------->

<div class="container-titre">
  <p>Activité</p>
</div>

<div class="container-graph3">
            <canvas id="radar2"></canvas>
            <script type="text/javascript">
              var ctx = document.getElementById('radar2').getContext('2d');
                var radar2 = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: [],
                    datasets: [{
                        label: 'Nombre Naissance',
                        backgroundColor: 'rgb(0,191,255,0.2',
                        borderColor: 'rgb(0,0,255,0.2',
                        data: []
                    }]
                },

                options: {}
            });
                var postId = 1;

                var getData = function() {
                    $.ajax({
                    url: 'https://jsonplaceholder.typicode.com/posts/' + postId + '/comments',
                    success: function(data) {
                        level = Math.floor(Math.random() * (25))+1;
                        radar2.data.labels.push("Post " + postId++);
                        radar2.data.datasets[0].data.push(level);
                        radar2.update();
                
                    }
                })
            }
            setInterval(getData, 3000);
          </script>

</div>
<div class="container-graph5">
            <canvas id="radar1"></canvas>
            <script type="text/javascript">
              var ctx = document.getElementById('radar1').getContext('2d');
                var radar1 = new Chart(ctx, {
                type: 'radar',
                data: {
                    labels: [],
                    datasets: [{
                        label: 'Nombre décès',
                         backgroundColor: 'rgb(220,20,60,0.2',
                        borderColor: 'rgb(240,128,128,0.2',
                        data: []
                    }]
                },

                options: {}
            });
                var postId = 1;

                var getData = function() {
                    $.ajax({
                    url: 'https://jsonplaceholder.typicode.com/posts/' + postId + '/comments',
                    success: function(data) {
                        level = Math.floor(Math.random() * (25))+1;
                        radar1.data.labels.push("Post " + postId++);
                        radar1.data.datasets[0].data.push(level);
                        radar1.update();
                
                    }
                })
            }
            setInterval(getData, 3000);
          </script>
</div>

<!--------------------------------------------------------------------------------On inclu footer.php------------------------------------------------------->

<?php include ("footer.php");  ?>

<!-------------------------------------------------------------------------------- Fin --------------------------------------------------------------------->
<?php
  $con = mysqli_connect("localhost","root","","crime_rate");
  if($con){
   // echo "connected";
  }
  $crime=$_POST['crime'];

?>
<html>
  <head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      var a= '<?php echo $crime; ?>';
      if(a == 'Arson')
      {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['year', 'arson'],
         <?php
         $sql = "SELECT * FROM anlysis";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['year']."',".$result['arson']."],";
          }

         ?>
        ]);

        var options = {
          title: 'ANALYSIS OVER THE YEARS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    }
    else if(a=='Burglary')
    {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['year', 'burglary'],
         <?php
         $sql = "SELECT * FROM anlysis";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['year']."',".$result['burglary']."],";
          }

         ?>
        ]);

        var options = {
          title: 'ANALYSIS OVER THE YEARS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    }
     else if(a == 'Murder')
      {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['year', 'murder'],
         <?php
         $sql = "SELECT * FROM anlysis";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['year']."',".$result['murder']."],";
          }

         ?>
        ]);

        var options = {
          title: 'ANALYSIS OVER THE YEARS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    }
    else if(a == 'Rape')
      {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['year', 'rape'],
         <?php
         $sql = "SELECT * FROM anlysis";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['year']."',".$result['rape']."],";
          }

         ?>
        ]);

        var options = {
          title: 'ANALYSIS OVER THE YEARS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    }
    else if(a == 'Kidnap')
      {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['year', 'kidnap'],
         <?php
         $sql = "SELECT * FROM anlysis";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['year']."',".$result['kidnap']."],";
          }

         ?>
        ]);

        var options = {
          title: 'ANALYSIS OVER THE YEARS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    }
    else if(a == 'Dacoity')
      {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['year', 'dacoity'],
         <?php
         $sql = "SELECT * FROM anlysis";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['year']."',".$result['dacoity']."],";
          }

         ?>
        ]);

        var options = {
          title: 'ANALYSIS OVER THE YEARS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    }
    if(a == 'Robbery')
      {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['year', 'robbery'],
         <?php
         $sql = "SELECT * FROM anlysis";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['year']."',".$result['robbery']."],";
          }

         ?>
        ]);

        var options = {
          title: 'ANALYSIS OVER THE YEARS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    }
    else if(a == 'Theft')
      {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['year', 'theft'],
         <?php
         $sql = "SELECT * FROM anlysis";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['year']."',".$result['theft']."],";
          }

         ?>
        ]);

        var options = {
          title: 'ANALYSIS OVER THE YEARS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    }
    else if(a == 'Riots')
      {
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['year', 'riots'],
         <?php
         $sql = "SELECT * FROM anlysis";
         $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)) {
            echo"['".$result['year']."',".$result['riots']."],";
          }

         ?>
        ]);

        var options = {
          title: 'ANALYSIS OVER THE YEARS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
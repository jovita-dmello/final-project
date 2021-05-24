<?php  

//index.php

    session_start();
    

/*if(isset($_POST['submit']))
{
    $state=$_POST['fetch_state'];
     //header("location:fetch.php?state=".$state);

}
  */
  

  

include("database_connection.php");

$query = "SELECT year FROM all_crime GROUP BY year DESC";
$query1 = "SELECT distinct state FROM all_crime GROUP BY state DESC";


$statement = $connect->prepare($query);
$statement1 = $connect->prepare($query1);

$statement->execute();
$statement1->execute();

$result = $statement->fetchAll();
$result1 = $statement1->fetchAll();

?>  
<!doctype html>
<html lang="en">

<head>
    <style>
           .chart
        {
          //  background-color: black;
            margin-top: 240px;
            width:100%;
        }
        #a
        {
            margin-top: 80px;
            margin-left: 600px;
        }

        #a select
        {
            margin-bottom: 20px;



        }
        #but
        {
            margin-left: 120px;
            padding: 5px 20px 5px 20px;
            font-size: 20px;
            border-radius: 10px;

        }

        #nav
        {
            font-size:15px;
            font-family: 'Poppins';
            padding: 12px;
        }
    </style>
  <title>Create Dynamic Column Chart using PHP Ajax with Google Charts</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" type="text/css" href="../bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web\css\all.css">
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <!--<link rel="stylesheet" href="css/search.css">-->
    
    <title>Analysis Search Form</title>
    <style>
      .panel-body
      {
        height:600px;
        width:100%;
        
      }
      .chart
      {
        height:100%;
        width:100%;
        color: blue;
        
      }
    </style>
</head>

<body>

    <!--Navigation Bar--> 
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light" id="nav">
        <a class="navbar-brand pl-5" href="#">
          <img src="img/home/im.jfif" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
          A.J.M.G
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link pr-5" href="../admin-home.html">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link pr-5" href="../admin-anlysis.html">Analysis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pr-5" href="#">Admin Panel</a>
            </li> 
            <li class="nav-item dropdown pr-5">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="../settings.php">Account Settings</a>
                  <a class="dropdown-item" href="../login-ua.html">Log out</a>
                </div>
            </li> 
            <li class="nav-item">
                <a class="nav-link pr-5" href="#">Prediction</a>
            </li>
          </ul>
        </div>
    </nav>
    <!--END of Navigation Bar-->
<form methd="post" >
    <div class="col-md-3" id="a">
                            <select name="year" class="form-control" id="year" >
                                <option value="">Select Year</option>
                            <?php
                            foreach($result as $row)
                            {
                                echo '<option value="'.$row["year"].'">'.$row["year"].'</option>';
                            }
                            ?>
                            </select>
                            <select name="state" class="form-control" id="state" >
                                <option value="">Select State</option>
                            <?php
                            foreach($result1 as $row)
                            {
                                echo '<option value="'.$row["state"].'">'.$row["state"].'</option>';
                            }
                            ?>
                            </select>
                           <!-- <input type="submit" value="submit" name="submit" class="btn" >-->

                           <input type="submit" value="SUBMIT" id="but" >
                        </div>
                      

                    </div>
                </div>
                </form>
                <div class="panel-body">
                    <div id="chart_area" class="chart" style="width: 100%; height: 900px;"></div>
                </div>
            </div>
        </div>  
    </body>  
</html>





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback();
//console.log('inside success');

function load_monthwise_data(year,state, title)
{
   // console.log('inside success');
    var temp_title = title + ' '+year+'' + state+' ';
 /*   $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{year:year},
        dataType:"JSON",
        
        success:function(data)
        {
            drawMonthwiseChart(data, temp_title);
        }
    });
*/
     $.ajax({
        url:"fetch_s.php",
        method:"POST",
        data:{year:year,state:state},
        dataType:"JSON",
        //contentType:'application/json',
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        
        error:function(xhr,status,error)
        {
            console.log("inside error");
            console.log(error);
            console.log(status);
        },
        success:function(data)
        {
            console.log('inside success');
            drawMonthwiseChart(data, temp_title);
        }
        });
}

function drawMonthwiseChart(chart_data, chart_main_title)
{
    var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Month');
    data.addColumn('number', 'Profit');
    $.each(jsonData, function(i, jsonData){
        var month = jsonData.month;
        var profit = parseFloat($.trim(jsonData.profit));
        data.addRows([[month, profit]]);
    });
    var options = {
        title:chart_main_title,
        hAxis: {
            title: "DISTRICT"
            

        },
        vAxis: {
            title: 'CRIME RATE'

        }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));
    chart.draw(data, options);
}

</script>

<script>
    
/*$(document).ready(function(){

    $('#year').change(function(){
        var year = $(this).val();
        if(year != '')
        {
            load_monthwise_data(year, 'Month Wise Profit Data For');
        }
    });

});*/

/*$(document).ready(function(){
    $('.btn').on("click",function(){
        var year=$.trim($('#year').val());
        var state=$.trim($('#state').val());
       
        if(year != '')
        {

            load_monthwise_data(year, state,'Month Wise Profit Data For');
        }

       
 })});*/

$('form').submit(function(event){
        event.preventDefault();
        var year=$.trim($('#year').val());
        var state=$.trim($('#state').val());
        console.log(year);
        console.log(state);
        if(year != '')
        {
            load_monthwise_data(year, state,'CRIME RATE For');
        }

       
 });
</script>

   
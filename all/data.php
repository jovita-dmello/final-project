<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script>
		var queryString = decodeURIComponent(window.location.search);
		queryString = queryString.substring(1);
		var queries = queryString.split("&");

var stat = queries[0];
//var dis = queries[1];
//var dat = parseInt(queries[1]);
//stat = stat.toUpperCase();
document.write(stat);
	</script>

</body>
</html>
<?php
//setting header to json
echo"php";
header('Content-Type: application/json');

//database
$mysqli=mysqli_connect('localhost','root','','crime_rate');

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

 $abc = "<script>document.write(stat)</script>";  
 echo "$abc";
//query to get data from the table
$query = sprintf("SELECT year,abc FROM anlysis");

//execute query
$result = $mysqli->query($query);

//loop through the returned data

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);

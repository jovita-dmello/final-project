
<?php

//fetch.php

include('database_connection.php');

//print_r($_POST);

  
// Initialize the session
//session_start();
//$state=$_SESSION['start'];
//echo "12";
//echo "$state";
       
// Store the submitted data sent
// via POST method, stored 
  
// Temporarily in $_POST structure.

     

if(isset($_POST['year']) )
{
//	$state=$_GET['fetch_state'];
//echo "$state";

	//echo "<script>console.log('inside success')</script>";
//$state="andhra pradesh";


 $query = "SELECT * FROM crime 
 WHERE YEAR = '".$_POST["year"]."'  AND STATE = '".$_POST["state"]."'
";

	//$query="select * from crime where year='2001' and state='andhra pradesh' ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();

 $output=array();
 foreach($result as $row)
 {
  $output[] = array(
   'month'   => $row["DISTRICT"],
   'profit'  => floatval($row["RIOTS"])
  );
 }
 echo json_encode($output);
}


?>

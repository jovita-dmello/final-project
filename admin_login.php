<?php

    
if(isset($_POST['submit']))
{
    session_start();
    $_SESSION['x']=1;
    $conn=mysqli_connect("localhost","root","","crime_rate");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn,"crime_rate");
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST['a_username'];
        $pass=$_POST['a_password'];
        $u_id=$_POST['a_username'];
        $_SESSION['u_id']=$u_id;
        $result=mysqli_query($conn,"SELECT username,password FROM admin_registration where username='$name' and password='$pass' ");
        if(!$result || mysqli_num_rows($result)==0)
        {
          $message = "Id or Password not Matched.";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else 
        {
          header("location:admin-home.html");
          
        }
    }                
}
?>
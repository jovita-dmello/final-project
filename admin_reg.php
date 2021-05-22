<?php
    if(isset($_POST['submit']))
    {
        header("location:login-ua.html");
         $con=mysqli_connect('localhost','root','','crime_rate');
         if(!$con)
        {
            die('could not connect: '.mysqli_error());
        }
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $mobile=$_POST['tel'];
        $house=$_POST['house'];
        $street=$_POST['street'];
        $city=$_POST['city'];
        $pincode=$_POST['pincode'];
        $district=$_POST['district'];
        $state=$_POST['state'];
        $aadharnum=$_POST['aadharnum'];
        //$aadharcardfile=$_POST['aadharcardfile'];
        $station=$_POST['station'];
        $station_street=$_POST['station-street'];
        $station_city=$_POST['station-city'];
        $station_pincode=$_POST['station-pincode'];
        $station_district=$_POST['station-district'];
        $station_state=$_POST['station-state'];
        $police_id=$_POST['police_id'];
        //$police_card=$_POST['police_card'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        if($password == $cpassword)
        {
            $reg="insert into admin_registration values('$firstname','$lastname','$gender','$email','$mobile','$house','$street','$city','$pincode','$district','$state','$aadharnum','$station','$station_street','$station-city','$station-pincode','$station-district','$station-state','$police_id','$username','$password')";
            mysqli_select_db($con,'crime_rate');
            $res=mysqli_query($con,$reg);
        }
        else{
            $msg1 = "Invalid Password";
            echo "<script type='text/javascript'>alert('$msg1');</script>";
        }
        if(!$res)
        {
            $message1 = "User Already Exist";
            echo "<script type='text/javascript'>alert('$message1');</script>";
            
        }
        else
        {
            $message = "User Registered Successfully";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}
?>
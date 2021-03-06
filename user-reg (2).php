<?php
    if(isset($_POST['submit']))
    {
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
        $aadharnum=$_POST['aadhar_number'];

        $fullname=$firstname.' '.$lastname;
        $address=$house.', '.$street.', '.$city.', '.$district.', '.$state.', '.$pincode;
       
        $username=$_POST['username'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        if($password == $cpassword)
        {
            $reg="INSERT INTO user_db(user_id,password,fullname,gender,email,phone,address,aadharnum) VALUES('$username','$password','$fullname','$gender','$email','$mobile','$address','$aadharnum')";
            $res=mysqli_query($con,$reg);

            if(!$res)
            {
                $message1 = "User Already Exist";
                echo "<script type='text/javascript'>alert('$message1');</script>";
                
            }
            else
            {
                ob_start();
                echo '<script> alert("User Registered Successfully") </script>';
                echo '<script type="text/javascript">window.location.replace("login-ua.html");</script>';
                ob_end_flush();
            }

        }
       
        else{
            $msg1 = "Invalid Password";
            echo "<script type='text/javascript'>alert('$msg1');</script>";
        }
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <title>User Registration Form</title>

    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web\css\all.css">
    <link rel="stylesheet" type="text/css" href="css/user-reg.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">


    <script>
    function f1()
    {
        var sta1=document.getElementById("email1").value;
        var sta2=document.getElementById("pass").value;
        var sta4=document.getElementById("aadh").value;
        var sta5=document.getElementById("mobno").value;
        var x1=sta1.indexOf(' ');
        var x2=sta2.indexOf(' ');
        var x4=sta4.indexOf(' ');
        var x5=sta5.indexOf(' ');
         if(sta1!="" && x1>=0){
            document.getElementById("email1").value="";
            document.getElementById("email1").focus();
            alert("Space Not Allowed");
        }
        else if(sta2!="" && x2>=0){
            document.getElementById("pass").value="";
            document.getElementById("pass").focus();
            alert("Space Not Allowed");
        }
        else if(sta4!="" && x4>=0){
            document.getElementById("aadh").value="";
            document.getElementById("aadh").focus();
            alert("Space Not Allowed");
        }
        else if(sta5!="" && x5>=0){
            document.getElementById("mobno").value="";
            document.getElementById("mobno").focus();
            alert("Space Not Allowed");
        }
    }
    </script>
</head>    
<body>

    <section class="user-form">
        <div class="container py-5 px-5">
            <h1>User Registration Form</h1>
            <form action="" method="post" class="my-5">
                <h3>Personal Details</h3><hr>
                <div class="row g-3 my-4">
                    <div class="col">
                        <label for="" class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control" placeholder="ex : Milind" aria-label="First name">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="ex : Bijukumar" aria-label="Last name">
                    </div>
                </div>
                <label for="" class="form-label">Gender : </label>
                <div class="form-check form-check-inline mx-3">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline mx-3">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                    <label class="form-check-label" for="male">Female</label>
                </div>
                <div class="form-check form-check-inline mx-3">
                    <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                    <label class="form-check-label" for="other">Other</label>
                </div>
                <div class="row py-2">
                    <div class="col-lg-6">
                        <label for="" class="form-label">Email id :</label>
                        <input type="email" name="email" id="email1" class="form-control" placeholder="ex : milindjoo@gmail.com" aria-label="Email-id" onfocusout="f1()">
                    </div>    
                    <div class="col-lg-6">
                        <label for="" class="form-label">Mobile:</label>
                        <input type="tel" name="tel" id="mobno" class="form-control" placeholder="ex : 9037272424" required pattern="[6789][0-9]{9}" minlength="10" maxlength="10" aria-label="Email-id"onfocusout="f1()">
                    </div>
                </div>
                <div class="row py-2">
                    <div class="form-group col-lg-6">
                    <label for="house" class="py-1">House No:/Name</label>
                            <input id="house" type="text" class="form-control" name="house" placeholder="House Name/No:">
                    </div>
                    <div class="form-group col-lg-6">
                    <label for="area" class="py-1">Street/Area</label>
                            <input id="area" type="text" class="form-control" name="street" placeholder="Street/Area">
                    </div>
                </div>  
                <div class="row py-2">
                    <div class="form-group col-lg-6">
                    <label for="city" class="py-1">City</label>
                            <input id="city" type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="form-group col-lg-6">
                    <label for="area" class="py-1">PinCode</label>
                            <input id="pin" type="text" class="form-control" name="pincode" placeholder="PinCode">
                    </div>
                </div>
                <div class="row py-2">
                    <div class="form-group col-lg-6">
                    <label for="city" class="py-1">District</label>
                            <input id="city" type="text" class="form-control" name="district" placeholder="District">
                    </div>
                    <div class="form-group col-lg-6"> 
                    <label for="area" class="py-1">State</label>    
                        <select class="form-control py-1" aria-label="state" name="state">
                            <option selected disabled>States/Union Territorries</option>
                            <option disabled>States :</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>

                            <option disabled>Union Territorries :</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Ladakh">Ladakh</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>

                        </select>
                    </div>
                </div>
                <div class="row py-2">
                    <div class="col-lg-6">
                        <label for="" class="form-label py-1">Aadhar Card No:</label>
                        <input type="text" name="aadhar_number" id="aadh" class="form-control" placeholder="ex : 1021-XXX-XXX-XX36" minlength="14" maxlength="14" aria-label="" onfocusout="f1()">
                    </div>
                </div><br><br>
               
               
                <h3>Account Details</h3><hr>
                <div class="row py-2">
                    <label for="username" class="py-1">Username :</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="user-addon">@</span>
                        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row py-2">
<div class="form-group col-lg-6">
<label for="house" class="py-1">Password</label>
        <input id="pass" type="password" class="form-control" name="password" placeholder="Enter Password" onfocusout="f1()">
</div>
<div class="form-group col-lg-6">
<label for="area" class="py-1">Confirm your Password</label>
                        <input id="pass" type="password" class="form-control" name="cpassword" placeholder="Confirm your Password" onfocusout="f1()">
</div>
</div>

                <div class="col-12 mt-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                      </label>
                      <div class="invalid-feedback">
                        You must agree before submitting.
                      </div>
                    </div>
                </div>

                <div class="col-12 mb-2 mx-auto">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <script src="bootstrap-4/js/jquery-3.5.1.slim.min.js"></script>  
    <script src="bootstrap-4/js/popper.min.js"></script>
    <script type="text/javascript" src="bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>

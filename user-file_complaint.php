<?php
  session_start();
  $user_id=$_SESSION['user_id'];

  if(isset($_POST['submit']))
    {
         $con=mysqli_connect('localhost','root','','crime_rate');
         if(!$con)
        {
            die('could not connect: '.mysqli_error());
        }
        mysqli_select_db($con,"crime_rate");
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $gender=$_POST['gender'];
        $email=$_POST['email'];
        $mobile=$_POST['tele'];

        $house=$_POST['house'];
        $street=$_POST['street'];
        $city=$_POST['city'];
        $pincode=$_POST['pincode'];
        $district=$_POST['district'];
        $state=$_POST['state'];

        $aadharnum=$_POST['aadharnum'];

        $crime=$_POST['crime'];
        $day=$_POST['day'];
        $month=$_POST['month'];
        $years_j=$_POST['year'];

        $fullname=$firstname.' '.$lastname;
        $address=$house.', '.$street.', '.$city.', '.$district.', '.$state.', '.$pincode;

        $year=intval($years_j);

        echo gettype($year);

        $complaint=$_POST['complaint'];
        echo "$district";
        echo "$crime";

       $result=mysqli_query($con,"SELECT user_id,aadharnum FROM user_db where user_id='$user_id' and aadharnum='$aadharnum' ");
         if(!$result || mysqli_num_rows($result)==0)
        {
            $message1 = "Enter correct details";
            echo "<script type='text/javascript'>alert('$message1');</script>";
        }

        else{
            $reg="INSERT INTO  complaint_db(user_id, full_name, gender,  email, phone, aadharnum, address,crime_category, crime_day, crime_month, crime_year, crime_district, crime_state, complaint_detail, status ) VALUES ('$user_id','$fullname','$gender','$email','$mobile','$aadharnum','$address','$crime','$day','$month','$year','$district_complaint','$state_complaint','$complaint')";
            echo $crime;    
            $result = mysqli_query($con,$reg);
        }
            if($crime == "Arson")
        {
            

           
          $reg="update anlysis set arson=arson+1 where year=$year";
         // $reg1="update crime set district=jovita where state=Andhra Pradesh";
          $reg1="update crime set arson=arson+1 where year=$year and district='$district' ";
            echo "$crime";    

            $result = mysqli_query($con,$reg);
            $result1 = mysqli_query($con,$reg1);
            header("location:bargraph.html");
        
        }
        
        else if($crime == "Burglary")
        {

           
          $reg="update anlysis set burglary=burglary+1 where year=$year";
          $reg1="update crime set burglary=burglary+1 where year=$year and district='$district' ";
            echo $crime;    
            $result = mysqli_query($con,$reg);
            $result1 = mysqli_query($con,$reg1);
            header("location:bargraph.html");
        
        }
        else if($crime == "Rape")
        {

           
          $reg="update anlysis set rape=rape+1 where year=$year";
          $reg1="update crime set rape=rape+1 where year=$year and district='$district' ";
            echo $crime;    
            $result = mysqli_query($con,$reg);
            $result1 = mysqli_query($con,$reg1);
            header("location:bargraph.html");
        
        }
        else if($crime == "Riot")
        {

           
          $reg="update anlysis set riots=riots+1 where year=$year";
          $reg1="update crime set RIOTS=RIOTS+1 where YEAR=$year and DISTRICT='$district' ";
            echo $crime;    
            $result = mysqli_query($con,$reg);
            $result1 = mysqli_query($con,$reg1);
            header("location:bargraph.html");
        
        }
        else if($crime == "Theft")
        {

           
          $reg="update anlysis set theft=theft+1 where year=$year";
          $reg1="update crime set theft=theft+1 where year=$year and district='$district' ";
            echo $crime;    
            $result = mysqli_query($con,$reg);
            header("location:bargraph.html");
        
        }
        else if($crime == "Robbery")
        {

           
          $reg="update anlysis set robbery=robbery+1 where year=$year";
          $reg1="update crime set robbery=robbery+1 where year=$year and district='$district' ";
            echo $crime;    
            $result = mysqli_query($con,$reg);
            $result1 = mysqli_query($con,$reg1);
            header("location:bargraph.html");
        
        }
        else if($crime == "Kidnap")
        {

           
          $reg="update anlysis set kidnap=kidnap+1 where year=$year";
          $reg1="update crime set kidnap=kidnap+1 where year=$year and district='$district' ";
            echo $crime;    
            $result = mysqli_query($con,$reg);
            $result1 = mysqli_query($con,$reg1);
            header("location:bargraph.html");
        
        }
        else if($crime == "Dacoity")
        {

           
          $reg="update anlysis set dacoity+1 where year=$year";
          $reg1="update crime set dacoity=dacoity+1 where year=$year and district='$district' ";
            echo $crime;    
            $result = mysqli_query($con,$reg);
            $result1 = mysqli_query($con,$reg1);
            header("location:bargraph.html");
        
        }
        else if($crime == "Murder")
        {

           
          $reg="update anlysis set murder+1 where year=$year";
          $reg1="update crime set murder=murder+1 where year=$year and district='$district' ";
            echo $crime;    
            $result = mysqli_query($con,$reg);
            $result1 = mysqli_query($con,$reg1);
            header("location:bargraph.html");
        
        }
            
            
        
        if(!$result)
        {
            $message = "Enter correct details";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
        {
             $message = "Complaint Registered Successfully";
            echo "<script type='text/javascript'>alert('$message');</script>";
            
            
            
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Complaint Form</title>

    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/file-complaint.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web\css\all.css">
</head>   
<body>
    <!--Navigation Bar--> 
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
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
              <a class="nav-link pr-5" href="user-home.php?id=<?php echo $user_id;?>">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pr-5" href="user-anlysis.html">Analysis</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link pr-5" href="user-file_complaint.php">File A Complaint</a>
            </li> 
            <li class="nav-item dropdown pr-5">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="user-settings.php">Account Settings</a>
                  <a class="dropdown-item" href="login-ua.html">Log out</a>
                </div>
            </li> 
            <li class="nav-item">
                <a class="nav-link pr-5" href="user-view_complaint.php">Track Your Complaint</a>
            </li>
            
          </ul>
        </div>
      </nav>
    <!--END of Navigation Bar-->

    <!-- START OF Complaint form Section-->
    <section class="complaint-form">
        <div class="container">
            <div class="heading text-center mt-5">
                <h1 class="header1">File a Complaint</h1><hr>
            </div>
            <form action="#" method="post">
            <h3 class="mt-5">Personal Details</h3><hr>
                <div class="row g-3 my-4">
                    <div class="col">
                        <label for="" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="ex : Milind" aria-label="First name">
                    </div>
                    <div class="col">
                        <label for="" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="ex : Bijukumar" aria-label="Last name">
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
                        <input type="email" class="form-control" name="email" placeholder="ex : milindjoo@gmail.com" aria-label="Email-id">
                    </div>  
                    <div class="col-lg-6">
                        <label for="" class="form-label">Mobile:</label>
                        <input type="tel" class="form-control" name="tele" placeholder="ex : 9037272424" aria-label="Email-id">
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
                        <select class="form-control py-1" name="state">
                            <option selected></option>
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
                        <input type="text" class="form-control" name="aadharnum" placeholder="ex : 1021-XXX-XXX-XX36" aria-label="">
                    </div> 
                </div><br><br>


            <h3>Complaint Details</h3><hr>
            <div class="row py-2">
                <div class="form-group col-lg-6">
                    <label for="area" class="py-1">Crime</label>
                    <select class="form-control py-1" name="crime">   
                        <option disabled selected>Crime Categoeries</option>
                        <option value="Arson">Arson</option>
                        <option value="Burglary">Burglary</option>
                        <option value="Dacoity">Dacoity</option>
                        <option value="Kidnap">Kidnap</option>
                        <option value="Murder">Murder</option>
                        <option value="Rape">Rape</option>
                        <option value="Riot">Riot</option>
                        <option value="Robbery">Robbery</option>
                        <option value="Theft">Theft</option>    
                    </select>
                </div>
                <div class="form-group col-lg-6">
                    <label for="area" class="py-1">Date</label>
                    <div class="row">    
                        <div class="form-group col-lg-2">
                            <input id="day" type="text" class="form-control" name="day" placeholder="DD">
                        </div>
                        <div class="form-group col-lg-2">
                            <input id="month" type="text" class="form-control" name="month" placeholder="MM">
                        </div>
                        <div class="form-group col-lg-3">
                            <input id="year" type="text" class="form-control" name="year" placeholder="YYYY">
                        </div>
                    </div>    
                </div>
            </div>
            <div class="row py-2">
                <div class="form-group col-lg-6">
                    <label for="city" class="py-1">District</label>
                    <input id="city" type="text" class="form-control" name="crime_district" placeholder="District">
                </div>  
                <div class="form-group col-lg-6">
                    <label for="area" class="py-1">State</label>
                    <select class="form-control py-1" name="crime_state">
                        <option selected></option>
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
            <div class="form-group">
              <label for="message">Complaint Discription</label>
              <textarea id="message" class="form-control" type="text" name="complaint" placeholder="Write in detail about the complaint" rows="5"></textarea>
            </div>
                <input class="btn btn-info my-4" type="submit" name="submit" value="SUBMIT" > 
                  
        </div>  
      </form>

    </section>    
    <!--END of Complaint form Section-->


    <!-- START OF Footer -->
    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #3b5998; border-radius: 50%;border-color:#3b5998;"
              href="#!"
              role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #55acee; border-radius: 50%; border-color:#55acee;"
              href="#!"
              role="button"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #dd4b39; border-radius: 50%; border-color:#dd4b39;"
              href="#!"
              role="button"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #ac2bac; border-radius: 50%;border-color:#ac2bac;"
              href="#!"
              role="button"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #0082ca; border-radius: 50%;border-color:#0082ca;"
              href="#!"
              role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <!-- Github -->
            <a
              class="btn btn-primary btn-floating m-1"
              style="background-color: #333333; border-radius: 50%;border-color:#333333;"
              href=""
              role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color:#f0f0f0; color: #19b6cf; font-weight: 600;">
          © 2020 Copyright: AJMG.com
          
        </div>

        
        
      </footer>
      <!--END OF Footer-->

    
    <script src="bootstrap-4/js/jquery-3.5.1.slim.min.js"></script>  
    <script src="bootstrap-4/js/popper.min.js"></script> 
    <script type="text/javascript" src="bootstrap-4/js/bootstrap.min.js"></script>
</body> 
</html>
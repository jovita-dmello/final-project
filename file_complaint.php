<?php
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
        $mobile=$_POST['mob'];
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
        $complaint_d=$_POST['complaint'];

        $year=intval($years_j);
       // $year=(int)$years_j;
        echo gettype($year);
       // $district_complaint=$_POST['district_complaint'];
       // $state_complaint=$_POST['state_complaint'];
        $complaint=$_POST['complaint'];
        echo "$district";
        echo "$crime";

        $fullname= $firstname." ".$lastname;
        $home_address= $house.",".$street.",".$city.",".$district.",".$state.",".$pincode;

       $result=mysqli_query($con,"SELECT firstname,aadharnum FROM user_registration where firstname='$firstname' and aadharnum='$aadharnum' ");
         if(!$result || mysqli_num_rows($result)==0)
        {
            $message1 = "Enter correct details";
            echo "<script type='text/javascript'>alert('$message1');</script>";
        }

        else{
           // $reg="insert into  file_complaint values('$firstname','$lastname','$gender','$email','$mobile','$house','$street','$city','$pincode','$district','$state','$aadharnum','$crime','$day','$month','$year','$district_complaint','$state_complaint','$complaint')";

          $reg="INSERT INTO complaintdb(full_name, gender,  email, phone, aadharnum, address,crime_category, crime_day, crime_month, crime_year, crime_district, crime_state, complaint_detail, status ) VALUES
          ('$fullname','$gender','$email','$mobile','$aadharnum','$home_address','$crime','$day','$month','$years_j','$district','$state','$complaint_d','Pending');";
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
          //  header("location:bargraph.html");
        
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
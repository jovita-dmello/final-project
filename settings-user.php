<!DOCTYPE html>
<html>
<?php 
include('conctn.php');


//echo $userid;

if(isset($_POST['change-password'])){
  $oldpass=$_POST['old'];
  $newpass=$_POST['new'];
  $repass=$_POST['re-enter'];
  $userid=$_POST['username'];
  if ($newpass==$repass){
    $query="UPDATE user_registration SET password='$newpass' WHERE username='$userid' AND password='$oldpass'";
    if(mysqli_query($conn, $query)){
      echo "<script>alert('Password Changed Successfully')</script>";
    }
    else{
      echo 'query error: '. mysqli_error($conn);
    }

  }
  else{
    echo "<script>alert('New Password not matched')</script>";
  }
}

if(isset($_POST['change-mob'])){
  $number=$_POST['new-phone'];
  $password=$_POST['pass'];
  $userid=$_POST['username'];
  $query1="UPDATE user_registration SET mobile=$number WHERE username='$userid' AND password='$password' ";
    if(mysqli_query($conn, $query1)){
      echo "<script>alert('Contact Updated Successfully')</script>";
    }
    else{
      echo "<script>alert('Invalid Entry')</script>";
    }
}
?>
<head>
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web\css\all.css">
</head>   
<body>
    <!--Navigation Bar--> 
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
        <a class="navbar-brand pl-5" href="#">
          <img src="img/home/logo.jpg" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy">
          A.J.M.G
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link pr-5" href="user-home.html">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pr-5" href="user-anlysis.html">Analysis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pr-5" href="file_complaint.php">Add Complaint</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link pr-5" href="#">View Complaint</a>
            </li>
            <li class="nav-item dropdown pr-5  active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Account Settings</a>
                  <a class="dropdown-item" href="login-ua.html">Log out</a>
                </div>
            </li> 
            
          </ul>
        </div>
      </nav>
    <!--END of Navigation Bar-->

<!--Profile Section-->
<section class="profile">
    <div class="container my-5">
        <h1 class="text-center my-3">Account Settings</h1><hr>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                    <button class="btn btn-link change m" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Change Password
                    </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username"  >         
                            </div>
                            <div class="form-group">
                                <label for="oldpassword">Old Password</label>
                                <input type="password" class="form-control" name="old"  >         
                            </div>
                            <div class="form-group">
                                <label for="newpassword">New Password</label>
                                <input type="password" class="form-control" name="new"  >         
                            </div>
                            <div class="form-group">
                                <label for="oldpassword">Confirm New Password</label>
                                <input type="password" class="form-control" name="re-enter"  >         
                            </div>
                            <input class="btn btn-info my-4" type="submit" name="change-password" value="Change Password" >
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                    <button class="btn btn-link collapsed change" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Update Contact No:
                    </button>
                    </h5>
                </div>    
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <form method="POST">
                          <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username"  >         
                            </div>
                            <div class="form-group">
                                <label for="contact">New Contact No:</label>
                                <input type="text" class="form-control" name="new-phone"  >         
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="pass"  >         
                            </div>
                            <input class="btn btn-info my-4" type="submit" name="change-mob" value="Update Contact No:" >
                        </form>
                    </div>
                </div>
            </div>
        </div>  
    </div>
  </section>
  <!--END of Profile Section-->

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
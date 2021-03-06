<?php 
  $conn=mysqli_connect('localhost','root','','crime_rate');
  if($conn){
    }
  else echo "error";

  session_start();
  $user_id=$_SESSION['user_id'];

  $query="SELECT * from complaint_db where user_id='$user_id'";
  $result=mysqli_query($conn,$query);
  $array=mysqli_fetch_all($result,MYSQLI_ASSOC); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Complaint Approval- Admin Panel</title>

    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/user-view_complaint.css">
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
            <li class="nav-item">
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
            <li class="nav-item active">
                <a class="nav-link pr-5" href="user-view_complaint.php">Track Your Complaint</a>
            </li>
            
          </ul>
        </div>
      </nav>
    <!--END of Navigation Bar-->
    
    
    <!--START of Approval Table -->
    <section class="approval-section">
        <div class="container py-5">
            <div class="heading text-center py-5 mt-4">
                <h1>Complaint Approval</h1>
            </div>
            <table class="table table-striped approval-table mt-2 mb-5">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Complaint#</th>
                    <th scope="col">Crime Category</th>
                    <th scope="col">Crime Location</th> 
                    <th scope="col">Crime Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php foreach($array as $ind){ ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $ind['complaint_id']; ?></th>
                    <td><?php echo $ind['crime_category']; ?></td>
                    <td><?php echo $ind['crime_district'].'/'.$ind['crime_state']; ?></td>
                    <td><?php echo $ind['crime_day'].'/'.$ind['crime_month'].'/'.$ind['crime_year']; ?></td>
                    <td><a href="user-complaint_details.php?c_id=<?php echo $ind['complaint_id']; ?>">View Details</a></td>
                  </tr>   
                </tbody>
                <?php } ?>
              </table>
        </div>
    </section>

    <!--END of Approval Table-->

    
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
          ?? 2020 Copyright: AJMG.com       
        </div>        
    </footer>
    <!--END OF Footer-->

    
    <script src="bootstrap-4/js/jquery-3.5.1.slim.min.js"></script>  
    <script src="bootstrap-4/js/popper.min.js"></script> 
    <script type="text/javascript" src="bootstrap-4/js/bootstrap.min.js"></script>
</body> 
</html>
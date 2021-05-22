<?php 
session_start();
$user_id=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

    <link rel="stylesheet" type="text/css" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/admin-home.css">
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
            <li class="nav-item active">
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
            <li class="nav-item">
                <a class="nav-link pr-5" href="user-view_complaint.php">Track Your Complaint</a>
            </li>
            
          </ul>
        </div>
      </nav>
    <!--END of Navigation Bar-->

    <!--Start of Video Slider-->
    <section class="video-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <video autoplay loop muted src="img/home/home-back.mp4" type="video/mp4" class="w-100"></video>
            </div>
            <div class="carousel-item">
              <video autoplay loop muted src="img/home/home-back.mp4" type="video/mp4" class="w-100"></video>
            </div>
            <div class="carousel-item">
              <video autoplay loop muted src="img/home/home-back.mp4" type="video/mp4" class="w-100"></video>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> 
        </section>
    <!--END of Video Slider -->


    <!-- START OF Map Section-->
    <section class="map-section">
        <div class="container">
            <div class="heading text-center mt-5">
                <h1 class="header1">Live Tracker</h1><hr>
            </div>
            <div class="row min-vh-100">
                <div class="col-md-6 image mt-5 pt-5">
                    <img src="img/home/map1.png" class="">
                </div>
                <div class="col-md-6 image mt-5 pt-5">
                    <div class="info-box btn-info mx-5 my-3">
                        <h4>Murder</h4>
                        <h1>170000</h1>
                    </div>
                    <div class="info-box btn-info mx-5 mb-3">
                        <h4>Assualt on Women</h4>
                        <h1>170000</h1>
                    </div>
                    <div class="info-box btn-info mx-5 mb-3">
                        <h4>Riot</h4>
                        <h1>170000</h1>
                    </div>
                    <div class="info-box btn-info mx-5 mb-3">
                        <h4>Rape</h4>
                        <h1>170000</h1>
                    </div>
                    <div class="info-box btn-info mx-5 mb-3">
                        <h4>Theft</h4>
                        <h1>170000</h1>
                    </div>   
                </div>
            </div>
        </div>    
    </section>
    <!--END OF Map Section-->

    <!-- START OF Our Service -->
    <section class="our-service">
        <div class="container">
            <div class="heading text-center">
                <h1>Our Service</h1><hr>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="service">
                        <img src="img/home/analysis.svg" height="300px;" width="300px;"  class="ser">
                        <h3>Analysis</h3>

                        <blockquote>Crime analysis is a law enforcement function that involves systematic analysis for identifying and analyzing patterns and trends in crime.</blockquote>   
                    </div>
                </div>  
                <div class="col-md-4 text-center">
                    <div class="service">
                        <img src="img/home/prediction1.svg" height="300px;" width="300px;"  class="ser">
                        <h3>Prediction</h3>
                        <blockquote>The main purpose is to predict violent crimes occurring in a particular region in such a way that it can be used by police to reduce crime rates in the society.</blockquote>
                        
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service">
                        <img src="img/home/news-feed1.svg" height="300px;" width="300px;"  class="ser">
                        <h3>Visualization</h3>
                        <blockquote>Officers can view interactive<br/> plots and visualizations to help them understand the crimes and take actions accordingly.</blockquote>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END OF Our Service-->

    <!-- START OF Our Team -->
    <section class="team-area my-5">
        <div class="container">
            <div class="heading text-center">
                <h1>Our Team</h1><hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="team-single">
                        <div class="content-area">
                            <div class="side-one">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="img-area">
                                            <img src="img/home/abc.webp" alt="Milind">
                                        </div>
                                        <h4>Milind Bijukumar</h4>
                                        <p>Front-End Developer</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="side-two">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4>Milind Bijukumar</h4>
                                        <p>Intrested in user-interface designing, front-end developer etc.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="team-single">
                        <div class="content-area">
                            <div class="side-one">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="img-area">
                                            <img src="img/home/abc.webp" alt="Milind">
                                        </div>
                                        <h4>Jovita Diana Dmello</h4>
                                        <p>Back-End Developer</p> 
                                    </div>
                                </div>
                            </div>
                            <div class="side-two">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4>Jovita Diana Dmello</h4>
                                        <p>Intrested in user-interface designing, front-end developer etc.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="team-single">
                        <div class="content-area">
                            <div class="side-one">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="img-area">
                                            <img src="img/home/abc.webp" alt="Milind">
                                        </div>    
                                        <h4>Amrutha Bapu Gaikwad</h4>
                                        <p>Back-End Developer</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="side-two">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4>Amrutha Bapu Gaikwad</h4>
                                        <p>Intrested in user-interface designing, front-end developer etc.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="team-single">
                        <div class="content-area">
                            <div class="side-one">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="img-area">
                                            <img src="img/home/abc.webp" alt="Milind">
                                        </div>    
                                        <h4>Gauthami <br/>U.G</h4>
                                        <p>Back-End Developer</p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="side-two">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4>Gauthami U.G</h4>
                                        <p>Intrested in user-interface designing, front-end developer etc.</p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-icon" target="_blank">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END OF Our Service-->

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
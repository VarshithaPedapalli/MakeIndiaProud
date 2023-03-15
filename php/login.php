<?php include "db_conn.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Make India Proud</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/logo.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link
      href="../assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="../assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="../assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/project-detail.css" rel="stylesheet" />


  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <!-- <h1 class="logo"><a href="index.html">Groovin</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo"
          ><img src="../assets/img/logomip2.png" alt="" class="img-fluid"
        /></a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="../index.html">Home</a></li>
            <li><a class="nav-link scrollto" href="./project.php">Projects</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Projects</a></li>
            <li><a class="nav-link scrollto" href="#team">Team</a></li>
            <li>
              <a class="nav-link scrollto" href="#portfolio">Portfolio</a>
            </li>

            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li>
              <a class="getstarted scrollto" href="../index.html#registration">Register</a>   </li>    
                   <li><a class="getstarted scrollto" href="./login.php">Login</a></li>

            
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>


   
<?php
$login = false;
$showError = false;
if(isset($_POST['submit'])) {
  if($_POST['email'] == '' OR $_POST['password'] == '') {
    echo "some inputs are empty";
  }
  else {
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($result);


    if($num == 1){
      $login = true;
      session_start();
      echo "logged in";
      $_SESSION['email'] = $data['email'];
      header("location: project.php");
      } 
      else {
        echo "email or password is wrong";
      } 
    }

}


?>



<main class="form-signin w-50 m-auto">
  <form  class="form" method="POST" action="login.php">
    <h1 class="h3 mt-5 fw-normal text-center">Please login in</h1>
    <?php if(isset($_GET['error'])) {
            ?> 
            <p class="error" style="color: #af4242;
          padding: 10px;
          background-color: rgb(252, 237, 237);
          text-align:center;
          font-size: 18px;
          border-radius:30px;
          margin-bottom:20px;">
           <?php echo $_GET['error']; ?></p>
        <?php  }  ?>
    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <h6 class="mt-3">Don't have an account  <a href="register.php">Create your account</a></h6>
  </form>
</main>
<!-- <script src="./js/register.js"></script> -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <img src="../assets/img/logo.png" alt="">
              <p>
                OPPOSITE GOVERNMENT CIRCUIT HOUSE, RAM NAGAR, VISAKHAPATNAM, ANDHRA PRADESH 530002, INDIA<br><br> 
              </p>
              
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <div class="footer-info">
            <p><strong>Phone:</strong> +91-953 352 4488 <br>
              +91-917 779 9998<br>
              <strong>Email:</strong> info@example.com<br></p>
            <h6>Useful Links</h6>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Projects</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Works</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">NASA SPACE APPS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">WVIZAG STARTUP SUMMIT 2.O</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">STUDENT COMMUNITY BUILDING</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SHOUT OUT FOR MAKE INDIA PROUD</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">WALKATHON</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Make India Pround</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Varshiii</a>
      </div>
    </div>
  </footer><!-- End Footer -->
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>




<?php 
session_start();
?>
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



            
            <li><a class="nav-link scrollto" href="../index.html#about">About</a></li>

            <li><a class="nav-link scrollto" href="../index.html#team">Team</a></li>
            <li>
              <a class="nav-link scrollto" href="../index.html#portfolio">Portfolio</a>
            </li>

            <li><a class="nav-link scrollto" href="../index.html#contact">Contact</a></li>

            <?php if(isset($_SESSION['email'])) : ?>
            <li>
              <a class="getstarted scrollto" href="./index.php/#registration">Register</a>       </li>    
                   <li><a class="getstarted scrollto" href="./login.php">Login</a></li>
           <?php else : ?>
                   <li>
              <a class="getstarted scrollto" href="./create.php">Create</a>       </li>    
                   <li><a class="getstarted scrollto" href="./logout.php">Logout</a></li>
               <?php endif; ?>    
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    
    <!-- ======= Hero Section ======= -->
<?php 


// if(isset($_GET['id'])) {
  $id = $_GET['id'];

  $conn = mysqli_connect('localhost','root','','makeindiaproud');

  // if(!$conn){
  //   die("connection failed!!".mysqli_connect_error());
  // }

  // $image = mysqli_query($conn, "SELECT * FROM `image` ORDER BY id='$id'");
  $image = mysqli_query($conn, "SELECT * FROM `image` WHERE id='$id'");


  if(mysqli_num_rows($image)>0){
  $row = mysqli_fetch_assoc($image);

  echo "<div class='project-details'>
      <div class='leftdetails'>
        <img src='./uploads/$row[image_url]' style='height:450px; width:500px; margin-bottom:20px;'/>
      </div>
      <div class='rightdetails'>
        <h3>$row[title]</h3>
        <p>$row[content]</p>
      </div>
     </div>";
    
  }
?>    

    
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
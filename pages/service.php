<?php
session_start();
if(!isset($_SESSION['name'])){
  header('location: ./login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>GoldenGym</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../assets/css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="../assets/images/logo.png" alt="" />
            <span>
              GoldenGym
            </span>
          </a>
          <div class="contact_nav" id="">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <img src="../assets/images/location.png" alt="" />
                  <span>Location</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <img src="../assets/images/call.png" alt="" />
                  <span>Call : + 01 1234567890</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <img src="../assets/images/envelope.png" alt="" />
                  <span>GoldenGym@gmail.com</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div class="container">
        <div class="custom_nav2">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex  flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="service.php">Services </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li> -->
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
      </div>
      <div class="service_container">
        <div class="box">
          <img src="../assets/images/s-1.jpg" alt="">
          <h6 class="visible_heading">
            CROSSFIT TRAINING
          </h6>
          <div class="link_box">
            <a href="">
              <img src="../assets/images/link.png" alt="">
            </a>
            <h6>
              CROSSFIT TRAINING
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="../assets/images/s-2.jpg" alt="">
          <h6 class="visible_heading">
            FITNESS
          </h6>
          <div class="link_box">
            <a href="">
              <img src="../assets/images/link.png" alt="">
            </a>
            <h6>
              FITNESS
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="../assets/images/s-3.jpg" alt="">
          <h6 class="visible_heading">
            DYNAMIC STRENGTH TRAINING
          </h6>
          <div class="link_box">
            <a href="">
              <img src="../assets/images/link.png" alt="">
            </a>
            <h6>
              DYNAMIC STRENGTH TRAINING
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="../assets/images/s-4.jpg" alt="">
          <h6 class="visible_heading">
            HEALTH
          </h6>
          <div class="link_box">
            <a href="">
              <img src="../assets/images/link.png" alt="">
            </a>
            <h6>
              HEALTH
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="../assets/images/s-5.jpg" alt="">
          <h6 class="visible_heading">
            WORKOUT
          </h6>
          <div class="link_box">
            <a href="">
              <img src="../assets/images/link.png" alt="">
            </a>
            <h6>
              WORKOUT
            </h6>
          </div>
        </div>
        <div class="box">
          <img src="../assets/images/s-6.jpg" alt="">
          <h6 class="visible_heading">
            STRATEGIES
          </h6>
          <div class="link_box">
            <a href="">
              <img src="../assets/images/link.png" alt="">
            </a>
            <h6>
              STRATEGIES
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- info section -->

  <section class="info_section layout_padding2-top">
   
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h6>
            About GoldenGym
          </h6>
          <p>
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation u
          </p>
        </div>
        <div class="col-md-2 offset-md-1">
          <h6>
            Menus
          </h6>
          <ul>
            <li class=" active">
              <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="about.php">About </a>
            </li>
            <li class="">
              <a class="" href="service.php">Services </a>
            </li>
            <li class="">
              <a class="" href="contact.php">Contact Us</a>
            </li>
            <li class="">
              <a class="" href="login.php">Login</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
            Useful Links
          </h6>
          <ul>
            <li>
              <a href="">
                Adipiscing
              </a>
            </li>
            <li>
              <a href="">
                Elit, sed
              </a>
            </li>
            <li>
              <a href="">
                do Eiusmod
              </a>
            </li>
            <li>
              <a href="">
                Tempor
              </a>
            </li>
            <li>
              <a href="">
                incididunt
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
            Contact Us
          </h6>
          <div class="info_link-box">
            <a href="">
              <img src="../assets/images/location-white.png" alt="">
              <span> No.123, loram ipusm</span>
            </a>
            <a href="">
              <img src="../assets/images/call-white.png" alt="">
              <span>+01 12345678901</span>
            </a>
            <a href="">
              <img src="../assets/images/mail-white.png" alt="">
              <span> GoldenGym@gmail.com</span>
            </a>
          </div>
          <div class="info_social">
            <div>
              <a href="">
                <img src="../assets/images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="../assets/images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="../assets/images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="../assets/images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="../assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>

</html>
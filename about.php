<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    Wattscope - Reduce Emissions & Save 1000s+ INR
  </title>
  <link rel="shortcut icon" href="./image/png/favicon.png" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="./fonts/typography-font/typo.css">
  <link rel="stylesheet" href="./fonts/fontawesome-5/css/all.css">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="./plugins/aos/aos.min.css">
  <link rel="stylesheet" href="./plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="./plugins/nice-select/nice-select.min.css">
  <link rel="stylesheet" href="./plugins/slick/slick.min.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="./plugins/theme-mode-switcher/switcher-panel.css">
  <link rel="stylesheet" href="./css/main.css">
  <!-- Custom stylesheet -->
</head>

<body data-theme-mode-panel-active data-theme="light">
  <div class="site-wrapper overflow-hidden ">
    <!-- Header Area -->
    
    <header class="site-header site-header--menu-center dark-mode-texts dynamic-sticky-bg mt-3 mt-lg-0 site-header--absolute site-header--sticky" style="background-color:black; height:75px; width:100%;">
            <div class="container">
              <nav class="navbar site-navbar">
                <!-- Brand Logo-->
                <div class="brand-logo">
                  <a href="/home-marketing.html">
      
                  </a>
                </div>
                <div class="menu-block-wrapper  ms-4 dark-mode-texts">
                  <div class="menu-overlay"></div>
                  <nav class="menu-block" id="append-menu-header">
                    <div class="mobile-menu-head">
                      <div class="go-back">
                        <i class="fa fa-angle-left"></i>
                      </div>
                      <div class="current-menu-title"></div>
                      <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main">
                      <li class="nav-item nav-item-has-children">
                        <a href="./index.php" class="nav-link-item">Home</a>
                      </li>
                      <li class="nav-item nav-item-has-children">
                        <a href="./scan.php" class="nav-link-item">Scan A Utility</a>
                      </li>
                      </li>
                      <li class="nav-item nav-item-has-children">
                        <a href="./about.php" class="nav-link-item">About</a>
                      </li>
                    </ul>
                    
                  </nav>
                </div>
                <div class="header-btn ">


                     <?php 

                          if(empty($_SESSION['id'])) {
                            echo '                  <a href="./signup.php" class="btn btn btn-electric-violet-2 text-white rounded-50 ms-lg-2 shadow--electric-violet-2-4 ms-auto d-none d-sm-flex" style="background-color: #ff1e38; border: #ff1e38;">
                            Sign In
                          </a>';
                          }
                          else {
                            echo '                  <a href="./account.php" class="btn btn btn-electric-violet-2 text-white rounded-50 ms-lg-2 shadow--electric-violet-2-4 ms-auto d-none d-sm-flex" style="background-color: #ff1e38; border: #ff1e38;">
                            Account
                          </a>';
                          }

                      ?>








                </div>
                <!-- mobile menu trigger -->
                <div class="mobile-menu-trigger">
                  <span></span>
                </div>
                <!--/.Mobile Menu Hamburger Ends-->
              </nav>
            </div>
          </header>

    <!-- navbar- -->
    <!--/ .Header Area -->




    <div class="page-title-content text-center bg-default-3">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7">
            <h2 class="page-title-content__heading" style="margin-top:75px; margin-bottom:75px;">About Us</h2>
            <p class="page-title-content__text">Learn more about us, how we started, why we started, and how our product works by scrolling below.</p>
          </div>
        </div>
      </div>
      <div class="shape">
        <img class="w-100" src="./image/png/inner-banner-shape.png" alt="">
      </div>
    </div>





    <div class="about-us-section about-us-section--l5 bg-default">
      <div class="container">
        <!-- about-us Content -->
        <div class="row align-items-center justify-content-center">
          <div class="col-xl-6 col-lg-6 col-md-8 col-xs-10 aos-init aos-animate" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
            <div class="about-us__image">
              <img class="w-100" src="team.jpg" alt="">
              <!-- Video Button -->
            </div>
          </div>
          <div class="col-xxl-5 offset-xxl-1 col-lg-6 col-md-8 col-xs-10 aos-init aos-animate" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
            <div class="about-us-right mt-4 mt-lg-0">
              <div class="section-title section-title--l5">
                <h2 class="section-title__heading mb-4">Who we Are
                </h2>
                <p class="section-title__description">'We are team WattScope our goal is to find a solution to SDG 7 and help spread awarness to reduce the amount of fossil fuels burned and help everyone get clean energy'</p>
              </div>
            </div>
          </div>
        </div>
        <!--/ .about-us Content -->
      </div>
    </div>


















    <div class="content-section content-section--l4-2 dark-mode-texts" style="background-color: #FF5722; margin-bottom: 150px;">
      <div class="container">
        <div class="row align-items-center justify-content-center justify-content-xl-start">
          <div class="col-xl-4 col-md-10">
            <div class="section-title section-title--l4 text-center text-xl-start">
              <h6 class="section-title__sub-heading text-white">Our Process</h6>
              <h2 class="section-title__heading">Here are a few simple steps to use  our program</h2>
            </div>
          </div>
          <div class="col-xl-8">
            <div class="widgets widgets-content--l4 text-center text-xl-start">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-4 col-xs-6">
                  <div class="widget widget--content-l4 active">
                    <div class="widget--content-l3__circle">
                      <h2 class="widget--content-l3__circle-content bg-white mx-auto mx-xl-0 text-torch-red">
                        1</h2>
                    </div>
                    <h4 class="widget--content-l4__title">Take a picture of any device</h4>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                  <div class="widget widget--content-l4 ">
                    <div class="widget--content-l3__circle">
                      <h2 class="widget--content-l3__circle-content bg-white mx-auto mx-xl-0 text-torch-red">
                        2</h2>
                    </div>
                    <h4 class="widget--content-l4__title">Upload the image and wait for the application to process it</h4>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-xs-6">
                  <div class="widget widget--content-l4 ">
                    <div class="widget--content-l3__circle">
                      <h2 class="widget--content-l3__circle-content bg-white mx-auto mx-xl-0 text-torch-red">
                        3</h2>
                    </div>
                    <h4 class="widget--content-l4__title">Get the resuslts and start saving energy!</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
















    <!-- Hero Area -->
    
    <footer class="footer-section footer-inner-2 position-relative bg-default pt-6">
      <div class="container">
        <div class="footer-top border-bottom border-default-color-3 pb-5">
          <div class="row align-items-center justify-content-center">
            <div class="col-6 col-xxs-4 col-lg-4 col-md-5 col-xs-4">
              <div class="footer-brand-block footer-brand-block--l4 mb-md-0">
                <!-- Brand Logo-->
                <div class="brand-logo mb-0 text-center text-md-start mx-auto mx-md-0">
                  <a href="#">
                    <!-- light version logo (logo must be black)-->
                    <img src="image/png/logo-dark.png" alt="" class="light-version-logo">
                    <!-- Dark version logo (logo must be White)-->
                    <img src="image/png/logo-white.png" alt="" class="dark-version-logo">
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="footer-menu text-center text-md-end">
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="#">Scan A Utility</a></li>
                  <li><a href="about.php">About</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-block copyright-block--l3">
          <div class="row  text-center align-items-center">
            <div class="col-xs-6 text-sm-start">
              <p class="copyright-text--l3 ">© 2023 wattscope</p> <span class="copyright-text--l3 ">
            </div>
            <div class="col-xs-6 text-sm-end">
              <ul class="footer-social-share footer-social-share--rounded">
                <li>
                  <a href="#">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/sparshbothraa/">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/sparsh-bothra/">
                    <i class="fab fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  <!-- Plugin's Scripts -->
  <script src="./plugins/jquery/jquery.min.js"></script>
  <script src="./plugins/jquery/jquery-migrate.min.js"></script>
  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="./plugins/nice-select/jquery.nice-select.min.js"></script>
  <script src="./plugins/aos/aos.min.js"></script>
  <script src="./plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="./plugins/counter-up/waypoints.min.js"></script>
  <script src="./plugins/slick/slick.min.js"></script>
  <script src="./plugins/skill-bar/skill.bars.jquery.js"></script>
  <script src="./plugins/isotope/isotope.pkgd.min.js"></script>
  <!--<script src="./plugins/theme-mode-switcher/gr-theme-mode-switcher.js"></script>-->
  <!-- Activation Script -->
  <script src="js/menu.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>





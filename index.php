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
    
    <header class="site-header site-header--menu-center dark-mode-texts dynamic-sticky-bg mt-3 mt-lg-0 site-header--absolute site-header--sticky">
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


    <div class="welcome-area welcome-area--l5 dark-mode-texts position-relative" style="background-image: url(back.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center justify-content-md-start">
          <!-- Welcome content Area -->
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-8 col-xs-11 order-2 order-lg-1">
            <div class="welcome-content welcome-content--l3">
              <h1 class="welcome-content--l3__sub-title text-gorse aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Sign Un Now!</h1>
              <h1 class="welcome-content--l3__title aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">The right consultation partner for your business</h1>
              <p class="welcome-content--l3__descriptions aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">When, while lovely valley teems with vapour around
                meand <br class="d-none d-sm-block">
                        meridian sun strikes the upper impenetroble.</p>
            </div>
          </div>
          <!--/ .Welcome Content Area -->
        </div>
      </div>
    </div>



    <div class="container">
        <div class="content-section--l2-2__wrapper border-top border-default-color">
          <div class="row align-items-center justify-content-center justify-content-lg-start">
            <div class="col-xl-7 col-lg-6 col-md-8 col-xs-10">
              <div class="content-image-group--l2-2">
                <img class="w-100 aos-init aos-animate" src="./images/homepage/Resources Page.png" style="width:567px; height:500px; object-fit:cover;" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                <div class="content-image-group--l2-2__img-1">
                  <img class="w-100 aos-init aos-animate" src="./image/home-2/l2-content-2-shape-2.png" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true" data-aos-delay="300">
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-8 col-xs-10">
            <div class="section-title section-title--l9">
              <!-- <h6 class="section-title__sub-heading text-electric-violet-2" data-aos="fade-up" data-aos-duration="500" data-aos-once="true" style="color: #ff1e38 !important; border: #ff1e38;">Blog</h6> -->
              <h2 class="section-title__heading aos-init aos-animate" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">The World's First AI Powered Energy Optimisation Tool.</h2>
            </div>
                
                
                <p class="content-texts--l2-1__content aos-init aos-animate" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Our Applience scanner assists you in saving money by providing insights on the various areas in which your appliences are wasting energy and therefore contributing to your electricity and power bills.<br> <BR> The objective is to help you save you money, but as a byroduct, reduces energy wastage and pollution in its generation.</p>
                <div class="content-texts--l2-1__button aos-init aos-animate" data-aos="fade-left" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
                  <a class="btn-link--2 with--line border--primary" href="">Scan An Appliance Right Now</a>
                
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
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Articles</a></li>
                  <li><a href="#">Resources</a></li>
                  <li><a href="#">Forum</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-block copyright-block--l3">
          <div class="row  text-center align-items-center">
            <div class="col-xs-6 text-sm-start">
              <p class="copyright-text--l3 ">© 2023 Paradigm Education</p> <span class="copyright-text--l3 ">Disclaimer: Paradigm is not directly affiliated with the International Baccalaureate (IB)</span>
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
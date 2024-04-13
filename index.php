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



<style> p {
    padding: 10px;
}</style>


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


    <div class="welcome-area welcome-area--l5 dark-mode-texts position-relative" style="background-image: url(Untitled.jpeg);">
      <div class="container">
        <div class="row align-items-center justify-content-center justify-content-md-start">
          <!-- Welcome content Area -->
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-8 col-xs-11 order-2 order-lg-1">
            <div class="welcome-content welcome-content--l3">
              <h1 class="welcome-content--l3__sub-title text-gorse aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Sign Un Now!</h1>
              <h1 class="welcome-content--l3__title aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Welcome to WattScope!</h1>
              <p class="welcome-content--l3__descriptions aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">Founded on the principle of environmental responsibility, our team is dedicated to driving change and spreading awareness about the urgent need for clean energy adoption.</p>
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
                <img class="w-100 aos-init aos-animate" src="sec.jpg" style="width:567px; height:500px; object-fit:cover;" alt="" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
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












<?php

if(isset($_SESSION['id'])) {
    echo '    <div class="testimonial-section testimonial-section--l3 bg-default-3" style="background-color: white; margin-top:-50px; padding-bottom:120px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-10 col-xxl-10">
          <div class="section-title section-title--l3 text-center" style="margin-bottom: -20px;">
            <h2 class="section-title__heading mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Your Scanning History</h2>
          </div>
        </div>
      </div>';

      $ID = $_SESSION['id'];
      $fetch = mysqli_query($conn, "SELECT * FROM aihistory WHERE userid = '$ID' ORDER BY scanid DESC");
      while($row = mysqli_fetch_assoc($fetch)) {
        echo "
        <div class='row justify-content-center testimonial-mobile-slider--l3 aos-init aos-animate' data-aos='fade-up' data-aos-duration='500' data-aos-delay='400' data-aos-once='true'>
          <div class='col-lg-12 col-md-12'>
            <div class='card card-testimonial--l3' style='background-color:#f3f4f6;'>
              <div class='card-body' style='display: flex;'>
                <p class='card-description' style='color: black;'></p>
                <div class='col-2'>
                <h3 class='card-title' style='color: black;'>Appliance</h3>
                <p class='card-text--ext' style='color: black;'>{$row['Appliance']}</p>
            </div>
        
                        <div class='col-2'>
                            <h3 class='card-title' style='color: black;'>Power Usage</h3>
                            <p class='card-text--ext' style='color: black;'>{$row['powerusage']}</p>
                        </div>
        
                        <div class='col-2'>
                        <h3 class='card-title' style='color: black;'>Cost To Run</h3>
                        <p class='card-text--ext' style='color: black;'>{$row['Costtorun']}</p>
                    </div>
        
                    <div class='col-3'>
                    <h3 class='card-title' style='color: black;'>How To Save Energy</h3>
                    <p class='card-text--ext' style='color: black;'>{$row['Howtosave']}</p>
                </div>
        
                <div class='col-3'>
                <h3 class='card-title' style='color: black;'>Alternative Appliances</h3>
                <p class='card-text--ext' style='color: black;'>{$row['Alternatives']}</p>
            </div>
              </div>
            </div>
          </div>
        </div>";
      }
    }
    else {
        echo '<div class="testimonial-section testimonial-section--l3 bg-default-3" style="background-color: white; margin-top:-50px; padding-bottom:120px;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-xl-9 col-xxl-7">
              <div class="section-title section-title--l3 text-center" style="margin-bottom: -20px;">
                <h2 class="section-title__heading mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Some Examples of Our Scans</h2>
              </div>
            </div>
          </div>
          <div class="row justify-content-center testimonial-mobile-slider--l3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true">
          <div class="col-lg-12 col-md-12">
            <div class="card card-testimonial--l3" style="background-color:#f3f4f6;">
              <div class="card-body" style="display: flex;">
                <p class="card-description" style="color: black;"></p>
                <div class="col-2">
                <h3 class="card-title" style="color: black;">Appliance</h3>
                <p class="card-text--ext" style="color: black;">Voltas Inverter Split Air Conditioner (1.5 Ton, 3 Star, 183V)</p>
            </div>
        
                        <div class="col-2">
                            <h3 class="card-title" style="color: black;">Power Usage</h3>
                            <p class="card-text--ext" style="color: black;">According to the specifications provided by Voltas for the inverter AC models, a 1.5 ton 3 Star inverter model typically consumes around 980 Watts when active.</p>
                        </div>
        
                        <div class="col-2">
                        <h3 class="card-title" style="color: black;">Cost To Run</h3>
                        <p class="card-text--ext" style="color: black;">Assuming the AC runs for 6 hours a day for 4 months during the peak summer period in Bengaluru, at an electricity rate of approximately ₹9 per kWh for domestic consumers, the annual cost would be: 0.98 kW * 6 hours/day * 120 days * ₹9</p>
                    </div>
        
                    <div class="col-3">
                    <h3 class="card-title" style="color: black;">How To Save Energy</h3>
                    <p class="card-text--ext" style="color: black;">To save energy while using your AC, you can:
                        <br>- Utilize the inverter technology by setting a comfortable temperature, as it regulates power consumption based on the set temperature and room temperature.
                        <br>- Maintain the AC regularly, cleaning or replacing filters to ensure smooth functioning.
                        <br>- Keep windows and doors closed to prevent the cool air from escaping.
                        <br>- Use window shades to block direct sunlight and reduce the cooling load on your AC.
                        <br>- Ensure the room is adequately insulated to prevent loss of cooling.</p>
                </div>
        
                <div class="col-3">
                <h3 class="card-title" style="color: black;">Alternative Appliances</h3>
                <p class="card-text--ext" style="color: black;">An alternative option would be to use a 5 Star rated inverter AC, as they are designed to be even more energy-efficient. A 5 Star rated inverter AC can use around 10-15% less energy than a 3 Star rated inverter AC, potentially saving approximately 100-150 Watts per hour depending on usage and operating conditions.</p>
            </div>
              </div>
            </div>
          </div>
        </div>';
    }






//       $ID = $_SESSION['id'];
//       $fetch = mysqli_query($conn, "SELECT * FROM aihistory WHERE userid = '$ID' ORDER BY scanid DESC");
//       while($row = mysqli_fetch_assoc($fetch)) {
//         echo "
//         <div class='row justify-content-center testimonial-mobile-slider--l3 aos-init aos-animate' data-aos='fade-up' data-aos-duration='500' data-aos-delay='400' data-aos-once='true'>
        
//         <div class='col-2'>
//         <h3 class='card-title' style='color: black;'>Appliance</h3>
//         <p class='card-text--ext' style='color: black;'>{$row['Appliance']}</p>
//     </div>

//                 <div class='col-3'>
//                     <h3 class='card-title' style='color: black;'>Power Usage</h3>
//                     <p class='card-text--ext' style='color: black;'>{$row['powerusage']}</p>
//                 </div>

//                 <div class='col-2'>
//                 <h3 class='card-title' style='color: black;'>Cost To Run</h3>
//                 <p class='card-text--ext' style='color: black;'>{$row['Costtorun']}</p>
//             </div>

//             <div class='col-3'>
//             <h3 class='card-title' style='color: black;'>How To Save Energy</h3>
//             <p class='card-text--ext' style='color: black;'>{$row['Howtosave']}</p>
//         </div>

//         <div class='col-2'>
//         <h3 class='card-title' style='color: black;'>Alternative Appliances</h3>
//         <p class='card-text--ext' style='color: black;'>{$row['Alternatives']}</p>
//     </div>

//         </div>";
//       }
// }

?>





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
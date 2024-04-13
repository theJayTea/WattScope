<?php
include 'connection.php';

if(isset($_SESSION['id'])) {
    header ('location: index.php');
}
else {
    if(isset($_POST['submit'])){
        $namemail = $_POST['namemail'];
        $password = $_POST['password'];
        $fetch = mysqli_query($conn, "SELECT * FROM account WHERE useremail = '$namemail' or username = '$namemail'");
        $row = mysqli_fetch_assoc($fetch);
        if(mysqli_num_rows($fetch) > 0) {
            if($password == $row['password']) {
                $_SESSION['login'] = true;
                $_SESSION['id'] = $row['userid'];
                header ('location: index.php');
            }
            else {
                echo "<div style='background-color:red; height: 30px; width: 100%; z-index: 5;'>Incorrect password<center></center></div>";
            }
        }
        else {
            echo "<div style='background-color:red; height: 30px; width: 100%; z-index: 5;'>User does not exist</center></center></div>";
        }
    }
}


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    Wattscope - Signup
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
    <body>

        
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




          <body data-theme-mode-panel-active="" data-theme="light" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" data-new-gr-c-s-check-loaded="14.1121.0" data-gr-ext-installed="">
            <div class="site-wrapper overflow-hidden ">

            
                            <!-- Clean The Code And Hop in -->
                            <div class="form-block form-block--sign-up bg-default-3 vh-100 position-relative">
                <div class="container position-static vh-100">
                  <div class="row align-items-center justify-content-center position-static vh-100">
                    <div class="col-xl-6 col-lg-5 position-static vh-100 d-none d-lg-block">
                      <div class="form-img position-absolute bg-image" style="background-image: url(../images/account/signupbg.jpg)">
                      </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-xs-10">
                      <div class="section-title section-title--l5 pb-6" style="padding-top: 75px;">
                        <h2 class="section-title__heading aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-once="true">Sign In to Paradigm</h2>
                        <p class="section-title__description aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true"></p>
                      </div>
                      <div class="form-box form-box--sign-up aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500" data-aos-once="true">
                        <div class="contact-form aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-once="true">
                          <form method="post">
                            <div class="form-floating">
                              <input class="form-control" type="text" placeholder="Your Name" id="namemail" name="namemail">
                              <label for="name">Your Name or Email</label>
                            </div>
                            <div class="form-floating">
                              <input class="form-control" type="password" placeholder="Your Password" id="password" name="password">
                              <label for="password">Your Password</label>
                            </div>
                            <div><a href="" class="btn-link--2 ms-2" style="margin-top: -150px; color: grey; font-size: 16px;">Forgot password?</a></div>
                            <button class="btn btn-primary shadow--primary-5 btn--lg-2 rounded-55 text-white mt-4" id="submit" name="submit">Sign Up</button>
                          </form>
                        </div>
                        <div class="buttons mt-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="700" data-aos-once="true">
                          <p class="ms-2">Don't have an account?<a class="btn-link--2 text-electric-violet-2 ms-2" href="./signup.php">Sign Up</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


    <!--/ .Services Area -->
        <!-- Plugin's Scripts -->
        <script src="../templatefiles/plugins/jquery/jquery.min.js"></script>
        <script src="../templatefiles/plugins/jquery/jquery-migrate.min.js"></script>
        <script src="../templatefiles/js/bootstrap.bundle.js"></script>
        <script src="../templatefiles/plugins/fancybox/jquery.fancybox.min.js"></script>
        <script src="../templatefiles/plugins/nice-select/jquery.nice-select.min.js"></script>
        <script src="../templatefiles/plugins/aos/aos.min.js"></script>
        <script src="../templatefiles/plugins/counter-up/jquery.counterup.min.js"></script>
        <script src="../templatefiles/plugins/counter-up/waypoints.min.js"></script>
        <script src="../templatefiles/plugins/slick/slick.min.js"></script>
        <script src="../templatefiles/plugins/skill-bar/skill.bars.jquery.js"></script>
        <script src="../templatefiles/plugins/isotope/isotope.pkgd.min.js"></script>
        <!--<script src="./templatefiles/plugins/theme-mode-switcher/gr-theme-mode-switcher.js"></script>-->
        <!-- Activation Script -->
        <script src="../templatefiles/js/menu.js"></script>
        <script src="../templatefiles/js/custom.js"></script>
    </body>
</html>
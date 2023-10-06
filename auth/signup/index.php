<?php 
  session_start();
  require_once(__DIR__ . '/../../config/dbConfig.php');
  error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic metas
  ======================================== -->
  <meta charset="utf-8" />
  <title>SignUp </title>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="" />

  <!-- Mobile specific metas
    ======================================== -->
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Icon fonts
  ======================================== -->
  <link rel="stylesheet" href="../../fonts/remixicon.css" />

  <!-- links for favicon
    ======================================== -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon/favicon.ico" />

  <!-- CSS
  ======================================== -->
  <link rel="stylesheet" href="../../css/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="../../css/vendor/slick.css">
  <link rel="stylesheet" href="../../css/vendor/slick-theme.css">

  <!-- Style css -->
  <link rel="stylesheet" href="../../css/style.css" />
  <style>
    .hidden {
      display: none !important;
    }  
  </style>
</head>

<body>
  <!-- Start Preloader -->
  <div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
      <div class="animation-preloader">
        <div class="icon"><img src="../../images/logo-preloader.png" alt="logo" class="m-auto d-block"> <span></span>
        </div>
      </div>
    </div>
  </div>
  <!-- End Preloader -->

  <!-- start header area -->
  <header class="ib-header header-default header-fixed header--sticky fluid-header">
    <div class="header-inner d-flex align-items-center justify-content-between">
      <div class="header-left d-flex align-items-center">
        <div class="logo-wrapper">
          <a href="../../index.html" class="logo logo-light"><img src="../../images/logo-white.png" alt="brand"> </a>
          <a href="../../index.html" class="logo logo-dark"><img src="../../images/logo-dark.png" alt="brand"> </a>
        </div>
        <!-- End .logo-wrapper -->

        <div class="mainmenu-wrapper">
          <nav id="sideNav" class="mainmenu-nav d-none d-xl-block">
            <!-- Start Mainmanu Nav -->
            <ul class="mainmenu">
            <li>
              <label class="theme-switcher-label d-flex" for="theme-switcher">
                <input type="checkbox" class="theme-switcher" id="theme-switcher">
                <div class="switch-handle">
                  <i class="ri-sun-line light-text"></i>
                  <i class="ri-moon-line dark-text"></i>
                </div>
              </label>
            </li>
          <!-- End Dark & Light Swither -->
        </ul>

      </div>
      <!-- End .header-left -->
    </div>
  </header>
  <!-- End header area -->

  <!-- End mobile menu area -->

  <!-- Start SignUp area -->
  <section class="pt-120 pb-90">
    <div class="container">
      <div class="mb-6 sign-wrapeer">
        <h2 class="mb-2">Sigup To OpenSynth</h2>
        <p class="medium">A MarketPlace for Free and OpenScience projects.</p>
      </div>
      <div class="row ali">
        <div class="col-lg-6 mb-6">
          <img class="w-100 h-100 rounded" src="../../images/signup/1.jpg" alt="nft image">
        </div>
        <div class="col-xl-6 mb-6">
          <div class="signup-wrapper signup d-flex justify-content-center flex-column">
            <form action="#" method="POST" >
              <div class="row">

                <div class="col-md-12 mb-4">
                  <div class="field-box">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="text" placeholder="mail@domain.com" required>
                  
                  </div>
                  <p class="hidden email-error" style="color: red; margin-top: 10px; margin-bottom: 3px;font-size: 16px;">Invalid email format</p>

                </div>

                <div class="col-md-6 mb-4">
                  <div class="field-box">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" name="name" type="text" placeholder="Name" required>
                  </div>
                </div>
                <!-- End .col -->

                <div class="col-md-6 mb-4">
                  <div class="field-box">
                    <label for="username" class="form-label">Username</label>
                    <input id="username" name="username" type="text" placeholder="Username" required>
                  </div>
                </div>
                <!-- End .col -->

                <div class="col-md-6 mb-4">
                  <div class="field-box">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password" required>
                  </div>
                </div>
                <!-- End .col -->

                <div class="col-md-6 mb-4">
                  <div class="field-box">
                    <label for="re-password" class="form-label">Re Password</label>
                    <input id="re-password" name="confirm-password" type="password" placeholder="Password" required>
                  </div>
                </div>
                <!-- End .col -->

                <div class="col-md-12 mb-5">
                  <div class="field-box">
                    <label class="checkbox">
                      <input class="form-check-input me-1" type="checkbox" value="" required>
                      I have read terms and conditions and all others policy.
                    </label>
                  </div>
                </div>
                <!-- End .col -->

                <div class="col-md-12 mb-4">
                  <div class="field-box">
                    <button name="submit" class="btn btn-gradient w-100 justify-content-center btn-medium {
                        " type="submit"><span>Sign
                        Up</span></button>
                  </div>
                </div>
                <!-- End .col -->
              </div>
            </form>


          </div>

        </div>
        <!-- End .col -->
      </div>
      <!-- End .row -->
    </div>
    <!-- End .container -->
  </section>
  <!-- End SignUp area -->

  <!-- Start Footer -->
  <footer class="footer-wrapper">
    <div class="footer-inner pt-120 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6 mb-8">
            <div class="footer-widget first-block">
              <div class="mb-4">
                <a href="index.html" class="logo-light"><img src="../../images/logo-white.png" alt="brand"></a>
                <a href="index.html" class="logo logo-dark"><img src="../../images/logo-dark.png" alt="brand"> </a>
              </div>
              <p class="mb-5">OpenSynth is the best NFT Marketplace Template because the we have selected the most active and
                Creative Research.</p>
              <!-- <div class="social">
                <a class="icon-facebook" href="#"><i class="ri-facebook-line"></i></a>
                <a class="icon-twitter" href="#"><i class="ri-twitter-line"></i></a>
                <a class="icon-instagram" href="#"><i class="ri-instagram-line"></i></a>
                <a class="icon-linkedin" href="#"><i class="ri-linkedin-line"></i></a>
              </div> -->
            </div>
          </div>
          <!-- End .col -->

          <div class="col-lg-2 col-md-6 mb-8">
            <div class="footer-widget">
              <h4>Marketplace</h4>
              <ul class="footer-list-widget">
                <li><a href="authors.html">Authors</a></li>
                <li><a href="author-profile.html">Author Profile</a></li>
                <li><a href="create.html">Create</a></li>
                <li><a href="explore-carousel.html">Explore</a></li>
                <li><a href="wallet.html">Wallet Connect</a></li>
              </ul>
            </div>
          </div>
          <!-- End .col -->

          <div class="col-lg-2 col-md-6 mb-8">
            <div class="footer-widget">
              <h4>Community</h4>
              <ul class="footer-list-widget">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="activity.html">Activity</a></li>
                <li><a href="popular-collections-2.html">Collections</a></li>
                <li><a href="signin.html">Signin</a></li>
                <li><a href="signup.html">SignUp</a></li>
              </ul>
            </div>
          </div>
          <!-- End .col -->

          <div class="col-lg-3 col-md-6 mb-8">
            <div class="footer-widget">
              <h4>join newsletter</h4>
              <p>Signup for our newsletter to get the latest news in your inbox.</p>
              <form action="#">
                <div class="subscribe-mail">
                  <input type="text" name="email" id="subscribe-email" placeholder="Email Address">
                  <button class="btn btn-small btn-gradient"><span><i class="ri-send-plane-line"></i></span></button>
                </div>
              </form>
            </div>
          </div>
          <!-- End .col -->
        </div>
      </div>
      <!-- End .container -->
    </div>
  </footer>
  <!-- End Footer -->


  <!-- JS ============================================ -->
  <script src="../../js/vendor/jquery.js"></script>
  <script src="../../js/vendor/jquery.nice-select.min.js"></script>
  <script src="../../js/vendor/modernizer.min.js"></script>
  <script src="../../js/vendor/slick.min.js"></script>
  <script src="../../js/vendor/bootstrap.min.js"></script>
  <script src="../../js/vendor/waypoint.js"></script>
  <script src="../../js/vendor/js.cookie.js"></script>
  <script src="../../js/vendor/count-down.js"></script>
  <script src="../../js/vendor/counter-up.js"></script>
  <script src="../../js/vendor/isotop.js"></script>
  <script src="../../js/vendor/imageloaded.js"></script>
  <script src="../../js/vendor/jquery.custom-file-input.js"></script>

  <!-- main JS -->
  <script src="../../js/main.js"></script>
  <script>

  </script>
</body>
</html>
<?php 
  if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];   

    $query = "INSERT INTO Users(`Username`, `Email`, `PasswordHash`, `TwoFactorEnabled`) VALUES ('$username', '$email', '$password', '0')";

    $res = mysqli_query($conn, $query);
    if (!$res) {
      die("Insert failed: " . mysqli_error($conn));
    }
    
  }

?>
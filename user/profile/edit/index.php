<?php
session_start();
include_once("../../../config/dbConfig.php");
if (!$_SESSION['userId'])
  echo "<script> window.location.href='../../signin'</script>";

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Basic metas
  ======================================== -->
  <meta charset="utf-8" />
  <title>Author Profile</title>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="" />

  <!-- Mobile specific metas
    ======================================== -->
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Icon fonts
  ======================================== -->
  <link rel="stylesheet" href="../../../fonts/remixicon.css" />

  <!-- links for favicon
    ======================================== -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../../images/favicon/favicon.ico" />

  <!-- CSS
  ======================================== -->
  <link rel="stylesheet" href="../../../css/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="../../../css/vendor/slick.css">
  <link rel="stylesheet" href="../../../css/vendor/slick-theme.css">

  <!-- Style css -->
  <link rel="stylesheet" href="../../../css/style.css" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <style>
    .edit-tab {
      background-color: #
    }
  </style>
</head>

<body>
  <!-- Start Preloader -->
  <div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
      <div class="animation-preloader">
        <div class="icon"><img src="../../../images/logo-preloader.png" alt="logo" class="m-auto d-block"> <span></span>
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
          <a href="../../" class="logo logo-light"><img src="../../../images/logo-white.png" alt="brand"> </a>
          <a href="../../" class="logo logo-dark"><img src="../../../images/logo-dark.png" alt="brand"> </a>
        </div>
        <!-- End .logo-wrapper -->

        <div class="mainmenu-wrapper">
          <nav id="sideNav" class="mainmenu-nav d-none d-xl-block">
            <!-- Start Mainmanu Nav -->
            <ul class="mainmenu">
              <li class="">
                <a class="active" href="../../../">Home</a>
              </li>

              <li class=" has-menu-child-item">
                <!-- <ul class="submenu">
                  <li>
                    <a href="explore-filter-sidebar.html">Explore Filter Sidebar</a>
                  </li>
                </ul> -->
              </li>
            
            </ul>
            <!-- End Mainmanu Nav -->
          </nav>
        </div>
      </div>
      <!-- End .header-left -->

      <div class="header-right d-flex align-items-center">
        <ul class="header-right-inner">
          <!-- <li class=" d-none d-lg-block">
            <form action="#" class="search-bar">
              <input type="text" name="search" placeholder="Collection, item or user" id="search">
              <button class="search-btn" type="submit"> <i class="ri-search-line"></i></button>
            </form>
          </li> -->
          <!-- End .search-bar -->

          <li class="setting-option d-block  d-lg-none ">
            <div class="icon-box search-mobile-icon">
              <button><i class="ri-search-line"></i></button>
            </div>
            <form id="header-search-1" action="#" method="GET" class="large-mobile-blog-search search-bar">
              <input type="text" name="search" placeholder="Collection, item or user" id="search_2">
              <button class="search-btn" type="submit"> <i class="ri-search-line"></i></button>
            </form>
          </li>
          <!-- End .search-mobile-icon -->


          <!-- End .wallet-button -->

          <li class="setting-option mobile-menu-bar d-block d-xl-none">
            <button class="hamberger-button">
              <i class="ri-menu-2-fill"></i>
            </button>
          </li>
          <!-- End .mobile-menu-bar -->


          <?php 
            if(isset($_SESSION['userId'])) {

          ?>
            <li class="avatar-info"> <a href="#"><img src="../../../images/avatar/user.png" alt="user avatar"></a>
              <ul class="submenu">
                <li><a href="../"><i class="ri-user-line"></i> Profile</a></li>
                <li><a href="../../../projects/host"><i class="ri-edit-line"></i> Host New Project</a></li>
                <li><a href="../../../leaderboard"><i class="ri-layout-grid-line"></i>Leaderboard</a></li>
                <li><a href="../../../auth/signout/"><i class="ri-logout-box-r-line"></i>Sign Out</a></li>
              </ul>
            </li>
          <?php 
            }?>

          <!-- End .avatar-info -->

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

  <!-- Start mobile menu area -->
  <div class="popup-mobile-menu">
    <div class="inner">
      <div class="header-top">
        <div class="logo logo-custom-css">
          <a href="index.html" class="logo logo-light"><img src="../../../images/logo-white.png" alt="brand"> </a>
          <a href="index.html" class="logo logo-dark"><img src="../../../images/logo-dark.png" alt="brand"> </a>
        </div>
        <div class="close-menu">
          <button class="close-button">
            <i class="ri-close-fill"></i>
          </button>
        </div>
      </div>
      <nav>
        <!-- Start Mainmanu Nav -->
        <ul class="mainmenu">
          <li class="">
            <a class="active" href="../../../">Home</a>
          </li>

          <li class="">
         
          </li>

          
        </ul>
        <!-- End Mainmanu Nav -->
      </nav>
    </div>
  </div>
  <!-- End mobile menu area -->

  <!-- Start banner area -->
  <section class="inner-page-banner bg-2 bg-image">
    <div class="container">
      <div class="inner text-center">
        <h1 class="title">User Profile</h1>
        <nav class="mt-4">
          <ol class="breadcrumb justify-content-center">
            <li class=""><a href="">Home </a></li>
            <li class=""><a href="">Pages </a></li>
            <li class="active" aria-current="page">Author</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End .container -->
  </section>
  <!-- End banner area -->

  <!-- Start author profile area -->
  <section class="pt-120 pb-90">
    <div class="container">
      <div class="row">
        <div class="col-xxl-3 col-xl-4 col-lg-4 mb-6">
          <div class="single-author profile">
            <?php
            $userId = $_SESSION['userId'];

            $userDataQuery = "SELECT * FROM `Users` WHERE UserID = '$userId'";
            $userInfoQuery = "SELECT * FROM `UserData` WHERE UserID = '$userId'";

            $userData = mysqli_fetch_assoc(mysqli_query($conn, $userDataQuery));
            $userInfo = mysqli_fetch_assoc(mysqli_query($conn, $userInfoQuery));
            // print_r($userData);
            ?>
            <div class="thumb">
              <img src="https://source.unsplash.com/270x185/" alt="author cover photo">
            </div>
            <!-- End .thumb -->
            <div class="content">
              <a href="#" class="author-thumb">
                <img src="https://source.unsplash.com/300x300/" alt="author photo">
              </a>
              <p class="mt-0">@
                <?php echo $userData['Username'] ?>
              </p>
              <h4 class="title"><a href="#">
                  <?php echo $userInfo['FullName'] ?>
                </a></h4>
              <p><a href="#">
                  <?php echo $userData['Email'] ?>
                </a></p>
              <div class="social size-small justify-content-center mb-4">
                <a href="#"><i class="ri-facebook-line"></i></a>
                <a href="#"><i class="ri-twitter-line"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-linkedin-line"></i></a>
              </div>
              <button class="btn btn-small btn-outline">
                <span>Follow</span>
              </button>
              <!-- <button style="border: 0px solid white; border-radius: 50%" class="btn btn-small" style="width: 40px; height: 40px;">
    <a href="edit">
    
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" style="fill: white;">
            <path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/>
        </svg>
    </a>
</button> -->

            </div>
          </div>
        </div>
        <!-- End .col -->
        <div class="col-xxl-9 col-xl-8 col-lg-8">
          <div class="author-profile-wrapper">
          <form action="" method='POST'>
            <div id="on-sale" class="explore-style-one mb-3">
              <div class="row">
                <!-- Email -->
                <div class="col-md-4 mb-4">
                  <div class="field-box">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="text" value='<?php echo $userData["Email"] ?>' required>
                  </div>
                </div>

                <!-- Profile Info -->
             

                <!-- Preferred Job -->
                <div class="col-md-4 mb-4">
                  <div class="field-box">
                    <label for="preferredJob" class="form-label">UserName</label>
                    <input id="preferredJob" name="username" type="text" value='<?php echo $userData["Username"] ?>'
                      required>
                  </div>
                </div>
              </div>
              <!-- second row -->
              <br>
              <div class="row">
                <!-- Email -->


                <!-- Profile Info -->
                <div class="col-md-4 mb-4">
                  <div class="field-box">
                    <label for="profileInfo" class="form-label">Full Name</label>
                    <input id="profileInfo" name="fullName" type="text" value='<?php echo $userInfo["FullName"] ?>'
                      required>
                  </div>
                </div>

                <!-- Preferred Job -->
                <div class="col-md-4 mb-4">
                  <div class="field-box">
                    <label for="preferredJob" class="form-label">Preferred Job</label>
                    <input id="preferredJob" name="preferredJob" type="text"
                      value='<?php echo $userInfo["PreferedJob"] ?>' required>
                  </div>
                </div>
              </div>

              <div class='row'>
                <div class="col-md-12 mb-4">
                  <div class="field-box">
                    <label for="additionalComments" class="form-label">Profile Bio</label>
                    <textarea id="additionalComments" name="profileInfo" rows="4"
                      required><?php echo $userInfo["ProfileInfo"] ?></textarea>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
    <button type="submit"  name='submit' class="btn btn-danger">Save</button>
  </div></form>


    <?php
// Include your database connection code here
// For example, you can use mysqli_connect() to connect to your database

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Retrieve data from POST
    $username = $_POST["username"];
    $email = $_POST["email"];
    $fullName = $_POST["fullName"];
    $profileInfo = $_POST["profileInfo"];
    $preferredJob = $_POST["preferredJob"];

    // Update the Users table (No prepared statement)
    $updateUsersQuery = "UPDATE Users SET  Email = '$email',Username='$username' WHERE UserID = '".$_SESSION['userId']."'";
    mysqli_query($conn, $updateUsersQuery);

    if (mysqli_affected_rows($conn) > 0) {
        echo "Email updated successfully in Users table.<br>";
    } else {
        echo "No records updated in Users table.<br>";
    }

    // Update the UserData table (No prepared statement)
    // $updateUserDataQuery = "INSERT INTO UserData (FullName, ProfileInfo, PreferedJob) VALUES ('$fullName', '$profileInfo', '$preferredJob') ON DUPLICATE KEY UPDATE FullName = VALUES(FullName), ProfileInfo = VALUES(ProfileInfo), PreferedJob = VALUES(PreferedJob)";
    $updateUserDataQuery = "UPDATE UserData SET FullName = '$fullName', ProfileInfo = '$profileInfo', PreferedJob = '$preferredJob' WHERE UserID = '".$_SESSION['userId']."'";
    mysqli_query($conn, $updateUserDataQuery);

    if (mysqli_affected_rows($conn) > 0) {
        echo "UserData updated successfully.<br>";
    } else {
        echo "No records updated in UserData table.<br>";
    }
    echo '<script>
    // Set location.href to the desired URL
    location.href = "../"; // Replace with your desired URL
</script>';
    // Close database connection
    // mysqli_close($connection);
}
?>


  
             

            </div>
          </div>
          <!-- End .col -->
        </div>
      </div>
  </section>
  <!-- End author profile area -->

  <!-- Start Footer -->
  <footer class="footer-wrapper">
    <div class="footer-inner pt-120 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6 mb-8">
            <div class="footer-widget first-block">
              <div class="mb-4">
                <a href="index.html" class="logo-light"><img src="../../../images/logo-white.png" alt="brand"></a>
                <a href="index.html" class="logo logo-dark"><img src="../../../images/logo-dark.png" alt="brand"> </a>
              </div>
              <p class="mb-5">Where innovation meets collaboration, join us in shaping the future of open science—one dynamic project, one dedicated researcher, and one groundbreaking discovery at a time.</p>
              <div class="social">
                <a class="icon-facebook" href="#"><i class="ri-facebook-line"></i></a>
                <a class="icon-twitter" href="#"><i class="ri-twitter-line"></i></a>
                <a class="icon-instagram" href="#"><i class="ri-instagram-line"></i></a>
                <a class="icon-linkedin" href="#"><i class="ri-linkedin-line"></i></a>
              </div>
            </div>
          </div>
          <!-- End .col -->

          <div class="col-lg-2 col-md-6 mb-8">

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
  <script src="../../../js/vendor/jquery.js"></script>
  <script src="../../../js/vendor/jquery.nice-select.min.js"></script>
  <script src="../../../js/vendor/modernizer.min.js"></script>
  <script src="../../../js/vendor/slick.min.js"></script>
  <script src="../../../js/vendor/bootstrap.min.js"></script>
  <script src="../../../js/vendor/waypoint.js"></script>
  <script src="../../../js/vendor/js.cookie.js"></script>
  <script src="../../../js/vendor/count-down.js"></script>
  <script src="../../../js/vendor/counter-up.js"></script>
  <script src="../../../js/vendor/isotop.js"></script>
  <script src="../../../js/vendor/imageloaded.js"></script>
  <script src="../../../js/vendor/jquery.custom-file-input.js"></script>

  <!-- main JS -->
  <script src="../../../js/main.js"></script>
</body>

</html>
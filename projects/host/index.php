<?php 
  session_start();
  include_once("../../config/dbConfig.php");
  if(!isset($_SESSION['userId'])) 
    echo "<script> window.location.href='../../auth/signin'</script>";
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic metas
  ======================================== -->
  <meta charset="utf-8" />
  <title>Host Projects</title>
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
          <a href="../../" class="logo logo-light"><img src="../../images/logo-white.png" alt="brand"> </a>
          <a href="../../" class="logo logo-dark"><img src="../../images/logo-dark.png" alt="brand"> </a>
        </div>
        <!-- End .logo-wrapper -->

        <div class="mainmenu-wrapper">
          <nav id="sideNav" class="mainmenu-nav d-none d-xl-block">
            <!-- Start Mainmanu Nav -->
            <ul class="mainmenu">
              <li class="">
                <a class="active" href="../../">Home</a>
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
          <?php 
            if(!isset($_SESSION['userId'])) {

          ?>
            <li class="wallet-button"> 
              <a href="auth/signin" class="btn btn-gradient btn-small">
                <span><i class="ri-wallet-3-line"></i>Login</span>
              </a>
            </li>
            <li class="wallet-button"> 
              <a href="auth/signup" class="btn btn-gradient btn-small">
                <span><i class="ri-wallet-3-line"></i>Signup</span>
              </a>
            </li>
          <?php 
            }
          ?>
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
            <li class="avatar-info"> <a href="#"><img src="../../images/avatar/user.png" alt="user avatar"></a>
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
          <a href="index.html" class="logo logo-light"><img src="../../images/logo-white.png" alt="brand"> </a>
          <a href="index.html" class="logo logo-dark"><img src="../../images/logo-dark.png" alt="brand"> </a>
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
            <a class="active" href="index-2.html">Home</a>
          </li>

          <li class="">
            <a href="#">Explore</a>
          </li>

          <li><a href="activity.html">Activity</a></li>

          <li><a href="contact.html">Contact</a></li>
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
        <h1 class="title">Create Item</h1>
        <nav class="mt-4">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End .container -->
  </section>
  <!-- End banner area -->

  <!-- Start create item area -->
  <section class="pt-120 pb-90">
    <div class="container">
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="create-item-wrapper">
          <div class="row">
            <div class="col-lg-4">
              <!-- file upload area -->
              <div class="upload-area">

                <div class="upload-formate mb-6">
                  <h5 class="title mb-1">
                    Upload Project Display Picture
                  </h5>
                  <p class="formate">
                    Drag or choose your file to upload
                  </p>
                </div>

                <div class="brows-file-wrapper">
                  <!-- actual upload which is hidden -->
                  <input name="file" id="file" type="file" class="inputfile"
                    data-multiple-caption="{count} files selected" multiple />
                  <!-- our custom upload button -->
                  <label for="file" title="No File Choosen">
                    <i class="ri-upload-cloud-line"></i>
                    <span class="text-center mb-2">Choose a File</span>
                    <span class="file-type text-center mt--10">PNG, GIF, WEBP, MP4 or MP3. <br> Max 10Mb.</span>
                  </label>
                </div>
              </div>
              <!-- end upoad file area -->

              <!-- <div class="mt-12 d-none d-lg-block">
                <h5 class="mb-1"> Note: </h5>
                <span> Service fee : <strong>1.5%</strong> </span> <br>
                <span> You will receive : <strong>15.00 ETH $45000</strong></span>
              </div> -->

            </div>

            <div class="col-lg-8">

              <div class="form-field-wrapper ">
                <div class="row">
                  <div class="col-md-12 mb-4">
                    <div class="field-box">
                      <label for="name" class="form-label">Project Title</label>
                      <input id="name" name="projectName" type="text" placeholder="e. g. `Syntheia corp`">
                    </div>
                  </div>

                  <div class="col-md-12 mb-4">
                    <div class="field-box">
                      <label for="discription" class="form-label">Discription</label>
                      <textarea id="discription" name="projectDesc" rows="3" placeholder="e. g. “Syntheia corp is...”"></textarea>
                    </div>
                  </div>

                  <div class="col-md-12 mb-4">
                    <div class="field-box">
                      <label for="price" class="form-label">Visibility</label>
                      <select id="price" name="visibility">
                        <option selected value="1">Public</option>
                        <option value="0">Private</option>
                        <option value="2">Invite Only</option>
                      </select>
                    </div>

                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="field-box">
                      <label for="royality" class="form-label">Project URL(Optional)</label>
                      <input type="text" name="projectUrl" id="royality" placeholder="e. g. `https://syntheia.org">
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                  <div class="field-box">
                      <label for="price" class="form-label">Project Type</label>
                      <select id="price" name="projectType">
                        <option selected value="software">Software</option>
                        <option value="hardware">hardware</option>
                        <option value="other">Other</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- End .row -->
              </div>
              <!--  -->
            </div>
          </div>
          <!-- End .row -->
        </div>
        <!-- End .create-item-wrapper -->

        <div class="row">
          <div class="col-md-12">
            <div class="d-flex-between upload-btn-wrapper flex-wrap">
              <div class="d-flex-center ">
                <button class="btn btn-gradient btn-medium mr-3"><span>Cancel</span></button>
                <button class="btn btn-outline btn-medium"><span>Preview</span></button>
              </div>
              <style>
                .hidden {
                  display: none;
                }
              </style>
              <div class="input-box" style="display: flex; flex-direction: row;align-items: center">
                <p style="color: green; margin-bottom: 5px;margin-right: 20px" class="hidden hosting-res">Project Hosted successfully, Redirecting!</p>
                <button name="submit" type="submit" class="btn btn-gradient btn-medium justify-content-center"><span>Host project</span></button>
              </div>
            </div>
          </div>
        </div>
        <!-- ENd .row -->
      </form>
    </div>
  </section>
  <!-- End create item area -->

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
</body>

<?php 
  if(isset($_POST['submit'])) {
    $title = $_POST['projectName'];
    $projectDesc = $_POST['projectDesc'];
    $visibility = $_POST['visibility'];
    $projectType = $_POST['projectType'];

    $target_dir = "Dps/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    //     echo basename( $_FILES["file"]["name"]);
    // }
    $userId = $_SESSION['userId'];
    $query = "INSERT INTO `Projects`(`Title`, `Description`, `CreatorUserID`,`IsPublic`, `ProjectType`) VALUES ('$title','$projectDesc','$userId', '$visibility', '$projectType')";
    $result = mysqli_query($conn, $query);
    if($result) {
      $lastInsertId = mysqli_insert_id($conn);
      
      echo "<script> window.location.href='../view/?projectID=$lastInsertId'</script>";
    }
  }
?>
</html>
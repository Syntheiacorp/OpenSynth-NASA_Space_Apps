<?php
  session_start();
  include_once('config/dbConfig.php');
  
  // The following is the session used to display and hide login/register & user profile accordingly if the user is signed in
  // $_SESSION['userId'] = 100; 
  // session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic metas
    ======================================== -->
  <meta charset="utf-8" />
  <title>Home</title>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="" />

  <!-- Mobile specific metas
    ======================================== -->
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Icon fonts
  ======================================== -->
  <link rel="stylesheet" href="fonts/remixicon.css" />

  <!-- links for favicon
    ======================================== -->
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon.ico" />

  <!-- CSS
  ======================================== -->
  <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="css/vendor/slick.css">
  <link rel="stylesheet" href="css/vendor/slick-theme.css">
  <link rel="stylesheet" href="css/vendor/aos.css">

  <!-- Style css -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Start Preloader -->
  <div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
      <div class="animation-preloader">
        <div class="icon"><img src="#" alt="logo" class="m-auto d-block"> <span></span>
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
           <a href="" class="logo logo-light"><img src="images/logo-white.png" alt="brand"> </a> 
          <a href="" class="logo logo-dark"><img src="images/logo-dark.png" alt="brand"> </a> 
        </div>
        <!-- End .logo-wrapper -->

        <div class="mainmenu-wrapper">
          <nav id="sideNav" class="mainmenu-nav d-none d-xl-block">
            <!-- Start Mainmanu Nav -->
            <ul class="mainmenu">
              <li class="">
                <a class="active" href="#">Home</a>
              </li>
              <li><a href="#hofSection">Hall of Fame</a></li>
              <li><a href="leaderboard">Leaderboard</a></li>
              <li class=" has-menu-child-item">
                <a href="#explore-section">Explore</a>
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
            <li class="avatar-info"> <a href="#"><img src="images/avatar/user.png" alt="user avatar"></a>
              <ul class="submenu">
                <li><a href="user/profile"><i class="ri-user-line"></i> Profile</a></li>
                <li><a href="projects/host"><i class="ri-edit-line"></i> Host New Project</a></li>
                <li><a href="leaderboard"><i class="ri-layout-grid-line"></i>Leaderboard</a></li>
                <li><a href="auth/signout/"><i class="ri-logout-box-r-line"></i>Sign Out</a></li>
              </ul>
            </li>
          <?php 
            }
          ?>
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
          <a href="index.html" class="logo logo-light"><img src="images/logo-white.png" alt="brand"> </a>
          <a href="index.html" class="logo logo-dark"><img src="images/logo-dark.png" alt="brand"> </a>
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

          <li><a href="hofSection">HoF</a></li>

          <li><a href="contact.html">Contact</a></li>
        </ul>
        <!-- End Mainmanu Nav -->
      </nav>
    </div>
  </div>
  <!-- End mobile menu area -->

  <!-- Start banner area -->
  <section class="hero-banner-style bg-1 bg-image top-section-gap hero-banner-style-one">
    <div class="hero-banner_inner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xxl-8 col-xl-7 col-lg-7">
            <div class="banner-content">
            <h1 class="mb-6 title" data-aos="fade-up">Where Innovation <br>
                <span>Meets Collaboration</span>
              </h1>
              <p data-aos="fade-up" data-aos-delay="100">Explore the future of technology  <br>
                in our open source marketplace</p>
              <div class="group-btn mt-8" data-aos="fade-up" data-aos-delay="200">
                <a href="projects" class="btn btn-gradient"><span><i class="ri-rocket-line"></i>
                    Explore</span></a>
                <a href="projects/host" class="btn btn-outline"><span><i class="ri-add-circle-line"></i> Host</span></a>
              </div>
              <img src="images/shape/2.png" alt="shape" class="shape shape-2 dark rotate-360">
              <img src="images/shape/3.png" alt="shape" class="shape shape-3 dark rotate-360">
              <img src="images/shape/2-light.png" alt="shape" class="shape shape-2 light rotate-360">
              <img src="images/shape/3-light.png" alt="shape" class="shape shape-3 light rotate-360">
            </div>
            <!-- End banner-content -->

          </div>
          <!-- End .col -->
          <div class="col-xxl-4 col-xl-5 col-lg-5">
            <div class="explore-style-two">
              <div class="slider slider-activation-banner-3">
                <a href="product-details.html" class="thumb">
                  <img src="images/explore/hero/1.jpg" alt="explore-item">
                </a>
                <a href="product-details.html" class="thumb">
                  <img src="images/explore/hero/2.jpg" alt="explore-item">
                </a>
                <a href="product-details.html" class="thumb">
                  <img src="images/explore/hero/4.jpg" alt="explore-item">
                </a>
              </div>
              <!-- End .slider -->
              <span class="sticker">Featured Projects</span>
              
              <!-- End .explore-content -->
            </div>
          </div>
          <!-- End .col -->
        </div>
      </div>
      <!-- End .container -->
    </div>
  </section>
  <!-- End banner area -->

  <!-- Start nft gallery area -->
   <!-- Start Hall of fame -->
   <section id="hofSection" class="section-bg-separation-2 ptb-120">
    <div class="container">
      <div class="d-flex-between">
        <div class="section-title">
          <span class="subtitle">Collaborators</span>
          <h2>Hall of fame</h2>
        </div>
        <!-- End .section-title -->
        <div class="text-large">
          <a href="leaderboard/">See Leader board</a>
        </div>
      </div>
      <!-- End .d-flex-between -->

      <div class="slider top-seller-activation-1 slick-gutter-15 slick-arrow-between ">
        <?php
          $query = "SELECT * FROM `UserData` ORDER BY Karma LIMIT 10";          ;
          $hofUsers = mysqli_query($conn, $query);
          // print_r(mysqli_fetch_assoc($hofUsers));
            while ($row = mysqli_fetch_assoc($hofUsers)){  
          ?> 
          <div class="top-seller-style-one">
            <a href="user/visit/?userID=<?php echo $row['UserID']?>" class="thumb mb-2">
              <img src="images/avatar/user.png" alt="Hall of fame">
              <i class="ri-check-line"></i>
            </a>
            <h4 class="title pb-1"><a href="author-profile.html"><?php echo $row['FullName']?></a></h4>
            <span class="price"><?php echo $row['Karma']?> Karma</span>
          </div>
          <?php
        }
        ?>
        <!-- End .col -->  

      </div>
    </div>
    <!-- End .container -->
  </section>
  <!-- End Hall of fame -->
  <!-- End nft gallery area -->

  <!-- Start Explore -->
  <section id="explore-section" class="pt-120 pb-90 masonary-wrapper-activation">
    <div class="container">
      <div class="d-flex-between flex-wrap">
        <div class="section-title">
          <span class="subtitle">Trending Projects</span>
          <h2>Explore</h2>
        </div>
        <!-- End .section-title -->

        <div
          class="button-group default-tab-list isotop-filter flex-wrap filters-button-group d-flex justify-content-start justify-content-lg-end mb-6 ">
          <button data-filter="*" class="is-checked"><a href="projects"><span class="filter-text">All Projects</span></a></button>
          <!-- <button data-filter=".cat--1"><span class="filter-text">Art</span></button>
          <button data-filter=".cat--2"><span class="filter-text">Collectibles</span></button>
          <button data-filter=".cat--3"><span class="filter-text">Virtual Worlds</span></button>
          <button data-filter=".cat--4"><span class="filter-text">Tranding Cards</span></button> -->
        </div>
        <!-- End isotop-filter -->
      </div>

      <div class="grid-filter-wrapper mesonry-list">
        <div class="resizer"></div>

        <!-- Project Listing tab start -->
        <?php 
                
                $query = "SELECT * FROM `Projects`";
                
                $data = mysqli_query($conn, $query);
                for($i=0; $i<8; $i++) {
                  $row = mysqli_fetch_assoc($data);
              ?>
        <div class="grid-item cat--4">
        <div class="explore-style-one">
                    <div class="thumb">
                      <a href="product-details.html"
                        ><img
                          height="270"
                          width="270"
                          src="<?php echo $row['DisplayPicture']?>"
                          alt="nft live auction thumbnail"
                      /></a>
                      <button class="reaction-btn">
                        <i class="ri-heart-fill"></i><span><?php echo $row['UpVotes']?></span>
                      </button>
                      <!-- End .reaction-count -->
                    </div>
                    <!-- End .thumb -->
                    <div class="content">
                      <div class="header d-flex-between pt-4 pb-3">
                        <h3 class="title">
                          <a href="product-details.html"><?php echo $row['Title']?></a>
                        </h3>
                       
                      </div>
                      <!-- .header -->
                      <div class="product-share-wrapper">
                        <div class="profile-share d-flex-center">
                          <a
                            href="authors.html"
                            class="avatar"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Banuri Bari"
                            ><img
                              src="images/explore/avatar/1.png"
                              alt="Nft_Profile"
                          /></a>
                          <a
                            href="authors.html"
                            class="avatar"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Mark Keni"
                            ><img
                              src="images/explore/avatar/2.png"
                              alt="Nft_Profile"
                          /></a>
                          <a
                            href="authors.html"
                            class="avatar"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="Diago Smith"
                            ><img
                              src="images/explore/avatar/3.png"
                              alt="Nft_Profile"
                          /></a>
                          <?php 
                            $projectID = $row['ProjectID'];
                            $projectParticipantsQuery = "SELECT * FROM `ProjectParticipants` WHERE ProjectID = '$projectID'";
                            $participantsList = mysqli_query($conn, $projectParticipantsQuery);

                          ?>
                          <a class="more-author-text" href="#" tabindex="0"
                            ><?php echo mysqli_num_rows($participantsList)?>+ People are contributing</a
                          >
                        </div>
                      </div>
                      <!-- End product-share-wrapper -->
                      <?php 
                        $id = $row['CreatorUserID'];
                        $ownerQuery = "SELECT FullName FROM `UserData` WHERE UserID = '$id'";
                        $userNameArray = mysqli_fetch_assoc(mysqli_query($conn, $ownerQuery));
                        // print_r($userNameArray);
                      ?>
                      <div class="product-owner py-4 d-flex-between">
                        <span class="bid-owner"
                          >Owned By
                          <strong
                            ><a href="projects/view/?userId=<?php echo $id ?>"
                              ><?php echo $userNameArray['FullName'] ?></a
                            ></strong
                          ></span
                        >
                       
                      </div>
                      <!-- End .product-owner -->
                      <div class="action-wrapper d-flex-between pt-4">
                        <a
                          href="projects/view/?projectID=<?php echo $row['ProjectID'] ?>"
                          ><i class="ri-history-line"></i>View Project</a
                        >
                        <a
                          href="#"
                          data-bs-toggle="modal"
                          data-bs-target="#placeBit"
                          class="btn btn-outline btn-small"
                          ><span
                            ><i class="ri-add-line"></i> &nbsp;Join Project</span
                          ></a
                        >
                      </div>
                      <!-- action-wrapper -->
                    </div>
                    <!-- End .content -->
                  </div>
        </div>
        <?php }?> 

      </div>
      <!-- End .grid-filter-wrapper -->
    </div>
    <!-- End .container -->
  </section>
  <!-- End Explore -->




  <!-- Start Setup Wallet -->
  <section class="section-bg-separation wallet-setup ptb-120">
    <div class="container">
      <div class="section-title">
        <span class="subtitle">HOW IT WORKS</span>
        <h2>Explore, &nbsp;Contribute, &nbsp;Transform</h2>
      </div>
      <!-- End .section-title -->
      <div class=" slider wallet-activation slick-arrow-between slick-gutter-15">
        <div class="card-block-style-one">
          <img class="thumb mb-5" src="images/icon/1.png" alt="wallet">
          <h3 class="title mb-3">Start Your Journey</h3>
          <p>Begin by signing up on our open source marketplace website. Create your open source project, 
            define its goals, and set the stage for collaboration. Utilize our user-friendly project creation tools to make your vision a reality. 
            Join the vibrant community of developers, designers, and enthusiasts to shape the future of your project.</p>
        </div>
        <!-- End .card-block-style-one -->


        <div class="card-block-style-one">
          <img class="thumb mb-5" src="images/icon/2.png" alt="wallet">
          <h3 class="title mb-3">Embrace Teamwork</h3>
          <p>Invite collaborators to your project with ease and foster a diverse and inclusive team. 
            Utilize version control and issue tracking to streamline development and maintain transparency
             Leverage pull requests and code reviews for high-quality contributions. Experience the power of collective innovation as your project evolves and grows

          </p>
        </div>
        <!-- End .card-block-style-one -->

        <div class="card-block-style-one">
          <img class="thumb mb-5" src="images/icon/3.png" alt="wallet">
          <h3 class="title mb-3">Join the Conversation</h3>
          <p>Explore our lively forum where members discuss projects, share insights, and seek help. 
            Find solutions to challenges, get feedback on your work, and connect with like-minded individuals.
             Contribute your expertise to discussions or initiate valuable conversations.
             The forum is your space to learn, grow, and collaborate beyond project boundaries</p>
        </div>

        <!-- End .card-block-style-one -->
        <div class="card-block-style-one">
          <img class="thumb mb-5" src="images/icon/3.png" alt="wallet">
          <h3 class="title mb-3">Achieve Recognition</h3>
          <p>Stand out in the community by actively participating in projects, discussions, and contributions. 
        Earn reputation points and badges as you consistently contribute to open source projects. Climb the leaderboard and gain recognition as a top contributor in your area of expertise.
         Showcase your skills and dedication, fostering collaboration and mentorship opportunities</p>
        </div>
        <!-- End .card-block-style-one -->
      </div>
      <!-- End .row -->
    </div>
    <!-- End .container -->
  </section>
  <!-- End Setup Wallet -->

  <!-- Start Footer -->
  <footer class="footer-wrapper">
    <div class="footer-inner pt-120 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6 mb-8">
            <div class="footer-widget first-block">
              <div class="mb-4">
                <a href="index.html" class="logo-light"><img src="images/logo-white.png" alt="brand"></a>
                <a href="index.html" class="logo logo-dark"><img src="images/logo-dark.png" alt="brand"> </a>
              </div>
              <p class="mb-5">Banu is the best NFT Marketplace Template because the we have selected the most active and
                Creative Research.</p>
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
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/jquery.nice-select.min.js"></script>
  <script src="js/vendor/modernizer.min.js"></script>
  <script src="js/vendor/slick.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/vendor/waypoint.js"></script>
  <script src="js/vendor/js.cookie.js"></script>
  <script src="js/vendor/count-down.js"></script>
  <script src="js/vendor/counter-up.js"></script>
  <script src="js/vendor/isotop.js"></script>
  <script src="js/vendor/imageloaded.js"></script>
  <script src="js/vendor/aos.js"></script>
  <script src="js/vendor/jquery.custom-file-input.js"></script>

  <!-- main JS -->
  <script src="js/main.js"></script>

</body>

</html>
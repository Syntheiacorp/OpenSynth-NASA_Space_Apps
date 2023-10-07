<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic metas
  ======================================== -->
  <meta charset="utf-8" />
  <title>Explore </title>
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
          <a href="" class="logo logo-light"><img src="../../images/logo-white.png" alt="brand"> </a>
          <a href="" class="logo logo-dark"><img src="../../images/logo-dark.png" alt="brand"> </a>
        </div>
        <!-- End .logo-wrapper -->

        <div class="mainmenu-wrapper">
          <nav id="sideNav" class="mainmenu-nav d-none d-xl-block">
            <!-- Start Mainmanu Nav -->
            <ul class="mainmenu">
              <li class="">
                <a class="active" href="">Home</a>
              </li>

              <li class=" has-menu-child-item">
                <a href="#explore-section">Explore</a>
                <!-- <ul class="submenu">
                  <li>
                    <a href="explore-filter-sidebar.html">Explore Filter Sidebar</a>
                  </li>
                </ul> -->
              </li>
              <li><a href="activity.html">Activity</a></li>

              <li><a href="contact.html">Contact</a></li>
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
                <li><a href="author-profile.html"><i class="ri-user-line"></i> Profile</a></li>
                <li><a href="create.html"><i class="ri-edit-line"></i> Create Item</a></li>
                <li><a href="authors.html"><i class="ri-layout-grid-line"></i>Authors</a></li>
                <li><a href="auth/signin/"><i class="ri-logout-box-r-line"></i>Sign in</a></li>
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
        <h1 class="title">Explore Sidebar</h1>
        <nav class="mt-4">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Explore</a></li>
            <li class="breadcrumb-item active" aria-current="page">Explore Filter Sidebar</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End .container -->
  </section>
  <!-- End banner area -->

  <!-- Start Explore -->
  <section class="pt-120 pb-90 ">
    <div class="container">

      <form action="#">
        <div class="row">
          <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-12">
            <div class="filter-wrapper">
              <div class="filter-custom-item">
                <h4 class="accordion-button" data-bs-toggle="collapse" data-bs-target="#status">
                  Status
                </h4>
                <div id="status" class="collapse show">
                  <div class="filter-item-list">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="buy-now">
                      <label class="form-check-label" for="buy-now">
                        Buy Now
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="on-auctoins" checked>
                      <label class="form-check-label" for="on-auctoins">
                        On Auctions
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="has-offers">
                      <label class="form-check-label" for="has-offers">
                        Has Offers
                      </label>
                    </div>
                    <!-- End .form-check -->
                  </div>
                </div>
              </div>
              <!-- End .accordion-item -->

              <div class="filter-custom-item">
                <h4 class="accordion-button" data-bs-toggle="collapse" data-bs-target="#categories">
                  Categories
                </h4>
                <div id="categories" class="collapse show">
                  <div class="filter-item-list">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="art">
                      <label class="form-check-label" for="art">
                        Art
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="collectibles" checked>
                      <label class="form-check-label" for="collectibles">
                        Collectibles
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="music">
                      <label class="form-check-label" for="music">
                        Music
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="sports">
                      <label class="form-check-label" for="sports">
                        Sports
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="rio">
                      <label class="form-check-label" for="rio">
                        Rio Items
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="trading-cards">
                      <label class="form-check-label" for="trading-cards">
                        Trading Cards
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="utility">
                      <label class="form-check-label" for="utility">
                        Utility
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="virtual-worlds">
                      <label class="form-check-label" for="virtual-worlds">
                        Virtual Worlds
                      </label>
                    </div>
                    <!-- End .form-check -->
                  </div>
                </div>
              </div>
              <!-- End .accordion-item -->

              <div class="filter-custom-item">
                <h4 class="accordion-button" data-bs-toggle="collapse" data-bs-target="#chains">
                  Chains
                </h4>
                <div id="chains" class=" collapse show">
                  <div class="filter-item-list">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="ethereum" checked>
                      <label class="form-check-label" for="ethereum">
                        Ethereum
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="polygon">
                      <label class="form-check-label" for="polygon">
                        Polygon
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="subtrio">
                      <label class="form-check-label" for="subtrio">
                        Subtrio
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="klaytn">
                      <label class="form-check-label" for="klaytn">
                        Klaytn
                      </label>
                    </div>
                    <!-- End .form-check -->
                  </div>
                </div>
              </div>
              <!-- End .accordion-item -->

              <div class="filter-custom-item">
                <h4 class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collections">
                  Collections
                </h4>
                <div id="collections" class=" collapse show">
                  <div class="filter-item-list">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="skecthify">
                      <label class="form-check-label" for="skecthify">
                        Skecthify
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="abstraction" checked>
                      <label class="form-check-label" for="abstraction">
                        Abstraction
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="cartoonism">
                      <label class="form-check-label" for="cartoonism">
                        Cartoonism
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="patternlicious">
                      <label class="form-check-label" for="patternlicious">
                        Patternlicious
                      </label>
                    </div>
                    <!-- End .form-check -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="virtuland">
                      <label class="form-check-label" for="virtuland">
                        Virtuland
                      </label>
                    </div>
                    <!-- End .form-check -->
                  </div>
                </div>
              </div>
              <!-- End .accordion-item -->
            </div>
            <!-- End .filter-wrapper -->
          </div>
          <!-- End .col -->

          <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12">
            <div class="row">
                <?php for ($i=0;$i<=5;$i++) { ?>
              <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 mb-6">
                <div class="explore-style-one">
                  <div class="thumb">
                    <a href="product-details.html"><img src="../../images/explore/29.jpg"
                        alt="nft live auction thumbnail"></a>
                    <button class="reaction-btn"><i class="ri-heart-fill"></i><span>49</span></button>
                    <!-- End .reaction-count -->
                  </div>
                  <!-- End .thumb -->
                  <div class="content">
                    <div class="header d-flex-between pt-4 pb-3">
                      <h3 class="title"><a href="product-details.html">BruceTheGoose.Eth™</a></h3>
                      <div class="more-dropdown "><i class="ri-more-fill" data-bs-toggle="dropdown"></i>
                        <ul class="dropdown-menu dropdown-menu-dark">
                          <li><a class="dropdown-item" href="#">New bid</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Refresh Metadata</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Report</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- .header -->
                    <div class="product-share-wrapper">
                      <div class="profile-share d-flex-center">
                        <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="Banuri Bari"><img src="../../images/explore/avatar/1.png" alt="Nft_Profile"></a>
                        <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="Mark Keni"><img src="../../images/explore/avatar/2.png" alt="Nft_Profile"></a>
                        <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="Diago Smith"><img src="../../images/explore/avatar/3.png" alt="Nft_Profile"></a>
                        <a class="more-author-text" href="#" tabindex="0">20+ People Place Bit</a>
                      </div>
                    </div>
                    <!-- End product-share-wrapper -->
                    <div class="product-owner py-4 d-flex-between">
                      <span class="bid-owner">Owned By <strong><a
                            href="author-profile.html">Zuckerberg</a></strong></span>
                      <span class="biding-price d-flex-center"><i class="ri-arrow-up-line"></i>76.4 ETH</span>
                    </div>
                    <!-- End .product-owner -->
                    <div class="action-wrapper d-flex-between pt-4">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#bid_history" class="history d-flex-center"><i
                          class="ri-history-line"></i>View History</a>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#placeBit"
                        class="btn btn-outline btn-small"><span><i class="ri-shopping-bag-line"></i> Place
                          Bid</span></a>
                    </div>
                    <!-- action-wrapper -->
                  </div>
                  <!-- End .content -->
                </div>
              </div>
              <!-- End .col -->

              <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 mb-6">
                <div class="explore-style-one">
                  <div class="thumb">
                    <a href="product-details.html"><img src="../../images/explore/30.jpg"
                        alt="nft live auction thumbnail"></a>
                    <button class="reaction-btn"><i class="ri-heart-fill"></i><span>12</span></button>
                    <!-- End .reaction-count -->
                  </div>
                  <!-- End .thumb -->
                  <div class="content">
                    <div class="header d-flex-between pt-4 pb-3">
                      <h3 class="title"><a href="product-details.html">Dead Rover Club</a></h3>
                      <div class="more-dropdown "><i class="ri-more-fill" data-bs-toggle="dropdown"></i>
                        <ul class="dropdown-menu dropdown-menu-dark">
                          <li><a class="dropdown-item" href="#">New bid</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Refresh Metadata</a></li>
                          <li><a class="dropdown-item" href="#">Share</a></li>
                          <li><a class="dropdown-item" href="#">Report</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- .header -->
                    <div class="product-share-wrapper">
                      <div class="profile-share d-flex-center">
                        <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="Banuri Bari"><img src="../../images/explore/avatar/1.png" alt="Nft_Profile"></a>
                        <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="Mark Keni"><img src="../../images/explore/avatar/2.png" alt="Nft_Profile"></a>
                        <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                          title="Diago Smith"><img src="../../images/explore/avatar/3.png" alt="Nft_Profile"></a>
                        <a class="more-author-text" href="#" tabindex="0">20+ People Place Bit</a>
                      </div>
                    </div>
                    <!-- End product-share-wrapper -->
                    <div class="product-owner py-4 d-flex-between">
                      <span class="bid-owner">Owned By <strong><a
                            href="author-profile.html">Zuckerberg</a></strong></span>
                      <span class="biding-price d-flex-center"><i class="ri-arrow-up-line"></i>76.4 ETH</span>
                    </div>
                    <!-- End .product-owner -->
                    <div class="action-wrapper d-flex-between pt-4">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#bid_history" class="history d-flex-center"><i
                          class="ri-history-line"></i>View History</a>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#placeBit"
                        class="btn btn-outline btn-small"><span><i class="ri-shopping-bag-line"></i> Place
                          Bid</span></a>
                    </div>
                    <!-- action-wrapper -->
                  </div>
                  <!-- End .content -->
                </div>
              </div>
              <!-- End .col -->
<?php } ?>
            </div>
            <!-- End .row -->
          </div>
          <!-- End .col -->
        </div>

      </form>
      <!-- End filter form -->
    </div>
    <!-- End .container -->
  </section>
  <!-- End Explore -->

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


</html>
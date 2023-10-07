<?php
  session_start();
  
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
        <div class="icon"><img src="images/logo-preloader.png" alt="logo" class="m-auto d-block"> <span></span>
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
            <li class="avatar-info"> <a href="#"><img src="images/avatar/user.png" alt="user avatar"></a>
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

          <li><a href="activity.html">Activity</a></li>

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
              <h1 class="mb-6 title" data-aos="fade-up">Collect your <br>
                <span>digital art NFTs</span>
              </h1>
              <p data-aos="fade-up" data-aos-delay="100">Marketplace for monster character
                collections <br>
                non fungible token NFTs.</p>
              <div class="group-btn mt-8" data-aos="fade-up" data-aos-delay="200">
                <a href="explore-filter-sidebar.html" class="btn btn-gradient"><span><i class="ri-rocket-line"></i>
                    Explore</span></a>
                <a href="create.html" class="btn btn-outline"><span><i class="ri-edit-line"></i> Create</span></a>
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
              <span class="sticker">Featured Art</span>
              <div class="explore-content ">
                <div class="price">
                  <span>Rederve Price</span>
                  <h6><img src="images/explore/hero/reward.png" alt="reward"> 68.4 ETH</h6>
                </div>
                <a href="#" data-bs-toggle="modal" data-bs-target="#placeBit"
                  class="btn btn-gradient btn-small rounded-3 "><span><i class="ri-shopping-bag-line"></i> Place a
                    bid</span></a>
              </div>
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
  <section class="ptb-120 section-bg-separation-2">
    <div class="section-title text-center">
      <span class="subtitle">Exclusive Assets</span>
      <h2>NFT Gallery</h2>
    </div>
    <!-- End .section-title -->
    <div class="nft-gallery-activation slider slick-pagination-50">
      <?php for($i=0;$i<=8;$i++){?>
      <div class="gallery-thumb">
        <a href="popular-collections.html" class="thumb d-block">
          <div class="inner">
            <img src="images/gallery/1.jpg" alt="nft gallery">
          </div>
        </a>
        <!-- End .thumb  -->
        <a href="popular-collections.html" class="thumb d-block">
          <div class="inner">
            <img src="images/gallery/2.jpg" alt="nft gallery">
          </div>
        </a>
        <!-- End .thumb  -->
      </div>
      <!-- End Gallery-thumb -->
<?php } ?>
    </div>
  </section>
  <!-- End nft gallery area -->

  <!-- Start Explore -->
  <section id="explore-section" class="pt-120 pb-90 masonary-wrapper-activation">
    <div class="container">
      <div class="d-flex-between flex-wrap">
        <div class="section-title">
          <span class="subtitle">Exclusive Assets</span>
          <h2>Explore</h2>
        </div>
        <!-- End .section-title -->

        <div
          class="button-group default-tab-list isotop-filter flex-wrap filters-button-group d-flex justify-content-start justify-content-lg-end mb-6 ">
          <button data-filter="*" class="is-checked"><span class="filter-text">All NFTs</span></button>
          <button data-filter=".cat--1"><span class="filter-text">Art</span></button>
          <button data-filter=".cat--2"><span class="filter-text">Collectibles</span></button>
          <button data-filter=".cat--3"><span class="filter-text">Virtual Worlds</span></button>
          <button data-filter=".cat--4"><span class="filter-text">Tranding Cards</span></button>
        </div>
        <!-- End isotop-filter -->
      </div>

      <div class="grid-filter-wrapper mesonry-list">
        <div class="resizer"></div>
        <div class="grid-item cat--4">
          <div class="explore-style-one">
            <div class="thumb">
              <a href="product-details.html"> <img src="images/explore/28.jpg" alt="nft live auction thumbnail"></a>
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
                    title="Banuri Bari"><img src="images/explore/avatar/1.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Mark Keni"><img src="images/explore/avatar/2.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Diago Smith"><img src="images/explore/avatar/3.png" alt="Nft_Profile"></a>
                  <a class="more-author-text" href="#" tabindex="0">20+ People Place Bit</a>
                </div>
              </div>
              <!-- End product-share-wrapper -->
              <div class="product-owner py-4 d-flex-between">
                <span class="bid-owner">Owned By <strong><a href="author-profile.html">Zuckerberg</a></strong></span>
                <span class="biding-price d-flex-center"><i class="ri-arrow-up-line"></i>76.4 ETH</span>
              </div>
              <!-- End .product-owner -->
              <div class="action-wrapper d-flex-between pt-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#bid_history" class="history d-flex-center"><i
                    class="ri-history-line"></i>View History</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#placeBit"
                  class="btn btn-outline btn-small "><span><i class="ri-shopping-bag-line"></i> Place
                    Bid</span></a>
              </div>
              <!-- action-wrapper -->
            </div>
            <!-- End .content -->
          </div>
        </div>

        <!-- End .explore-style-one -->
        <div class="grid-item cat--4">
          <div class="explore-style-one">
            <div class="thumb">
              <a href="product-details.html"><img src="images/explore/29.jpg" alt="nft live auction thumbnail"></a>
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
                    title="Banuri Bari"><img src="images/explore/avatar/1.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Mark Keni"><img src="images/explore/avatar/2.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Diago Smith"><img src="images/explore/avatar/3.png" alt="Nft_Profile"></a>
                  <a class="more-author-text" href="#" tabindex="0">20+ People Place Bit</a>
                </div>
              </div>
              <!-- End product-share-wrapper -->
              <div class="product-owner py-4 d-flex-between">
                <span class="bid-owner">Owned By <strong><a href="author-profile.html">Zuckerberg</a></strong></span>
                <span class="biding-price d-flex-center"><i class="ri-arrow-up-line"></i>76.4 ETH</span>
              </div>
              <!-- End .product-owner -->
              <div class="action-wrapper d-flex-between pt-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#bid_history" class="history d-flex-center"><i
                    class="ri-history-line"></i>View History</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#placeBit"
                  class="btn btn-outline btn-small "><span><i class="ri-shopping-bag-line"></i> Place
                    Bid</span></a>
              </div>
              <!-- action-wrapper -->
            </div>
            <!-- End .content -->
          </div>
        </div>

        <!-- End .explore-style-one -->
        <div class="grid-item cat--1 cat--2 ">
          <div class="explore-style-one">
            <div class="thumb">
              <a href="product-details.html"><img src="images/explore/27.jpg" alt="nft live auction thumbnail"></a>
              <button class="reaction-btn"><i class="ri-heart-fill"></i><span>19</span></button>
              <!-- End .reaction-count -->
            </div>
            <!-- End .thumb -->
            <div class="content">
              <div class="header d-flex-between pt-4 pb-3">
                <h3 class="title"><a href="product-details.html">SudsyPanda</a></h3>
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
                    title="Banuri Bari"><img src="images/explore/avatar/1.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Mark Keni"><img src="images/explore/avatar/2.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Diago Smith"><img src="images/explore/avatar/3.png" alt="Nft_Profile"></a>
                  <a class="more-author-text" href="#" tabindex="0">20+ People Place Bit</a>
                </div>
              </div>
              <!-- End product-share-wrapper -->
              <div class="product-owner py-4 d-flex-between">
                <span class="bid-owner">Owned By <strong><a href="author-profile.html">Jacson Rio</a></strong></span>
                <span class="biding-price d-flex-center"><i class="ri-arrow-up-line"></i>76.4 ETH</span>
              </div>
              <!-- End .product-owner -->
              <div class="action-wrapper d-flex-between pt-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#bid_history" class="history d-flex-center"><i
                    class="ri-history-line"></i>View History</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#placeBit"
                  class="btn btn-outline btn-small "><span><i class="ri-shopping-bag-line"></i> Place
                    Bid</span></a>
              </div>
              <!-- action-wrapper -->
            </div>
            <!-- End .content -->
          </div>
        </div>

        <!-- End .explore-style-one -->
        <div class="grid-item cat--3">
          <div class="explore-style-one">
            <div class="thumb">
              <a href="product-details.html"><img src="images/explore/6.jpg" alt="nft live auction thumbnail"></a>
              <button class="reaction-btn"><i class="ri-heart-fill"></i><span>08</span></button>
              <!-- End .reaction-count -->
            </div>
            <!-- End .thumb -->
            <div class="content">
              <div class="header d-flex-between pt-4 pb-3">
                <h3 class="title"><a href="product-details.html">TrapMonkie 3D</a></h3>
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
                    title="Banuri Bari"><img src="images/explore/avatar/1.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Mark Keni"><img src="images/explore/avatar/2.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Diago Smith"><img src="images/explore/avatar/3.png" alt="Nft_Profile"></a>
                  <a class="more-author-text" href="#" tabindex="0">20+ People Place Bit</a>
                </div>
              </div>
              <!-- End product-share-wrapper -->
              <div class="product-owner py-4 d-flex-between">
                <span class="bid-owner">Owned By <strong><a href="author-profile.html">Fuliani</a></strong></span>
                <span class="biding-price d-flex-center"><i class="ri-arrow-up-line"></i>76.4 ETH</span>
              </div>
              <!-- End .product-owner -->
              <div class="action-wrapper d-flex-between pt-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#bid_history" class="history d-flex-center"><i
                    class="ri-history-line"></i>View History</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#placeBit"
                  class="btn btn-outline btn-small "><span><i class="ri-shopping-bag-line"></i> Place
                    Bid</span></a>
              </div>
              <!-- action-wrapper -->
            </div>
            <!-- End .content -->
          </div>
        </div>

        <!-- End .explore-style-one -->
        <div class="grid-item cat--1 cat--4">
          <div class="explore-style-one">
            <div class="thumb">
              <a href="product-details.html"> <img src="images/explore/16.jpg" alt="nft live auction thumbnail"></a>
              <button class="reaction-btn"><i class="ri-heart-fill"></i><span>55</span></button>
              <!-- End .reaction-count -->
            </div>
            <!-- End .thumb -->
            <div class="content">
              <div class="header d-flex-between pt-4 pb-3">
                <h3 class="title"><a href="product-details.html">TrapMonkie - Meditation</a></h3>
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
                    title="Banuri Bari"><img src="images/explore/avatar/1.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Mark Keni"><img src="images/explore/avatar/2.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Diago Smith"><img src="images/explore/avatar/3.png" alt="Nft_Profile"></a>
                  <a class="more-author-text" href="#" tabindex="0">20+ People Place Bit</a>
                </div>
              </div>
              <!-- End product-share-wrapper -->
              <div class="product-owner py-4 d-flex-between">
                <span class="bid-owner">Owned By <strong><a href="author-profile.html">Kartik</a></strong></span>
                <span class="biding-price d-flex-center"><i class="ri-arrow-up-line"></i>76.4 ETH</span>
              </div>
              <!-- End .product-owner -->
              <div class="action-wrapper d-flex-between pt-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#bid_history" class="history d-flex-center"><i
                    class="ri-history-line"></i>View History</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#placeBit"
                  class="btn btn-outline btn-small "><span><i class="ri-shopping-bag-line"></i> Place
                    Bid</span></a>
              </div>
              <!-- action-wrapper -->
            </div>
            <!-- End .content -->
          </div>
        </div>

        <!-- End .explore-style-one -->
        <div class="grid-item cat--2 cat--3">
          <div class="explore-style-one">
            <div class="thumb">
              <a href="product-details.html"><img src="images/explore/20.jpg" alt="nft live auction thumbnail"></a>
              <button class="reaction-btn"><i class="ri-heart-fill"></i><span>25</span></button>
              <!-- End .reaction-count -->
            </div>
            <!-- End .thumb -->
            <div class="content">
              <div class="header d-flex-between pt-4 pb-3">
                <h3 class="title"><a href="product-details.html">Illustrations</a></h3>
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
                    title="Banuri Bari"><img src="images/explore/avatar/1.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Mark Keni"><img src="images/explore/avatar/2.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Diago Smith"><img src="images/explore/avatar/3.png" alt="Nft_Profile"></a>
                  <a class="more-author-text" href="#" tabindex="0">20+ People Place Bit</a>
                </div>
              </div>
              <!-- End product-share-wrapper -->
              <div class="product-owner py-4 d-flex-between">
                <span class="bid-owner">Owned By <strong><a href="author-profile.html">Richardson</a></strong></span>
                <span class="biding-price d-flex-center"><i class="ri-arrow-up-line"></i>76.4 ETH</span>
              </div>
              <!-- End .product-owner -->
              <div class="action-wrapper d-flex-between pt-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#bid_history" class="history d-flex-center"><i
                    class="ri-history-line"></i>View History</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#placeBit"
                  class="btn btn-outline btn-small "><span><i class="ri-shopping-bag-line"></i> Place
                    Bid</span></a>
              </div>
              <!-- action-wrapper -->
            </div>
            <!-- End .content -->
          </div>
        </div>

        <!-- End .explore-style-one -->
        <div class="grid-item cat--4">
          <div class="explore-style-one">
            <div class="thumb">
              <a href="product-details.html"> <img src="images/explore/7.jpg" alt="nft live auction thumbnail"></a>
              <button class="reaction-btn"><i class="ri-heart-fill"></i><span>14</span></button>
              <!-- End .reaction-count -->
            </div>
            <!-- End .thumb -->
            <div class="content">
              <div class="header d-flex-between pt-4 pb-3">
                <h3 class="title"><a href="product-details.html">Collectibeles</a></h3>
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
                    title="Banuri Bari"><img src="images/explore/avatar/1.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Mark Keni"><img src="images/explore/avatar/2.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Diago Smith"><img src="images/explore/avatar/3.png" alt="Nft_Profile"></a>
                  <a class="more-author-text" href="#" tabindex="0">20+ People Place Bit</a>
                </div>
              </div>
              <!-- End product-share-wrapper -->
              <div class="product-owner py-4 d-flex-between">
                <span class="bid-owner">Owned By <strong><a href="author-profile.html">Mark Keni</a></strong></span>
                <span class="biding-price d-flex-center"><i class="ri-arrow-up-line"></i>76.4 ETH</span>
              </div>
              <!-- End .product-owner -->
              <div class="action-wrapper d-flex-between pt-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#bid_history" class="history d-flex-center"><i
                    class="ri-history-line"></i>View History</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#placeBit"
                  class="btn btn-outline btn-small "><span><i class="ri-shopping-bag-line"></i> Place
                    Bid</span></a>
              </div>
              <!-- action-wrapper -->
            </div>
            <!-- End .content -->
          </div>
        </div>

        <!-- End .explore-style-one -->
        <div class="grid-item cat--1 cat--3">
          <div class="explore-style-one">
            <div class="thumb">
              <a href="product-details.html"><img src="images/explore/30.jpg" alt="nft live auction thumbnail"></a>
              <button class="reaction-btn"><i class="ri-heart-fill"></i><span>32</span></button>
              <!-- End .reaction-count -->
            </div>
            <!-- End .thumb -->
            <div class="content">
              <div class="header d-flex-between pt-4 pb-3">
                <h3 class="title"><a href="product-details.html">Virtual Worlds</a></h3>
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
                    title="Banuri Bari"><img src="images/explore/avatar/1.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Mark Keni"><img src="images/explore/avatar/2.png" alt="Nft_Profile"></a>
                  <a href="authors.html" class="avatar" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Diago Smith"><img src="images/explore/avatar/3.png" alt="Nft_Profile"></a>
                  <a class="more-author-text" href="#" tabindex="0">20+ People Place Bit</a>
                </div>
              </div>
              <!-- End product-share-wrapper -->
              <div class="product-owner py-4 d-flex-between">
                <span class="bid-owner">Owned By <strong><a href="author-profile.html">Banuri</a></strong></span>
                <span class="biding-price d-flex-center"><i class="ri-arrow-up-line"></i>76.4 ETH</span>
              </div>
              <!-- End .product-owner -->
              <div class="action-wrapper d-flex-between pt-4">
                <a href="#" data-bs-toggle="modal" data-bs-target="#bid_history" class="history d-flex-center"><i
                    class="ri-history-line"></i>View History</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#placeBit"
                  class="btn btn-outline btn-small "><span><i class="ri-shopping-bag-line"></i> Place
                    Bid</span></a>
              </div>
              <!-- action-wrapper -->
            </div>
            <!-- End .content -->
          </div>
        </div>
        <!-- End .explore-style-one -->
      </div>
      <!-- End .grid-filter-wrapper -->
    </div>
    <!-- End .container -->
  </section>
  <!-- End Explore -->

  <!-- Start Top Seller -->
  <section class="section-bg-separation-2 ptb-120">
    <div class="container">
      <div class="d-flex-between">
        <div class="section-title">
          <span class="subtitle">Creators</span>
          <h2>Top Sellers</h2>
        </div>
        <!-- End .section-title -->
        <div class="text-large">
          <a href="all-sellers-2.html">Sell All Sellers</a>
        </div>
      </div>
      <!-- End .d-flex-between -->

      <div class="slider top-seller-activation-1 slick-gutter-15 slick-arrow-between ">
        <?php
        for ($i=1;$i<=10;$i++){  
          ?> 
          <div class="top-seller-style-one">
            <a href="author-profile.html" class="thumb mb-2">
              <img src="images/top-seller/1.png" alt="top sellter">
              <i class="ri-check-line"></i>
            </a>
            <h4 class="title pb-1"><a href="author-profile.html">Oliver</a></h4>
            <span class="price">214.6 ETH</span>
          </div>
          <?php
        }
        ?>
        <!-- End .col -->  

      </div>
    </div>
    <!-- End .container -->
  </section>
  <!-- End Top Seller -->


  <!-- Start Setup Wallet -->
  <section class="wallet-setup ptb-120">
    <div class="container">
      <div class="section-title">
        <span class="subtitle">HOW IT WORKS</span>
        <h2>Create & sell your NFTs</h2>
      </div>
      <!-- End .section-title -->
      <div class=" slider wallet-activation slick-arrow-between slick-gutter-15">
        <div class="card-block-style-one">
          <img class="thumb mb-5" src="images/icon/1.png" alt="wallet">
          <h3 class="title mb-3">set up your wallet</h3>
          <p>There are a few things worth doing before creating your first NFTs. In the image above, you’ll not
            personalized banner. To upload yours, press the pencil icon in the top right.</p>
        </div>
        <!-- End .card-block-style-one -->


        <div class="card-block-style-one">
          <img class="thumb mb-5" src="images/icon/2.png" alt="wallet">
          <h3 class="title mb-3">Create your collection</h3>
          <p>There are a few things worth doing before creating your first NFTs. In the image above, you’ll not
            personalized banner. To upload yours, press the pencil icon in the top right.</p>
        </div>
        <!-- End .card-block-style-one -->

        <div class="card-block-style-one">
          <img class="thumb mb-5" src="images/icon/3.png" alt="wallet">
          <h3 class="title mb-3">List them for sale</h3>
          <p>There are a few things worth doing before creating your first NFTs. In the image above, you’ll not
            personalized banner. To upload yours, press the pencil icon in the top right.</p>
        </div>

        <!-- End .card-block-style-one -->
        <div class="card-block-style-one">
          <img class="thumb mb-5" src="images/icon/3.png" alt="wallet">
          <h3 class="title mb-3">List them for sale</h3>
          <p>There are a few things worth doing before creating your first NFTs. In the image above, you’ll not
            personalized banner. To upload yours, press the pencil icon in the top right.</p>
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
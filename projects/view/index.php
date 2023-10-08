
<?php
  session_start();
  $master = $_GET['projectID'];
  $_SESSION['projectID'] = $master;
  // $master = 1 //testing  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic metas
  ======================================== -->
  <meta charset="utf-8" />
  <title>Project Details</title>
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
    .custom-modal {
  /* Add your custom styles here */
      }

      .custom-modal-xl {
        max-width: 60%; /* Adjust as needed for XL size */
      }

      .custom-modal-scrollable {
        overflow-y: auto;
        max-height: 80vh; /* Adjust as needed for scrollable height */
      }
      .gradient-custom {
    /* fallback for old browsers */
    background: #fccb90;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to bottom right, rgba(252, 203, 144, 1), rgba(213, 126, 235, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to bottom right, rgba(252, 203, 144, 1), rgba(213, 126, 235, 1))
    }

    .mask-custom {
    background: rgba(24, 24, 16, .2);
    border-radius: 2em;
    backdrop-filter: blur(15px);
    border: 2px solid rgba(255, 255, 255, 0.05);
    background-clip: padding-box;
    box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
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
          <a href="../../" class="logo logo-light"><img src="../../images/logo-white.png" alt="brand"> </a>
          <a href="../../" class="logo logo-dark"><img src="../../images/logo-dark.png" alt="brand"> </a>
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
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="header-right d-flex align-items-center">
        <ul class="header-right-inner">


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
  <?php
// Include the database configuration file
require("../../config/dbConfig.php");


$sql = "SELECT * FROM Projects WHERE ProjectID = 2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result)

?>
  <!-- Start banner area -->
  <section style="position:static;top:1;padding-top:21px"class="inner-page-banner bg-2 bg-image">
    <div class="container">
      <div class="inner text-center">
        <h1 class="title"><?php echo $row['Title'];?> </h1>
        <nav class="mt-4">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Community</a></li>
            <li class="breadcrumb-item active" aria-current="page">Project Details</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End .container -->
  </section>
  <!-- End banner area -->

  <!-- Start Blog Details area -->
  <section class="pt-120 pb-90 blog-details-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 mb-6">
          <div class="blog-content">
            <img class="img-fluid" src="images/blog-details/1.jpg" alt="project-details">
            <!-- <h2 class="mb-2">List your collection for primary sales</h2> -->
            <h2 class="mb-2"><?php echo $row['Title'];?></h2>
            
            <ul class="meta">
              <li>
                <?php 
                echo $row['CreatedAt'];
                ?> 
              </li>  
              <!-- <li><a href="#">Development</a></li> -->
              <li class="date"><i class="ri-time-line"></i><?php
// Assuming $row['CreatedAt'] contains your timestamp from the database

            $timestamp = strtotime($row['CreatedAt']);
            $current_time = time(); // Current timestamp

            $time_diff = $current_time - $timestamp;

            if ($time_diff < 60) {
                $time_ago = $time_diff . " seconds ago";
            } elseif ($time_diff < 3600) {
                $minutes = floor($time_diff / 60);
                $time_ago = $minutes . " minutes ago";
            } elseif ($time_diff < 86400) {
                $hours = floor($time_diff / 3600);
                $time_ago = $hours . " hours ago";
            } else {
                $days = floor($time_diff / 86400);
                $time_ago = $days . " days ago";
            }

            echo $time_ago;
            ?></li>
            </ul>
            <p><?php echo $row['Description'];?> </p>
            </div>
          </div>
          <hr>

        
          <!-- End comment-box-wrapper -->
        <div class="col-xl-4 mb-6">
          <aside class="sidebar">
            <div class="single-widget widget_categories" style='transform: translate(-30px, 30px);'>
              <h3 class="title">Categories</h3>
              <div class="inner">
                <ul class="category-list ">
                  <li><a href="blog-details.html"><span class="left-content">Development</span><span
                        class="count-text">24</span></a>
                  </li>
                  <li><a href="blog-details.html"><span class="left-content">Company</span><span
                        class="count-text">25</span></a></li>
                  <li><a href="blog-details.html"><span class="left-content">Marketing</span><span
                        class="count-text">18</span></a>
                  </li>
                  <li><a href="blog-details.html"><span class="left-content">UX
                        Design</span><span class="count-text">56</span></a></li>
                  <li><a href="blog-details.html"><span class="left-content">Business</span><span
                        class="count-text">27</span></a></li>
                  <li><a href="blog-details.html"><span class="left-content">App
                        Development</span><span class="count-text">47</span></a></li>
                  <li><a href="blog-details.html"><span class="left-content">Application</span><span
                        class="count-text">23</span></a>
                  </li>
                  <li><a href="blog-details.html"><span class="left-content">Art</span><span
                        class="count-text">35</span></a></li>
                </ul>
              </div>
            </div>

            <!-- Modal for chat -->
            <div class="modal fade custom-modal" id="project_chat_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog custom-modal-xl modal-dialog-scrollable"> <!-- Use custom classes for modal size -->
                <div class="modal-content">
                  <div class="modal-header" style="background-color: #0b0a0a;">
                  <h1 class="modal-title fs-5"  id="staticBackdropLabel">Chats and Discussions</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <section class="gradient-custom">
                  <div class="container py-5">

                    <div class="row">
                      <div class="col-md-6 col-lg-5 col-xl-5 mb-4 mb-md-0">
                        <h5 class="font-weight-bold mb-3 text-center text-white">Members</h5>
                        <div class="card mask-custom">
                          <div class="card-body">
                            <ul class="list-unstyled mb-0">
                              <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                <a href="#!" class="d-flex justify-content-between link-light">
                                  <div class="d-flex flex-row">
                                    <img src="../../images/avatar/user.png" alt="avatar"
                                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                    <div class="pt-1">
                                      <p class="fw-bold mb-0">John Doe</p>
                                    </div>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-lg-7 col-xl-7">
                        <ul class="list-unstyled text-white">
                          <li class="d-flex justify-content-between mb-4">
                            <img src="../../images/avatar/user.png" alt="avatar"
                              class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                            <div class="card mask-custom">
                              <div class="card-header d-flex justify-content-between p-3"
                                style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                <p class="fw-bold mb-0">Brad Pitt</p>
                                <p class="text-light small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
                              </div>
                              <div class="card-body">
                                <p class="mb-0">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                  labore et dolore magna aliqua.
                                </p>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex justify-content-between mb-4">
                            <div class="card mask-custom w-100">
                              <div class="card-header d-flex justify-content-between p-3"
                                style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                <p class="fw-bold mb-0">Lara Croft</p>
                                <p class="text-light small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
                              </div>
                              <div class="card-body">
                                <p class="mb-0">
                                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                  laudantium.
                                </p>
                              </div>
                            </div>
                            <img src="../../images/avatar/user.png" alt="avatar"
                              class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
                          </li>
                          <li class="d-flex justify-content-between mb-4">
                            <img src="../../images/avatar/user.png" alt="avatar"
                              class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                            <div class="card mask-custom">
                              <div class="card-header d-flex justify-content-between p-3"style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                <p class="fw-bold mb-0">Brad Pitt</p>
                                <p class="text-light small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
                              </div>
                            <div class="card-body">
                              <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                  labore et dolore magna aliqua.
                              </p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </section>
                  </div>
                  <div class="modal-footer">
                  <li class="mb-3">
                    <div class="form-outline form-white">
                    <input type="text" name="msg" id="textAreaExample3" placeholder="Message">
                    </div>
                  </li>
                    <button type="button" class="btn btn-gradient btn btn-primary">Send</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-widget widget-tag mt-8" style="transform: translate(440px, -500px);">
              <h3 class="title">Tags</h3>
              <div class="inner mt-4">
                <div class="filter-group">
                  <a href="#" class="btn btn-outline btn-small radius-3"><span>Art</span></a>
                  <a href="#" class="btn btn-outline btn-small radius-3"><span>Nft</span></a>
                  <a href="#" class="btn btn-outline btn-small radius-3"><span>Cryto</span></a>
                  <a href="#" class="btn btn-outline btn-small radius-3"><span>Creative</span></a>
                  <a href="#" class="btn btn-outline btn-small radius-3"><span>Minimal</span></a>
                  <a href="#" class="btn btn-outline btn-small radius-3"><span>Landing</span></a>
                  <a href="#" class="btn btn-outline btn-small radius-3"><span>Trending</span></a>
                  <a href="#" class="btn btn-outline btn-small radius-3"><span>Development</span></a>
                  <a href="#" class="btn btn-outline btn-small radius-3"><span>Business</span></a>
                </div>
              </div><br>
              Send message
            <!-- Button trigger chat modal -->
            <button type="button" class="btn btn-gradient btn btn-primary" data-bs-toggle="modal" data-bs-target="#project_chat_modal">
              Chat About This Topic ?
            </button>
            </div>
          </aside>
        </div>
        <?php if(isset($_SESSION['userId'])) { ?>
          <div class="styler-1 contact-form-wrapper" style='margin-top: -260px;'>
            <h3 class="mb-1">Leave a Comment</h3>
            <p>Your email address will not be published.</p>
            <div class="form-inner">
              <form method="POST">
                <div class="row">
                  <div class="col-lg-6 mb-4">
                    <div class="input-wrapper">
                      <input type="text" name="cmt_name" id="name" placeholder="Name *">
                    </div>
                  </div>
                  <!-- End .col -->

                  <div class="col-lg-6 mb-4">
                    <input type="text" name="cmt_email" id="email" placeholder="Email *">
                  </div>
                  <!-- End .col -->

                  <div class="col-lg-12 mb-4">
                    <textarea name="cmt_message" id="message" cols="20" rows="6" placeholder="Message *"></textarea>
                  </div>
                  <!-- End .col -->

                  <div class="col-lg-12">
                    <button class="btn btn-gradient btn btn-medium" name = "sub_cmnt_btn" type="submit"><span>Submit</span></button>
                  </div>
                  <!-- End .col -->
                </div>
                <!-- End .row -->
              </form>
              <!-- End form -->
            </div>
            <!-- End .form-inner -->
          </div>
          <?php } ?>
        </div>
        <?php 
          $projectID = $master;

          // Execute the SQL query to fetch comments
          $query = "SELECT
              pc.CommentID,
              pc.UserID,
              u.Username AS CommenterUsername,
              pc.CommentText
          FROM
              ProjectComments pc
          INNER JOIN
              Users u ON pc.UserID = u.UserID
          WHERE
              pc.ProjectID = ?
          ORDER BY
              pc.CommentID DESC";

          $stmt = mysqli_prepare($conn, $query);
          mysqli_stmt_bind_param($stmt, "i", $projectID);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $total_comnt = mysqli_num_rows($result);
        ?>
        <div class="comment-box-wrapper styler-1">
            <h4 class="mb-8"><?php echo $total_comnt." " ?>Comments</h4>
            <ul class="comment-box-inner">
            <?php if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) { ?>
              <li class="single-comment-box d-flex-between ">
                <div class="inner d-flex-start">
                  <a href="#" class="avatar">
                    <img src="images/blog-details/avatar/1.png" alt="author">
                  </a>
                  <!-- End .avatar -->
                  <div class="content">
                    <h5 class="title"><a href="#"><?php echo '<strong>' . $row['CommenterUsername'] . '</strong>';?></a><span class="date-post">Feb 8,2022</span></h5>
                    <p><?php echo '<p>' . $row['CommentText'] . '</p>'; ?></p>
                  </div>
                </div>
                <!-- End .inner -->
                <div class="reply"><i class="ri-arrow-right-line"></i></div>
                <!-- End reply -->
              </li>
              <?php } }else {
              echo 'No comments available for this project.';
            }?>
              <!-- End .single-comment-box -->
            </ul>
          </div>
        <!-- End .col -->
      </div>
    </div>
  </section>
  <!-- End Blog Details area -->
<?php }?>

  <!-- Start Related Blog area -->
  <section class="pb-120">
    <div class="container">
      <div class="section-title">
        <span class="subtitle">Related Blog</span>
        <h2>You May Also Like</h2>
      </div>
      <!-- End .section-title -->

      <div class="slider related-blog-activation  slick-arrow-between slick-gutter-15">
        <div class="single-blog">
          <a href="blog-details.html" class="thumb">
            <img src="images/blog/1.jpg" alt="nft blog">
          </a>
          <div class="content">
            <ul class="meta">
              <li>27 April</li>
              <li><a href="#">Development</a></li>
              <li class="date"><i class="ri-time-line"></i>4 Hour Ago</li>
            </ul>
            <h4 class="title"><a href="blog-details.html">The Window Know to
                say beside you</a></h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Related Blog area -->

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
              <p class="mb-5">OpenSynth.</p>
            </div>
          </div>
          <!-- End .col -->

          <div class="col-lg-2 col-md-6 mb-8">
            <div class="footer-widget">
              <h4>Marketplace</h4>
              <ul class="footer-list-widget">
                <li><a href="create.html">Create</a></li>
                <li><a href="explore-carousel.html">Explore</a></li>
              </ul>
            </div>
          </div>
          <!-- End .col -->

          <div class="col-lg-2 col-md-6 mb-8">
            <div class="footer-widget">
              <h4>Community</h4>
              <ul class="footer-list-widget">
                <!-- <li><a href="blog.html">Blog</a></li> -->
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

<?php
    if(isset($_POST['sub_cmnt_btn'])){ 
      $projectID = $master; 
      $userID = $_SESSION['UserID'];
      $commentText = $_POST['cmt_message']; 
    // SQL insert query
    $cmt_query = "INSERT INTO ProjectComments (ProjectID, UserID, CommentText)
    VALUES ($projectID,$userID ,$commentText );";

    $stmt = mysqli_prepare($conn, $cmt_query);
    mysqli_stmt_bind_param($stmt, "iis", $projectID, $userID, $commentText);

    if (mysqli_stmt_execute($stmt)) {
        echo "Comment inserted successfully.";
    } else {
        echo "Error inserting comment: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
  }


  
  
?>

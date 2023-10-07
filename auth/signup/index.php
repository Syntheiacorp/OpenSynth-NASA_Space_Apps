<?php 
  session_start();
  require_once(__DIR__ . '/../../config/dbConfig.php');
  error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic metas -->
  <meta charset="utf-8" />
  <title>SignUp</title>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="" />

  <!-- Mobile specific metas -->
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Icon fonts -->
  <link rel="stylesheet" href="../../fonts/remixicon.css" />

  <!-- links for favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../images/favicon/favicon.ico" />

  <!-- CSS -->
  <link rel="stylesheet" href="../../css/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="../../css/vendor/slick.css">
  <link rel="stylesheet" href="../../css/vendor/slick-theme.css">

  <!-- Style css -->
  <link rel="stylesheet" href="../../css/style.css" />
  <style>
    .hidden {
      display: none !important;
    }

    /* Add style for valid inputs */
    input.valid {
      border: 1px solid green;
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
    <!-- ... (header content remains the same) ... -->
  </header>
  <!-- End header area -->

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
            <form action="signup.php" method="POST" id="signupForm">
            <?php 
            if(isset($_GET['signup'])) {
              if($_GET['signup'] == 'failed') { 
                  echo "<p style='color: red; margin-top: -5px; margin-bottom: 20px; font-size: 16px'>Signup failed, please check your entries!</p>";
              }
            }
          ?>
            
              <div class="row">

                <div class="col-md-12 mb-4">
                  <div class="field-box">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="text" placeholder="mail@domain.com" required>
                    <label class="error" for="email"></label>
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="field-box">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" name="name" type="text" placeholder="Name" required>
                    <label class="error" for="name"></label>
                  </div>
                </div>
                <!-- End .col -->

                <div class="col-md-6 mb-4">
                  <div class="field-box">
                    <label for="username" class="form-label">Username</label>
                    <input id="username" name="username" type="text" placeholder="Username" required>
                    <label class="error" for="username"></label>
                  </div>
                </div>
                <!-- End .col -->

                <div class="col-md-6 mb-4">
                  <div class="field-box">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password" required>
                    <label class="error" for="password"></label>
                  </div>
                </div>
                <!-- End .col -->

                <div class="col-md-6 mb-4">
                  <div class="field-box">
                    <label for="re-password" class="form-label">Re Password</label>
                    <input id="re-password" name="confirm-password" type="password" placeholder="Password" required>
                    <label class="error" for="confirm-password"></label>
                  </div>
                </div>
                <!-- End .col -->

                <div class="col-md-12 mb-5">
                  <div class="field-box">
                    <label class="checkbox">
                      <input class="form-check-input me-1" type="checkbox" value="" required>
                      I have read terms and conditions and all others policy.
                    </label>
                    <label class="error" for="agree"></label>
                  </div>
                </div>
                <!-- End .col -->

                <div class="col-md-12 mb-4">
                  <div class="field-box">
                    <button name="submit" class="btn btn-gradient w-100 justify-content-center btn-medium {
                        " type="submit"><span>Sign
                        Up</span></button>
                  </div>
                  <div class="mt-3 col-lg-12">
            Already ave an account? <a href="../signin/" class="color-primary">Sign In</a>
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
    <!-- ... (footer content remains the same) ... -->
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
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script>
    $(document).ready(function() {
      // Initialize jQuery validation
      $("#signupForm").validate({
        rules: {
          email: {
            required: true,
            email: true,
            pattern: /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/ // Regex for email validation
          },
          name: "required",
          username: "required",
          password: {
            required: true,
            minlength: 8, // Minimum 8 characters for password
            pattern: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]+$/ // Regex for password validation
          },
          "confirm-password": {
            required: true,
            equalTo: "#password"
          },
          agree: "required"
        },
        messages: {
          email: {
            required: "Please enter your email address",
            email: "Please enter a valid email address",
            pattern: "Invalid email format"
          },
          name: "Please enter your name",
          username: "Please enter a username",
          password: {
            required: "Please enter a password",
            minlength: "Password must be at least 8 characters long",
            pattern: "Password must include at least one number, one symbol, one uppercase, and one lowercase letter"
          },
          "confirm-password": {
            required: "Please confirm your password",
            equalTo: "Passwords do not match"
          },
          agree: "Please accept the terms and conditions"
        },
        errorPlacement: function(error, element) {
          // Display error messages with labels
          var label = $("label[for='" + element.attr("id") + "']");
          label.html(error);
        },
        success: function(label) {
          // Add a class to the valid input elements to change the border color to green
          label.prev().removeClass("error").addClass("valid");
        }
      });

      // Validate on keyup event
      $("input").keyup(function() {
        $(this).valid();
      });
    });
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
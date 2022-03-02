<?php include("connection.php");


session_start();

if (isset($_POST['log_btn'])) {
  $Sname = $_POST['UserName'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM staff WHERE Sname='$Sname'";
  $result = $conn->query($sql);
  $row1 = $result->fetch_assoc();
  $num = mysqli_num_rows($result);
  if($num!=0){
    $sql = "SELECT * FROM staff WHERE Sname='$Sname' && password='$password'";
  }
    $_SESSION['staff_id'] = $row1['staff_id'];

    if ($num == 1) {
      header('location:CERTIFICATE/student.php');
    } else {
      header('location:CERTIFICATE/faculty.php');
      echo '<script>alert("Enter the valid Details ..!!")</script>';
    }
    {
    $sql = "SELECT * FROM f-register WHERE Sname='$Sname' && pasword='$password'";
    $result = $conn->query($sql);
    $row1 = $result->fetch_assoc();
    $_SESSION['staff_id'] = $row1['staff_id'];
    $num = mysqli_num_rows($result);
    if ($num == 1) {
      header('location:CERTIFICATE/faculty.php');
    } else {
      header('location:CERTIFICATE/faculty.php');
      echo '<script>alert("Enter the valid Details ..!!")
        </script>';
    }
  }
} ?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
  <!-- meta charec set -->
  <meta charset="utf-8">
  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- Page Title -->
  <title>Faculty Login</title>
  <!-- Meta Description -->
  <meta name="description" content="Blue One Page Creative HTML5 Template">
  <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
  <meta name="author" content="Muhammad Morshed">
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font -->

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- CSS
		================================================== -->
  <!-- Fontawesome Icon font -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Twitter Bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- jquery.fancybox  -->
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <!-- animate -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/main.css">
  <!-- media-queries -->
  <link rel="stylesheet" href="css/media-queries.css">

  <!-- Modernizer Script for old Browsers -->
  <script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body id="body">

  <!-- preloader -->
  <div id="preloader">
    <img src="img/preloader.gif" alt="Preloader">
  </div>
  <!-- end preloader -->



  <header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars fa-2x"></i>
        </button>
      </div>

      <nav class="collapse navbar-collapse navbar-right" role="navigation">
        <ul  class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li id="nav"><a href="#contact">Contact</a></li>
        </ul>
      </nav>
     

    </div>
  </header>
  <br>
  <br>
  <br>

  <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
    <h2>Faculty Login</h2>
    <div class="devider"><i class="fa fa-star-o fa-lg"></i></div>
  </div>




  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your Sname & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourSname" class="form-label">User Name</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="UserName" class="form-control" id="yourSname" required>
                        <div class="invalid-feedback">Please enter your User Name.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="log_btn">
                        Login
                      </button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="f-register.php">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

      </section>

    </div>
  </main>





  <?php
  include "footer.php";
  ?>

  <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa3x"></i></a>
  <!-- Essential jQuery Plugins
================================================== -->
  <!-- Main jQuery -->
  <script src="js/jquery-1.11.1.min.js"></script>
  <!-- Single Page Nav -->
  <script src="js/jquery.singlePageNav.min.js"></script>
  <!-- Twitter Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- jquery.fancybox.pack -->
  <script src="js/jquery.fancybox.pack.js"></script>
  <!-- jquery.mixitup.min -->
  <script src="js/jquery.mixitup.min.js"></script>
  <!-- jquery.parallax -->
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <!-- jquery.countTo -->
  <script src="js/jquery-countTo.js"></script>
  <!-- jquery.appear -->
  <script src="js/jquery.appear.js"></script>
  <!-- Contact form validation -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryvalidate/1.11.1/jquery.validate.min.js"></script>
  <!-- Google Map -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?
key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
  <!-- jquery easing -->
  <script src="js/jquery.easing.min.js"></script>
  <!-- jquery easing -->
  <script src="js/wow.min.js"></script>
  <!-- <script>
var wow = new WOW ({
boxClass: 'wow', // animated element css class
(default is wow)
animateClass: 'animated', // animation css class
(default is animated)
offset: 120, // distance to the element
when triggering the animation (default is 0)
mobile: false, // trigger animations on
mobile devices (default is true)
live: true // act on asynchronously
loaded content (default is true)
 }
);
wow.init(); 
</script> -->
  <!-- Custom Functions -->
  <script src="js/custom.js"></script>
</body>

</html>
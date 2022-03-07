  
<?php include('forms/facultyServer.php'); ?>


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
  <title>Faculty Register</title>
  <!-- Meta Description -->
  <meta name="description" content="Blue One Page Creative HTML5 Template">
  <meta name="keywords"
    content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
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

  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h4 class="card-title text-center pb-0 fs-4">Create an Account</h4>
                  <p class="text-center small">Enter your personal details to create account</p>
                </div>



                <form  method="post" action="f-register.php" enctype="multipart/form-data" class="row g-3 needs-validation" >
                  
                <?php include('forms/error.php'); ?>

                  <div class="col-12">
                    <label for="yourSname" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend"></span>
                      <input type="text" name="username" class="form-control" id="yourSname" required>
                      <div class="invalid-feedback">Please choose a Username.</div>
                    </div>
                  </div>




                  <div class="col-12">
                    <label for="yourEmail" class="form-label">Your Email</label>
                    <input type="email" name="email" class="form-control" id="yourEmail" required>
                    <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                  </div>


                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Confirm Password</label>
                    <input type="password" name="password_1" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>

                  <div class="col-12">
                    <label for="" class="form-label">Password</label>
                    <input type="password" name="password_2" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please reenter your password!</div>
                  </div>

                  <div class="col-12">
                    <label for="avatar" class="form-label">photo</label>
                    <input type="file" name="profilepic" class="form-control" id="" required>
                    <div class="invalid-feedback">Please upload photo</div>
                  </div>


                  <div class="col-12" id="ftype">
                    <label>Faculty type</label>
                    <div>
                      <select name="UserType" class="form-control" aria-label="Default select example">
                        <option selected>select one</option>
                        <option value="principal">principal</option>
                        <option value="HOD">HOD</option>
                        <option value="teacher">teacher</option>
                      </select>
                    </div>
                  </div>


                  <label>Department</label>

                  <div class="col-12">
                    <select name="Dept_id" class="form-control" aria-label="Default select example">
                      <option selected>select department</option>
                      <option value="1">Computer science</option>
                      <option value="2">Hotal management</option>
                      <option value="3">Commerce</option>
                      <option value="4">Language</option>
                    </select>
                  </div>

                  
                  <div class="teacher box">
                  <label>batch</label>
                    <select name="Batch_id" class="form-control" aria-label="Default select example">
                      <option value="" selected>select batch</option>
                      <option value="1">2019</option>
                      <option value="2">2020</option>
                      <option value="3">2021</option>
                      <option value="4">2022</option>
                    </select>
                  </div>

                  

                  <div class="teacher box">
                  <label>course</label>
                    <select name="Course_id" class="form-control d-none"  aria-label="Default select example">
                      <option value="" selected>select course</option>
                      <option value="1">BCA</option>
                      <option value="2">BSC</option>
                      <option value="3">BSC HM</option>
                      <option value="4">BCOM</option>
                    </select>
                  </div>

              </div>
              <br>



              <!-- <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                  <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and
                      conditions</a></label>
                  <div class="invalid-feedback">You must agree before submitting.</div>
                </div>
              </div> -->
              <div class="col-12">
                <button class="btn btn-primary w-100" type="submit" name="reg_user">Create Account</button>
              </div>
              <div class="col-12">
                <p class="small mb-0">Already have an account? <a href="faculty.php">Log in</a></p>
              </div>
              </form>

            </div>
          </div>

        </div>
      </div>
  </div>

  </section>

  </div>


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
    var wow = new WOW({
      boxClass: 'wow', // animated element css class
      (default is wow)
      animateClass: 'animated', // animation css class
            (default is animated)
      offset: 120, // distance to the element
            when triggering the animation(default is 0)
      mobile: false, // trigger animations on
            mobile devices(default is true)
      live: true // act on asynchronously
      loaded content(default is true)
      }
      );
    wow.init();
  </script> -->
  <!-- Custom Functions -->
  <script src="js/custom.js"></script>


  <script>
$(document).ready(function(){
    $("#ftype").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>

</body>

</html>
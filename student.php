
<?php
include 'connection.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>Student Details</title>		
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

<button type="button" class="navbar-toggle"
data-toggle="collapse" data-target=".navbar-collapse">
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

		 
<section id="facts" class="facts">
      <div class="row">
        <div class="col-lg-6">
	<div class="card">
            <div class="card-body">
						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>Student Details</h2>
							<div class="devider"><i class="fa fa-star-o fa-lg"></i></div>
						</div>
						
						

<form>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div></div>

			<div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Class</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>

		<div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Department</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
		</div>

		<div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Batch</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
		</div>


 <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Current Semester</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>select one</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
	 <option value="4">One</option>
                      <option value="5">Two</option>
                      <option value="6">Three</option>
                    </select>
                  </div>
                </div>




                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">ID</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control">
                  </div>
                </div>
                
		<div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control">
                  </div>
                </div>
                
                
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"></textarea>
                  </div>
                </div>

                 <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>select one</option>
                      <option value="1">Join</option>
                      <option value="2">Disjoin</option>
                    </select>
                  </div>
                </div>



              
<!-- 

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Disabled</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="Read only / Disabled" disabled>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Multi Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" multiple aria-label="multiple select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>


-->
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form>
			</div>
			</div>
			</div>
			</div>
		</div>
</section>
		
		
		
	
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
<script
src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
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

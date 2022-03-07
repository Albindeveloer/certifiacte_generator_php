<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: faculty.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: faculty.php");
}
?>

<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						//echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

<head>
    
        <meta charset="utf-8">
		
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
        
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
         
          <?php if (isset($_SESSION['username'])) : ?>
           <li> <strong><?php echo $_SESSION['username']; ?></strong></li>
           <li> <strong><?php echo $_SESSION['usertype']; ?></strong></li>
          <li ><img src="uploads/<?php echo $_SESSION['avatar'];?>" alt="Avatar" class="img-circle" width="50" height="50"> 
          </li>
          <li>
				<a href="student.php?logout='1'" class="btn btn-primary">
					 Logout
				</a>
			</li>

          <?php endif ?>
        </ul>
      </nav>

 </div>
 </header>


 
 
 

 
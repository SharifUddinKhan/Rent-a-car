<?php include 'includes/db.php';?>
<?php include 'admin/functions.php';?>
<?php ob_start(); ?>
<?php session_start(); ?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Easy Rent</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
   	<link href="loginCss/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>

<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
<!-- End WOWSlider.com HEAD section -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
     <!-- Load jQuery from Google's CDN -->
    <!-- Load jQuery UI CSS  -->
  <!------------Including jQuery Date UI with CSS-------------->
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  
   <!-- jQuery Code executes on Date Format option ----->
   <script src="js/script.js"></script>
   <link rel="stylesheet" href="css/style.css">
   	<script>
	 $(document).ready(function () {
        $("#datepicker").datepicker({
            minDate: 0,
            // ...
        });
    });
	</script>   
  
</head>

<body>

    <!-- Navigation -->
	
	<div>
		
		<div class="header-icon">
		
		</div>
	
	</div>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand" href="index.php"><img alt="Brand" src="projectImage/logo2 (2).png"></i></a>
                <a class="navbar-brand" href="index.php"><big><i>E</i></big>asy <i>Rent</i></a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    
                    
                    <li>
                        <a href="gallery.php">Booking A car</a>
                    </li>
                   
                   
					
                   
                </ul>
				
				
				<ul class="nav navbar-nav navbar-right">

                      <?php if(isset($_SESSION['username'])){?>
                           
                      <?php }else{?>
                             <li>
                              <button type="button" class="btn btn-default navbar-btn"><a href="loginUi.php">Login</a></button>
                            </li>
                       <?php } ?>
                
                   
					
                   
                </ul>
				
				
				
                
                <?php if(isset($_SESSION['username'])){?>
                <span style="color: white;float: right; padding-top: 10px; padding-right:15px;">
                
                    <a class="btn btn-default"  href="viewProfile.php">Hello <?php echo $_SESSION['firstname']; ?></a>
                    <a style="margin-left: 0px;;" class="btn btn-default" href="includes/logout.php"> Logout</a>
                </span>
                <span style="color: white;float: right; padding-top: 15px;"></span>
                <?php } ?>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
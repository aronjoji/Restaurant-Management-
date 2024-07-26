<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from miraclestudio.design/html/delicieux/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 14:51:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Welcome back</title>
		<!-- All Stylesheets -->
		<link href="homepage/css/all-stylesheets.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		
		<![endif]-->
		
	</head>
	
    <?php
include 'conn.php';
session_start();

if (isset($_POST['s2'])) {
    $mname = $_POST['uname'];
    $mpword = $_POST['pword'];
    
    // Create a prepared statement to securely query the database
    $stmt = $con->prepare("SELECT * FROM registration WHERE username=? AND password=?");
    $stmt->bind_param("ss", $mname, $mpword);
    $stmt->execute();
    $user1 = $stmt->get_result();
    
    if ($user1->num_rows === 0) { // No rows were found
        sleep(2);
        echo "<script>alert('Invalid user');window.location.href='login.php';</script>";
    } else {
        $user = $user1->fetch_array();
        $t1 = $user['First_name'];
        $t2 = $user['Last_name'];
        $t3 = $user['email'];
        $t4 = $user['username'];
        $t5 = $user['password'];
        $r = $user['rights'];
        
        $_SESSION['First_name'] = $t1;
        $_SESSION['Last_name'] = $t2;
        $_SESSION['email'] = $t3;
        $_SESSION['uname'] = $t4;
        $_SESSION['pword'] = $t5;
        $_SESSION['rights'] = $r;
        
        if ($r == "admin") {
            header('location: sales.php');
        } else if ($r == "user") {
            header('location: shop.php');
        }
    }
}
?>

	<body>
		<!-- PAGE BORDER STARTS
			========================================================================= -->
		<div id="left"></div>
		<div id="right"></div>
		<div id="top"></div>
		<div id="bottom"></div>
		<!-- /. PAGE BORDER ENDS
			========================================================================= -->
		<!-- PRELOADER STARTS
			========================================================================= --> 
		<div id="preloader">
			<div id="status">
				<div class="logo"><img src="homepage/images/logos/logo-nav.png" alt=""></div>
				<div class="sk-cube-grid">
					<div class="sk-cube sk-cube1"></div>
					<div class="sk-cube sk-cube2"></div>
					<div class="sk-cube sk-cube3"></div>
					<div class="sk-cube sk-cube4"></div>
					<div class="sk-cube sk-cube5"></div>
					<div class="sk-cube sk-cube6"></div>
					<div class="sk-cube sk-cube7"></div>
					<div class="sk-cube sk-cube8"></div>
					<div class="sk-cube sk-cube9"></div>
				</div>
			</div>
		</div>
		<!-- /. PRELOADER ENDS
			========================================================================= -->
		<!-- NAVIGATION STARTS
			========================================================================= -->
			<nav class="navbar yamm navbar-default fill-black normal">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-sm visible-xs light-logo" href="#"><img src="homepage/images/logos/logo-nav.png" alt=""></a>
					<a class="navbar-brand visible-sm visible-xs dark-logo" href="#"><img src="homepage/images/logos/logo-nav-dark.png" alt=""></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav" data-hover="dropdown" data-animations="fadeIn fadeIn fadeInUp fadeInLeft">
						<li class="pull-left"><a class="navbar-brand hidden-sm hidden-xs light-logo" href="#"><img src="homepage/images/logos/logo-nav.png" alt=""></a> <a class="navbar-brand hidden-sm hidden-xs dark-logo" href="#"><img src="homepage/images/logos/logo-nav-dark.png" alt=""></a></li>
						<li class="dropdown shop_cart pull-right">
							
							<ul class="dropdown-menu">
								<li>
									<div class="yamm-content">
										<div class="shop_cart_content">
											<h4>Shopping Cart</h4>
											<div class="cart_items">
												<div class="item clearfix">
													<a href="cart.php"><img src="homepage/images/shop/menu/1.jpg" alt=""></a>
													<div class="item_desc">
														<div class="row1 clearfix">
															<a href="#">Food Name</a>
															<div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
														</div>
													
												<!-- End item -->
												<div class="item clearfix">
													<a href="#"><img src="homepage/images/shop/menu/2.jpg" alt=""></a>
													<div class="item_desc">
														<div class="row1 clearfix">
															<a href="#">Food Name</a>
															<div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
														</div>
														<div class="row2 clearfix">
															<div class="star">
																<ol>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ol>
															</div>
															<span class="item_quantity">x 2</span>													
															<span class="item_price">$12.89</span> 
														</div>
													</div>
												</div>
												<!-- End item -->
												<div class="total-price clearfix"> 
													<span class="caption">Total</span>
													<span class="shop_checkout_price">$150.99</span>
												</div>
												<div class="shop_action clearfix"> 
													<button class="btn btn-dark pull-left">Check out</button>
													<button class="btn2 btn-dark pull-right">View Cart</button>
												</div>
											</div>
											<!-- End cart items -->
										</div>
										<!-- End shop cart content -->
									</div>
								</li>
							</ul>
						</li>
						<li class="reservation pull-right hidden-xs hidden-sm hidden-md"><a href="login.php" class="transparent-grey">Order Now</a></li>
						<li class="social-header pull-right hidden-xs hidden-sm hidden-md"><a href="#" class="transparent-grey"><i class="fa fa-facebook"></i></a> <a href="#" class="transparent-grey"><i class="fa fa-twitter"></i></a> <a href="https://www.instagram.com/aron.joji_/" class="transparent-grey"><i class="fa fa-instagram"></i></a> <a href="#" class="transparent-grey"><i class="fa fa-tripadvisor"></i></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle nav-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME</a>
							
						
						 <li><a href="homepage\menu-shown-all.html" class="nav-menu">MENU </a></li>
							
						</li>
						
						
							<ul class="dropdown-menu">
								<li><a href="homepage/blog.html">Blog</a></li>
								<li><a href="homepage/blog-list.html">Blog List</a></li>
								<li><a href="homepage/blog-grid.html">Blog Grid</a></li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">Blog Sidebar</a>
									<ul class="dropdown-menu">
										<li><a href="homepage/blog-left-sidebar.html">Left</a></li>
										<li><a href="homepage/blog-right-sidebar.html">Right</a></li>
									</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">Blog Details</a>
									<ul class="dropdown-menu">
										<li><a href="homepage/blog-details.html">Slider</a></li>
										<li><a href="homepage/blog-details-image.html">Image</a></li>
										<li><a href="homepage/blog-details-gallery.html">Gallery</a></li>
										<li><a href="homepage/blog-details-lightbox.html">LightBox</a></li>
										<li><a href="homepage/blog-details-youtube.html">Youtube</a></li>
										<li><a href="homepage/blog-details-viemo.html">Viemo</a></li>
										<li><a href="homepage/blog-details-video.html">HTML5 Video</a></li>
										<li><a href="homepage/blog-details-soundcloud.html">Soundcloud</a></li>
										<li><a href="homepage/blog-details-sidebar.html">With Sidebar</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle nav-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SHOP</a>
							<ul class="dropdown-menu">
								
								
								
								<li><a href="shop-my-account.php">Sign up</a></li>
								<li><a href="login.php">Login</a></li>
							</ul>
						</li>
						
						<li><a href="homepage/contact-us.html" class="nav-menu">CONTACT</a></li>
					</ul>
					
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- /. NAVIGATION ENDS
			========================================================================= -->
		<!-- INNER BANNER STARTS
			========================================================================= -->
		<div class="inner-banner title-area text-center image-9">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Login</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">For Sign in our Restaurant</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Home</a> <span>Login</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg ">
			<!-- GET IN TOUCH STARTS
				========================================================================= -->	
			<!-- Google Map Ends -->
			<div class="login-page">			
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="herotext">
								<p class="box-heading animated" data-animation="fadeInUp" data-animation-delay="400">
									<span>Sign In</span>
								</p>
								<div class="description animated" data-animation="fadeInUp" data-animation-delay="600">One morning, when Gregor Samsa woke from troubled dreams, he found himself<br>transformed in his bed into a horrible vermin. </div>
							</div>
						</div>
					</div>
					<form method="post">
						<div class="row animated" data-animation="fadeInUp" data-animation-delay="800">
							<div class="col-lg-6 col-lg-offset-3 center">
								<div class="form-group">
									<input type="text" class="form-control" name="uname" placeholder="User Name">
								</div>
								<div class="form-group">
                     <div class="input-group">
        			 <input type="password" class="form-control" name="pword" id="password" placeholder="Password">
        			<div class="input-group-append">
			
           			 <button class="btn btn-outline-secondary" type="button" id="togglePassword">
               		 <i class="fa fa-eye" aria-hidden="true"></i>
           	 </button>
       			 </div>
    				</div>
					</div>
								<div id='message_post'></div>
								<input class="btn btn-default" type='submit' value='Login' name='s2' id="submitf">
							</div>
						</div>
					</form>
					<div class="row animated" data-animation="fadeInUp" data-animation-delay="1000">
						<div class="col-lg-12">
							<ul class="links">
								<li><a href="shop-my-account.php">-  Create an account</a></li>
								<li><a href="forg.php">-  I've forgotten my password</a></li>
							</ul>
						</div>
					</div>
				</div>		
			</div>
			<!-- /. GET IN TOUCH ENDS
				========================================================================= -->			
			<!-- NEWSLETTER STARTS
				========================================================================= -->  
			<div class="container-fluid newsletter">
				<div class="row row1">
					<div class="col-lg-4 col-lg-offset-4">
						<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="400">
							<h1>STAY UP TO DATE</h1>
							<div class="description">Sign up to  newsletter for the latest on all things Suitsupply</div>
						</div>
						<form class="form-inline animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="form-group">							
								<input type="email" class="form-control" id="newsletter" placeholder="Enter you e-mail Address">
							</div>
							<button type="submit" class="btn btn-default"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>
			<!-- /. NEWSLETTER STARTS
				========================================================================= -->  
		</div>
		<!-- FOOTER STARTS
			========================================================================= -->  
		<footer>
			<div class="container-fluid">
				<div class="row row1">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="logo animated" data-animation="fadeInUp" data-animation-delay="400"><img src="homepage/images/logos/f-logo.png" class="img-responsive center-block" alt=""></div>
						<ul class="social-icons animated" data-animation="fadeInUp" data-animation-delay="600">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
						</ul>
						<div class="totop">
							<a href="#" class="scrollup"><img src="images/icons/to-top/to-top.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<div class="dark-texture-02">
				<div class="container">
					<div class="row row2">
						<div class="col-lg-6 col-md-6">
							<ul class="links">
								<li><a href="#">Home</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">Use of Terms</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="copyright">© 2015 delicieux restaurant is proudly Powered By <a href="#">Mohamed Arafa</a></div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- /. FOOTER ENDS
			========================================================================= -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="homepage/js/jquery-1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="homepage/js/bootstrap.min.js"></script>				
		<script src="homepage/js/bootstrap-dropdownhover.js"></script>		
		<script src="homepage/js/ui/jquery-ui.js"></script>
		
		<!-- Animation --> 
		<script type="text/javascript" src="homepage/js/animation/jquery.appear.js"></script>		
		<!-- Parallax -->
		<script type="text/javascript" src="homepage/js/parallax/jquery.parallax-1.1.3.js"></script> 
		<script type="text/javascript" src="homepage/js/parallax/jquery.localscroll-1.2.7-min.js"></script> 
		<script type="text/javascript" src="homepage/js/parallax/jquery.scrollTo-1.4.2-min.js"></script>
		<!-- ScrollTo --> 
		<script src="js/nav/jquery.nav.js"></script> 		
		<!-- Isotope --> 
		<script type="text/javascript" src="homepage/js/isotope/jquery.isotope.min.js"></script> 
		<script type="text/javascript" src="homepage/js/isotope/custom-isotope-mansory.js"></script>
		<!-- Retina --> 
		<script type="text/javascript" src="homepage/js/retina/retina.js"></script> 
		<!-- Owl Carousel --> 
		<script type="text/javascript" src="homepage/js/owl-carousel/owl.carousel.js"></script>
		<!-- FitVids --> 
		<script type="text/javascript" src="homepage/js/fitvids/jquery.fitvids.js"></script>
		<!-- Magnific Popup core JS file -->
		<script type="text/javascript" src="homepage/js/magnific-popup/jquery.magnific-popup.js"></script>		
		<!-- AJAX Contact Form --> 			
		<script type="text/javascript" src="homepage/js/contact/contact-form.js"></script>
		<!-- AJAX Reservation Form --> 			
		<script type="text/javascript" src="homepage/js/contact/reservation.js"></script>
		<!-- Custom JS -->
		<script src="homepage/js/custom/custom.js"></script>
		<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        var passwordInput = document.getElementById('password');
        var icon = this.querySelector('i');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
</script>

	</body>
	

<!-- Mirrored from miraclestudio.design/html/delicieux/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 14:51:26 GMT -->
</html>
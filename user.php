<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from miraclestudio.design/html/delicieux/menu-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 14:51:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Delicieux - Exquisite Restaurant HTML Template</title>
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
$id=$_GET['id'];
$cres=mysqli_query($con,"select * from addpr where product_id='$id'");
$data=mysqli_fetch_array($cres);
if(isset($_POST['submit']))
{
	$mq=$_POST['q'];
	$pn=$data['pname'];
$pr=$data['price'];
$t=$mq*$pr;
$ph=$data['photo'];
$u=$_SESSION['uname'];
$n=mysqli_query($con,"insert into cart (username,pname,quantity,price,total,photo) values ('$u','$pn','$mq','$pr','$t','$ph')");
header('location:shop.php');

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
						<li class="pull-left"><a class="navbar-brand hidden-sm hidden-xs light-logo" href="#"><img src="homepage/images/logos/logo-nav.png" alt=""></a> <a class="navbar-brand hidden-sm hidden-xs dark-logo" href="#"><img src="images/logos/logo-nav-dark.png" alt=""></a></li>
                        <li class="dropdown shop_cart pull-right">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>2</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="yamm-content">
										<div class="shop_cart_content">
											<h4>Shopping Cart</h4>
											<div class="cart_items">
												<div class="item clearfix">
													<a href="#"><img src="homepage/images/shop/menu/1.jpg" alt=""></a>
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
                      <li class="reservation pull-right hidden-xs hidden-sm hidden-md"><a href="homepage/reservation.html" class="transparent-grey">Book Now</a></li>
                        <li class="social-header pull-right hidden-xs hidden-sm hidden-md"><a href="#" class="transparent-grey"><i class="fa fa-facebook"></i></a> <a href="#" class="transparent-grey"><i class="fa fa-twitter"></i></a> <a href="#" class="transparent-grey"><i class="fa fa-instagram"></i></a> <a href="#" class="transparent-grey"><i class="fa fa-tripadvisor"></i></a></li>
						<li class="dropdown">
							<a href="homepage.php" class="dropdown-toggle nav-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">Multiple Page</a>
									<ul class="dropdown-menu">
										<li><a href="homepage/index_fullscreen_fade.html">Fullscreen Fade</a></li>
										<li><a href="index_fullscreen.html">Fullscreen Slider</a></li>
										<li><a href="index_fullscreen_interactive.html">Fullscreen Interactive</a></li>
										<li><a href="index_fullscreen_rotating_words.html">Fullscreen Rotating Words</a></li>
										<li><a href="index_fullwidth_fade.html">Fullwidth Fade</a></li>
										<li><a href="index_fullwidth_slider.html">Fullwidth Slider</a></li>
										<li><a href="index_fullwidth_carousel.html">Fullwidth Carousel</a></li>
										<li><a href="homepage/index_premium_carousel.html">Premium Carousel</a></li>
										<li><a href="homepage/index_zooming.html">Fullscreen Zooming</a></li>
										<li><a href="homepage/index_html5_video.html">HTML5 Video</a></li>
										<li><a href="homepage/index_youtube.html">YouTube Video</a></li>
										<li><a href="homepage/index_viemo.html">Vimeo Video</a></li>
									</ul>
								</li>                                
                                <li class="dropdown-submenu">
									<a tabindex="-1" href="#">One Page</a>
									<ul class="dropdown-menu">
										<li><a href="homepage/index_onepage_fade.html">Fullscreen Fade</a></li>
										<li><a href="index_onepage_fullscreen.html">Fullscreen Slider</a></li>
										<li><a href="index_onepage_interactive.html">Fullscreen Interactive</a></li>
										<li><a href="index_onepage_rotating_words.html">Fullscreen Rotating Words</a></li>
										<li><a href="index_onepage_fullwidth_fade.html">Fullwidth Fade</a></li>
										<li><a href="index_onepage_fullwidth_slider.html">Fullwidth Slider</a></li>
										<li><a href="index_onepage_fullwidth_carousel.html">Fullwidth Carousel</a></li>
										<li><a href="index_onepage_premium_carousel.html">Premium Carousel</a></li>
										<li><a href="index_onepage_zooming.html">Fullscreen Zooming</a></li>
										<li><a href="index_onepage_html5_video.html">HTML5 Video</a></li>
										<li><a href="index_onepage_youtube.html">YouTube Video</a></li>
										<li><a href="index_onepage_viemo.html">Vimeo Video</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle nav-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MENU</a>
						  <ul class="dropdown-menu">
								<li><a href="our-menu.html">Our Menu</a></li>
								<li><a href="menu-grid.html">Menu Grid</a></li>
								<li><a href="menu-shown-all.html">Menu Shown All</a></li>
								<li><a href="homepage/menu-details.html">Menu Details</a></li>
							</ul>
						</li>
					  
					  <li><a href="homepage/reservation.html" class="nav-menu">RESERVATION</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle nav-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOG</a>
							<ul class="dropdown-menu">
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-list.html">Blog List</a></li>
								<li><a href="blog-grid.html">Blog Grid</a></li>
                                <li class="dropdown-submenu">
									<a tabindex="-1" href="#">Blog Sidebar</a>
									<ul class="dropdown-menu">
										<li><a href="blog-left-sidebar.html">Left</a></li>
										<li><a href="blog-right-sidebar.html">Right</a></li>
									</ul>
								</li>
                                <li class="dropdown-submenu">
									<a tabindex="-1" href="#">Blog Details</a>
									<ul class="dropdown-menu">
										<li><a href="blog-details.html">Slider</a></li>
										<li><a href="blog-details-image.html">Image</a></li>
										<li><a href="blog-details-gallery.html">Gallery</a></li>
										<li><a href="blog-details-lightbox.html">LightBox</a></li>
										<li><a href="blog-details-youtube.html">Youtube</a></li>
										<li><a href="blog-details-viemo.html">Viemo</a></li>
										<li><a href="blog-details-video.html">HTML5 Video</a></li>
										<li><a href="blog-details-soundcloud.html">Soundcloud</a></li>
                                        <li><a href="blog-details-sidebar.html">With Sidebar</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle nav-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SHOP</a>
					  <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-sidebar.html">With Sidebar</a></li>
								<li><a href="shop-cart.html">Carts</a></li>
								<li><a href="shop-wishlist.html">Wishlist</a></li>
								<li><a href="shop-checkout.html">Checkout</a></li>
								<li><a href="shop-my-account.php">Sign Up</a></li>
								<li><a href="login.php">Login</a></li>
							</ul>
						</li>
				    <li class="visible-xs"><a href="#">SHOPPING CART</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle nav-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES</a>
							<ul class="dropdown-menu">
                               <li><a href="homepage/about-us.html">About</a></li>
                                <li><a href="homepage/gallery.html">Gallery</a></li>
								<li><a href="our-team.html">Team</a></li>
								<li><a href="events.html">Events</a></li>
								<li><a href="error-page.html">Error Page</a></li>
								<li><a href="coming-soon.html">Coming Soon</a></li>
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
		<div class="inner-banner title-area text-center image-5">
			<div class="container title-area-content">
				<h1 class="animated" data-animation="fadeInUp" data-animation-delay="200">Menu</h1>
				<h2 class="animated" data-animation="fadeInDown" data-animation-delay="200">BROWSE ALL DELICIOUS FOODS CATEGORY</h2>
				<div class="line animated" data-animation="fadeInDown" data-animation-delay="400"></div>
                <div class="bread-crumb"><a href="#">Home</a> <a href="#">Menu</a> <span>Menu Details</span></div>
			</div>
		</div>
		<!-- /. INNER BANNER STARTS
			========================================================================= -->
		<div class="white-bg">
			<!-- MENU DETAILS STARTS
				========================================================================= -->  
			<div class="container menu-details">
				<div class="row">
					<!-- Flex Slider Starts -->
					<div class="col-lg-6 col-md-6 pics-gallery" data-animation="fadeInUp" data-animation-delay="200">
						<div id="slider" class="flexslider">
							<ul class="slides">
								<li>
									<img src="<?php echo $data['photo'];?>" alt="" >
									<a class="image-popup-vertical-fit" href="<?php echo $data['photo'];?>" title="Lorem ipsum dolor sit amet">
										<!-- Picture Overlay Starts -->
										<div class="picture-overlay">
											<div class="icons">
												<div><span class="icon"><i class="fa fa-search"></i></span></div>
											</div>
										</div>
										<!-- Picture Overlay Ends -->
									</a>
								</li>
								<li>
									<img src="<?php echo $data['photo'];?>" alt="" >
									<a class="image-popup-vertical-fit" href="<?php echo $data['photo'];?>" title="Lorem ipsum dolor sit amet">
										<!-- Picture Overlay Starts -->
										<div class="picture-overlay">
											<div class="icons">
												<div><span class="icon"><i class="fa fa-search"></i></span></div>
											</div>
										</div>
										<!-- Picture Overlay Ends -->
									</a>
								</li>
								<li>
									<img src="<?php echo $data['photo'];?>" alt="">
									<a class="image-popup-vertical-fit" href="<?php echo $data['photo'];?>" title="Lorem ipsum dolor sit amet">
										<!-- Picture Overlay Starts -->
										<div class="picture-overlay">
											<div class="icons">
												<div><span class="icon"><i class="fa fa-search"></i></span></div>
											</div>
										</div>
										<!-- Picture Overlay Ends -->
									</a>
								</li>
								<li>
									<img src="<?php echo $data['photo'];?>" alt="">
									<a class="image-popup-vertical-fit" href="<?php echo $data['photo'];?>" title="Lorem ipsum dolor sit amet">
										<!-- Picture Overlay Starts -->
										<div class="picture-overlay">
											<div class="icons">
												<div><span class="icon"><i class="fa fa-search"></i></span></div>
											</div>
										</div>
										<!-- Picture Overlay Ends -->
									</a>
								</li>
								<li>
									<img src="<?php echo $data['photo'];?>" alt="" >
									<a class="image-popup-vertical-fit" href="<?php echo $data['photo'];?>" title="Lorem ipsum dolor sit amet">
										<!-- Picture Overlay Starts -->
										<div class="picture-overlay">
											<div class="icons">
												<div><span class="icon"><i class="fa fa-search"></i></span></div>
											</div>
										</div>
										<!-- Picture Overlay Ends -->
									</a>
								</li>
								<li>
									<img src="<?php echo $data['photo'];?>" alt="">
									<a class="image-popup-vertical-fit" href="<?php echo $data['photo'];?>" title="Lorem ipsum dolor sit amet">
										<!-- Picture Overlay Starts -->
										<div class="picture-overlay">
											<div class="icons">
												<div><span class="icon"><i class="fa fa-search"></i></span></div>
											</div>
										</div>
										<!-- Picture Overlay Ends -->
									</a>
								</li>
							</ul>
						</div>
						<div id="carousel" class="flexslider">
							<ul class="slides">
								<li>
									<img src="<?php echo $data['photo'];?>" alt="">
								</li>
								<li>
									<img src="<?php echo $data['photo'];?>" alt="">
								</li>
								<li>
									<img src="<?php echo $data['photo'];?>" alt="">
								</li>
								<li>
									<img src="<?php echo $data['photo'];?>" alt="">
								</li>
								<li>
									<img src="<?php echo $data['photo'];?>" alt="">
								</li>
								<li>
									<img src="<?php echo $data['photo'];?>" alt="">
								</li>
							</ul>
						</div>
					</div>
					<!-- Flex Slider Ends -->
					<div class="col-lg-6 col-md-6 animated" data-animation="fadeInUp" data-animation-delay="400">
						<div class="herotext clearfix">
							<div class="pull-left">
								<h1><?php echo $data['pname'];?></h1>
								<div class="line"></div>
								<div class="star">
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
							<div class="price pull-right"><?php echo $data['price'];?></div>
						</div>
						<div class="description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br><br> 
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
							Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						</div>
						<!-- Add to Cart Starts -->	
						<form method="post">
						<div class="row add-to-cart">
							<div class="col-lg-6">
								<div>

									<select name="q">
										<?php
										
										for($i=1; $i<=$data['quantity'];$i++)
										{
											?>
										
										<option value="<?php echo $i;?>"><?php echo $i;?></option>
										<?php
										}
										?>

									</select>
								</div>

								<div class="button"><a href="" class="fill-orange"><button type="submit" name="submit">Add to cart</button></a></div>
									
							</div>
							
							<div class="col-lg-6">
								<ul class="social-icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						</form>
						<!-- Add to Cart Ends -->
					</div>
				</div>
				<div class="row tab-style animated" data-animation="fadeInUp" data-animation-delay="200">
					<div class="col-lg-12">
						<!-- Nav tabs -->
						<ul class="nav1 nav-justified" role="tablist">
							<li role="presentation" class="active">
								<a href="#description" aria-controls="description" role="tab" data-toggle="tab">
									<div class="caption">DESCRIPTION</div>
								</a>
							</li>
							<li role="presentation">
								<a href="#review" aria-controls="review" role="tab" data-toggle="tab">
									<div class="caption">REVIEW[10]</div>
								</a>
							</li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="description">
								<div class="description">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="review">
								<div class="description">
									<!-- Comments Starts -->
									<div class="row comments">
										<div class="col-lg-12">
											<ul class="media-list">
												<!-- Media Start with nested Comments Starts -->
												<li class="media">
													<div class="media-left">
														<a href="#">
														<img src="images/blog/users/1.jpg" class="media-object" alt="" >
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">Fatma Mahmoud</h4>
														<div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> Posted on 5 Dec, 2015 at 2:15 pm</div>
														<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae pre vitae dicta sunt explicabo. 
														</p>
														<a href="#" class="reply"><i class="fa fa-reply" aria-hidden="true"></i></a>
														<!-- Nested media object -->
														<div class="media">
															<div class="media-left">
																<a href="#">
																<img src="homepage/images/blog/users/2.jpg" class="media-object" alt="" >
																</a>
															</div>
															<div class="media-body">
																<h4 class="media-heading">Amany Arafa</h4>
																<div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> Posted on 5 Dec, 2015 at 2:15 pm</div>
																<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae pre vitae dicta sunt explicabo. </p>
																<a href="#" class="reply"><i class="fa fa-reply" aria-hidden="true"></i></a>													
															</div>
														</div>
													</div>
												</li>
												<!-- Media Start with nested Comments Ends -->
												<!-- Media Single Comment Starts -->
												<li class="media">
													<div class="media-left">
														<a href="#">
														<img src="images/blog/users/3.jpg" class="media-object" alt="" >
														</a>
													</div>
													<div class="media-body">
														<h4 class="media-heading">Jameel Ameen</h4>
														<div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> Posted on 5 Dec, 2015 at 2:15 pm</div>
														<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae pre vitae dicta sunt explicabo. </p>
														<a href="#" class="reply"><i class="fa fa-reply" aria-hidden="true"></i></a>
													</div>
												</li>
												<!-- Media Single Comment Starts -->
											</ul>
										</div>
									</div>
									<!-- Comments Ends -->
									<!-- Leave a Reply Starts -->
									<div class="row leave-a-reply">
										<div class="col-lg-12">
											<h1>Add Your Review</h1>
											<div class="line"></div>
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="Name" placeholder="Full Name *">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="email" class="form-control" id="Email" placeholder="Email Address *">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4">
													<div class="form-group">
														<input type="text" class="form-control" id="Website" placeholder="Subject *">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<textarea class="form-control" rows="5" placeholder="Comment *"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<button type="submit" class="btn btn-default">Submit</button>
												</div>
											</div>
										</div>
									</div>
									<!-- Leave a Reply Ends -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /. MENU DETAILS ENDS
				========================================================================= -->
			<!-- RELATED RECIPE STARTS
				========================================================================= -->
			<div class="related-recipe light-grey-bg">
				<div class="container">
					<div class="row">
						<div class="herotext animated" data-animation="fadeInUp" data-animation-delay="400">
							<p class="box-heading">
								<span>Related Recipies</span>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 animated" data-animation="fadeInUp" data-animation-delay="600">
							<div class="picture">
								<img src="homepage/images/related-recipies/1.jpg" class="img-responsive" alt=""/>                       
								<!-- Picture Overlay Starts -->
								<div class="portfolio-overlay-2">
									<div class="icons">
										<div>
											<h1>Food Name</h1>
											<p class="line"></p>
											 <p class="price-item"><span>35<sup>$</sup></span></p>
                                            <p class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></p>
											<span class="icon"><a class="#">Add to cart</a> | <a class="#">Detail</a></span>
										</div>
									</div>
								</div>
								<!-- Picture Overlay Ends -->
							</div>
						</div>
						<div class="col-lg-4 col-md-4 animated" data-animation="fadeInUp" data-animation-delay="800">
							<div class="picture">
								<img src="homepage/images/related-recipies/2.jpg" class="img-responsive" alt=""/>                       
								<!-- Picture Overlay Starts -->
								<div class="portfolio-overlay-2">
									<div class="icons">
										<div>
											<h1>Food Name</h1>
											<p class="line"></p>
											 <p class="price-item"><span>35<sup>$</sup></span></p>
                                            <p class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></p>
											<span class="icon"><a class="#">Add to cart</a> | <a class="#">Detail</a></span>
										</div>
									</div>
								</div>
								<!-- Picture Overlay Ends -->
							</div>
						</div>
						<div class="col-lg-4 col-md-4 animated" data-animation="fadeInUp" data-animation-delay="1000">
							<div class="picture">
								<img src="homepage/images/related-recipies/3.jpg" class="img-responsive" alt=""/>                       
								<!-- Picture Overlay Starts -->
								<div class="portfolio-overlay-2">
									<div class="icons">
										<div>
											<h1>Food Name</h1>
											<p class="line"></p>
											 <p class="price-item"><span>35<sup>$</sup></span></p>
                                            <p class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-empty"></i></p>
											<span class="icon"><a class="#">Add to cart</a> | <a class="#">Detail</a></span>
										</div>
									</div>
								</div>
								<!-- Picture Overlay Ends -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /. RELATED RECIPIE STARTS
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
							<a href="#" class="scrollup"><img src="homepage/images/icons/to-top/to-top.png" alt=""></a>
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
		<script src="homepage/js/nav/jquery.nav.js"></script> 		
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
		<!-- FlexSlider -->
		<script defer src="homepage/js/flexslider/jquery.flexslider.js"></script>
		<script>
			$(window).load(function() {
				// The slider being synced must be initialized first
				$('#carousel').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					itemWidth: 100,
					itemMargin: 5,
					asNavFor: '#slider'
				});

				$('#slider').flexslider({
					animation: "slide",
					controlNav: false,
					animationLoop: false,
					slideshow: false,
					pausePlay: false,
					mousewheel: true,
					sync: "#carousel"
				});
			});
		</script>
		<!-- Custom JS -->
		<script src="homepage/js/custom/custom.js"></script>
	</body>

<!-- Mirrored from miraclestudio.design/html/delicieux/menu-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Sep 2023 14:51:19 GMT -->
</html>
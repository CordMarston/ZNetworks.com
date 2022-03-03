<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Z_Networks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	 <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://znetworks.com/css/bootstrap.css">
	<link rel="stylesheet" href="https://znetworks.com/css/znws.css">
	<link rel="stylesheet" href="https://znetworks.com/css/all.min.css">
	<link rel="stylesheet" href="https://znetworks.com/css/jquery-confirm.css">
	<script src="https://znetworks.com/js/jquery.min.js"></script>
	<script src="https://znetworks.com/js/bootstrap.min.js"></script>
	<script src="https://znetworks.com/js/my.js"></script>
	<script src="https://znetworks.com/js/jquery-confirm.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'z-networks' ); ?></a>

<header class="d-none d-md-block pt-1">
	<div class="container">
		<div class="row py-4">
			<div class="col-md-3 ">
				<a href="/"><?php the_custom_logo(); ?></a>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4 mt-1">
				<div class="row d-flex">
					<div class="col-md-2"></div>
					<div class="col-2 text-rc pt-1">
						<i class="fas fa-envelope fa-2x header-icon"></i>
					</div>
					<div class="col-8 font-14 text-right mobile-center pt-1">Helpdesk: helpdesk@znws.com<br/>Sales: sales@znws.com</div>
				</div>
			</div>
			<div class="col-md-4 mt-1">
				<div class="row d-flex">
				<div class="col-md-2"></div>
					<div class="col-3 text-right pt-1">
						<i class="fas fa-phone fa-2x header-icon"></i>
					</div>
					<div class="col-7 font-14 text-right pt-1">Helpdesk: 1(206) 774-0237<br/>Sales: 1(800) 525-6504</div>
				</div>
			</div>
		</div>
	</div>
</header>

<nav class="navbar navbar-expand-lg navbar-light" id="znws-navbar">
	<div class="container d-flex align-items-center">
		<div class="row-fluid d-md-none">
			<div class="col-9 d-inline-block float-left">
			<a href="index.php"><img src="img/znetworks-logo.png" style="width:100%;"></a>
			</div>
			<div class="col-3 d-inline-block float-right text-right align-right pt-3">
			<div style="float:right;">
			<button class="navbar-toggle border-0" type="button" data-toggle="collapse" data-target="#znws-nav" aria-controls="znws-nav" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
			</div>
			</button>
			</div>
		</div>
	  <p class="button-custom order-lg-last mb-0 d-none d-md-block"><a href="#consult" class="btn btn-cust-orange py-2 px-2">Get a Quote</a></p>
	  <div class="collapse navbar-collapse" id="znws-nav">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active mr-2"><a href="/" class="nav-link pl-0" title = "/">Home</a></li>
			<li class="nav-item mx-2 dropdown">
					<!-- dropdown for IT Services-->
				<div class="it-dropdown">
					<a href = "/it-support" class="nav-link dropdown" data-toggle="dropdown" aria-expanded = "false" title="Services">Services</a>
					  	<div class="it-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuLink">
						  <a class="dropdown-item" href="/it-support">IT Services</a>
					  		<div class="dropright">
  								<div class="who-dropdown" data-toggle="dropdown">
									  <div class = "dropdown-item" data-bs-toggle = "dropdown">Who We Work With</div>
    								</div>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								  		<a class="dropdown-item" href="/it-support#architects">Architects</a>
								  		<a class="dropdown-item" href="/it-support#healthcare">Healthcare</a>
								  		<a class="dropdown-item" href="/it-support#nonprofit">Non Profit</a>
										<a class="dropdown-item" href="/it-support#wealthmng">Wealth Management</a>
										<a class="dropdown-item" href="/it-support#edu">EDU</a>
									</div>
							  	</div>
						  <!-- <a class="dropdown-item" href="#">Cloud</a> -->
						  <!-- <a class="dropdown-item" href="#">Cyber Security</a> -->
						</div>
				</div>
			</li>
			<li class="nav-item mx-2 dropdown">
				<div class="us-dropdown">
					<a href="/about" data-toggle="dropdown" class="nav-link" title = "About Us">About Us</a>
					  	<div class="us-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a href="/about" class = "dropdown-item">Overview of Z Networks</a>
						  	<a class="dropdown-item" href="/about#locations">Locations</a>
						  	<a class="dropdown-item" href="/about#employees">Our Team</a>
						  	<a class="dropdown-item" href="/about#testimony">What Our Clients Say</a>
						</div>
				</div>
			</li>
			<li class="nav-item mx-2 dropdown">
			<div class="career-dropdown">
					<a href="/careers" data-toggle="dropdown" class="nav-link" title="Careers">Careers</a>
					  	<div class="career-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuLink">
						  <a class="dropdown-item" href="/careers">Why You Should Work Here</a>
						  <a class="dropdown-item" href="/careers#benefits">Benefits</a>
						  <a class="dropdown-item" href="/careers#careers">Career Opportunities</a>
						  <a class="dropdown-item" href="/careers#training">Training Opportunities</a>
						</div>
				</div>
			</li>
			<!-- <li class="nav-item active mr-2"><a href="#" class="nav-link pl-0">Articles/Blog</a></li> -->
			<li class="nav-item mx-2"><a href="https://dashboard.znetworks.biz" class="nav-link" title="Client Login">Client Login</a></li>
		</ul>
	  </div>
	</div>
</nav>

	<div id="content" class="site-content">

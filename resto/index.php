<?php
define('DIR','../');
require_once DIR.'config.php';

$control=new Controller();
$admin=new Admin();
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fusion  | Home</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>


<style>
	.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
}

/* The actual popup (appears on top) */
.popup .popuptext {
  visibility: hidden;
  width: 200px;
  background-color: #555;
  color: powderblue;
  text-align: center;
  border-radius: 6px;
  padding: 20px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 10px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class when clicking on the popup container (hide and show the popup) */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

</style>

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<!-- <div class="sidenav-content">
		<p>
			Kuncen WB1, Wirobrajan 10010, DIY
		</p>
		<p>
			<span class="fs-16 primary-color">(+68) 120034509</span>
		</p>
		<p>info@yourdomain.com</p>
	</div> -->
</div>	<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<i class="fas fa-search text-grey" aria-hidden="true"></i>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
 	
</div>	<div id="canvas-overlay"></div>
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">House <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>

                    
                </div>
            </ul>
            
            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                <img src="img/logo.png" alt="">
            </a>
            <ul class="navbar-nav d-flex justify-content-between">
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="menu.html">Products</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Registration
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="special-dishes.html">Vendor</a>
                          <a class="dropdown-item" href="special-dishes.html">Customer</a>
                          <a class="dropdown-item" href="special-dishes.html">Delivery</a>
                        </div>
                    </li>
                </div>
                <!-- li class="nav-item">
                    <a id="side-search-open" class="nav-link" href="#">
                        <span class="lnr lnr-magnifier"></span>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>		<div class="hero">
  <div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-lg-6 hero-left">
            <h1 class="display-5 mb-3">One click and there you go,<br></h1>
		    <h1 class="display-4 mb-5">Delicious foods and home-made products on your door-step!<br></h1>
		    <div class="mb-2">
		    	<a class="btn btn-primary btn-shadow btn-lg" href="#" role="button">Explore Products</a>
			    <a class="btn btn-icon btn-lg" href="img/fushionvideo.mp4" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true">
			    	<span class="lnr lnr-film-play"></span>
			    	Play Video
			    </a>
		    </div>
		   
		    <ul class="hero-info list-unstyled d-flex text-center mb-0">
		    	<li class="border-right">
		    		<span class="lnr lnr-rocket"></span>
		    		<h5>
		    			<div class="popup" onclick="myFunction1()">Fast Delivery
  							<span class="popuptext" id="myPopup1">We ensure fast and secure delivery of your product on time.</span>
						</div>
		    			
		    		</h5>
		    	</li>
		    	<li class="border-right">
		    		<span class="lnr lnr-leaf"></span>
		    		<h5>
		    			<div class="popup" onclick="myFunction2()">Food & Products
  							<span class="popuptext" id="myPopup2">We sell food and products that can be delivered based on the type of product it is. </span>
						</div>
		    			 
		    		</h5>
		    	</li>
		    	<li class="">
		    		<span class="lnr lnr-home"></span>
		    		<h5>
		    			<div class="popup" onclick="myFunction3()">Home-Made
  							<span class="popuptext" id="myPopup3">We provide 100% natural home-made products.</span>
						</div>
		    			
		    		</h5>
		    	</li>
		    </ul>

	    </div>
	    <div class="col-lg-6 hero-right">
	    	<div class="owl-carousel owl-theme hero-carousel">
			    <div class="item">
			    	<img class="img-fluid" src="img/candle3.jfif" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="img/sweet1.jfif" alt="">
			    </div>
			    <div class="item">
			    	<img class="img-fluid" src="img/scrunchie1.jfif" alt="">
			    </div>
                <div class="item">
                    <img class="img-fluid" src="img/chair1.jfif" alt="">
                </div>
                <div class="item">
			    	<img class="img-fluid" src="img/sweet4.jfif" alt="">
			    </div>
                <div class="item">
                    <img class="img-fluid" src="img/scrunchie2.jfif" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid" src="img/chair2.jfif" alt="">
                </div>
                <div class="item">
                    <img class="img-fluid" src="img/candle5.png" alt="">
                </div>
			</div>
	    </div>
	</div>
  </div>
</div>		<!-- Welcome Section -->
<section id="gtco-welcome" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url(img/rose1.png);">
                    
                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">
                        <span class="subheading">
                            About
                        </span>
                        <h2>
                            Welcome to Fusion
                        </h2>
                    </div>
                    <div class="pl-lg-5 ml-md-5">
                        <p>We help home-made product vendors to promote their products through our platform which would help them to reach out more people thereby increasing incentives. We also offer delivery services for customers to their specified location.</p>
                        <h3 class="mt-5">Products that we sell</h3>
                        <div class="row">
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="img/few1.png" />
                                    <h6>Scrunchies</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="img/few2.jfif" />
                                    <h6>Sweets</h6>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="thumb-menu">
                                    <img class="img-fluid img-cover" src="img/candle1.jfif"/>
                                    <h6>Candles</h6>
                                </a>
                            </div>
                             <a href="#" class="btn-primary mt-3">More Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Welcome Section -->		<!-- Special Dishes Section -->
<section id="gtco-special-dishes" class="bg-grey section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Partnership
                </span>
                <h2>
                    We work with mainly 3 sectors of people
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">01.</h2>
                    <div class="dishes-text">
                        <h3><span></span>Vendors</h3>
                        <p class="pt-3">We help vendors to sell ther products by promoting their busines which would increase their business and would reach out many people.</p>
                        <h3 class="special-dishes-price"><a href="">Click here to become a vendor!</a></h3>
                        <a href="#" class="btn-primary mt-3">View More </a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="img/1.jpg" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="img/2.jpg" alt="" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">02.</h2>
                    <div class="dishes-text">
                        <h3><span></span> Customers</h3>
                        <p class="pt-3">We help users to buys the products and there will also be an delivery option.</p>
                        <h3 class="special-dishes-price"><a href="">Click here to register!</a></h3>
                        <a href="#" class="btn-primary mt-3">View More <span><i class="fa fa-long-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">03.</h2>
                    <div class="dishes-text">
                        <h3><span></span>Delivery</h3>
                        <p class="pt-3">We help customers, by delivering their products to their specified location on time via an delivery agent.</p>
                        <h3 class="special-dishes-price"><a href="">Click here to become an delivery agent!</a></h3>
                        <a href="#" class="btn-primary mt-3">View More </a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="img/3.jpg" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Special Dishes Section -->		<!-- Menu Section -->
<!-- <section id="gtco-menu" class="section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Specialties
                        </span>
                        <h2>
                            Our Menu
                        </h2>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Breakfast</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Breakfast</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 menu-wrap">
                    <div class="heading-menu">
                        <h3 class="text-center mb-5">Breakfast</h3>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                    <div class="menus d-flex align-items-center">
                        <div class="menu-img rounded-circle">
                            <img class="img-fluid" src="img/breakfast-1.jpg" alt="">
                        </div>
                        <div class="text-wrap">
                            <div class="row align-items-start">
                                <div class="col-8">
                                    <h4>Egg Sandwich</h4>
                                </div>
                                <div class="col-4">
                                    <h4 class="text-muted menu-price">$30</h4>
                                </div>
                            </div>
                            <p>Meat Ball, Mie</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End of menu Section -->		<!-- Testimonial Section-->
<section id="gtco-testimonial" class="overlay bg-fixed section-padding" style="background-image: url(img/testi-bg.jpg);">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="heading">
                    Feedback
                </span>
                <h2>
                    Happy Customer
                </h2>
            </div>
            <div class="row">
                <!-- Testimonial -->
                <div class="testi-content testi-carousel owl-carousel">
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p class="testi-author">John Doe</p>
                     
                    </div>
                    <div class="testi-item">
                        <i class="testi-icon fa fa-3x fa-quote-left"></i>
                        <p class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci non doloribus ut, alias doloremque perspiciatis.</p>
                        <p class="testi-author">Mary Jane</p>
                      
                    </div>
                </div>
                <!-- End of Testimonial -->
            </div>
        </div>
    </div>
</section>
<!-- End of Testimonial Section-->		<!-- Team Section -->
<!-- <section id="gtco-team" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Specialties
                </span>
                <h2>
                    Our Team
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/chef-1.jpg" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Aaron Patel</h4>
                            <p class="mb-1">CEO</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/chef-2.jpg" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Daniel Tebas</h4>
                            <p class="mb-1">Chef</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card mb-5">
                        <img class="img-fluid" src="img/chef-3.jpg" alt="">
                        <div class="team-desc">
                            <h4 class="mb-0">Jon Snow</h4>
                            <p class="mb-1">Chef</p>
                            <ul class="list-inline mb-0 team-social-links">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End of Team Section -->		<!-- Reservation Section -->
<!-- <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(img/reservation-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-content bg-white p-5 shadow">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Reservation
                        </span>
                        <h2>
                            Book Now
                        </h2>
                    </div>
                    <form method="post" name="contact-us" action="">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone">
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" placeholder="Date" />
                                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                        <div class="input-group-text">
                                            <span class="lnr lnr-calendar-full"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" placeholder="Time" />
                                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                        <div class="input-group-text">
                                            <span class="lnr lnr-clock"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <select class="form-control" id="selectPerson">
                                    <option></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                 
                            <div class="col-md-12 form-group">
                                <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..."></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</section> -->
<!-- End of Reservation Section -->		<footer class="mastfoot pb-5 bg-white section-padding pb-0">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4">
         		<div class="footer-widget pr-lg-5 pr-0">
         			<img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
                    <h3>Fusion</h3>
	         		<p>Fusion is an e-commerce platform of selling and buying home-made foods and products.</p>
	         		<nav class="nav nav-mastfoot justify-content-start">
		                <a class="nav-link" href="#">
		                	<i class="fab fa-facebook-f"></i>
		                </a>
		                <a class="nav-link" href="#">
		                	<i class="fab fa-twitter"></i>
		                </a>
		                <a class="nav-link" href="#">
		                	<i class="fab fa-instagram"></i>
		                </a>
		            </nav>
         		</div>
         		
         	</div>
         	<div class="col-lg-4">
         		<div class="footer-widget px-lg-5 px-0">
         			<h4>Open Hours</h4>
	         		<ul class="list-unstyled open-hours">
		                <li class="d-flex justify-content-between"><span>Monday</span><span>9:00am - 09:00pm</span></li>
		                <li class="d-flex justify-content-between"><span>Tuesday</span><span>9:00am - 09:00pm</span></li>
		                <li class="d-flex justify-content-between"><span>Wednesday</span><span>9:00am - 09:00pm</span></li>
		                <li class="d-flex justify-content-between"><span>Thursday</span><span>9:00am - 09:00pm</span></li>
		                <li class="d-flex justify-content-between"><span>Friday</span><span>9:00am - 05:00pm</span></li>
		                <li class="d-flex justify-content-between"><span>Saturday</span><span>9:00am - 10:00pm</span></li>
		                <li class="d-flex justify-content-between"><span>Sunday</span><span> Closed</span></li>
		              </ul>
         		</div>
         		
         	</div>

         	<div class="col-lg-4">
         		<div class="footer-widget pl-lg-5 pl-0">
         			<h4>Need help?</h4>
	         		<p>Just a mail away!</p>
	         		<form id="newsletter">
						<div class="form-group">
							<input type="email" class="form-control" id="emailNewsletter" aria-describedby="emailNewsletter" placeholder="Enter email">
						</div>
						<button type="submit" class="btn btn-primary w-100">Submit</button>
					</form>
         		</div>
         		
         	</div>
         	
            
        </div>
    </div>
</footer>	</div>
</div>
	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
	<script>
// When the user clicks on <div>, open the popup
function myFunction1() {
  var popup = document.getElementById("myPopup1");
  popup.classList.toggle("show");
}
</script>
<script>function myFunction2() {
  var popup = document.getElementById("myPopup2");
  popup.classList.toggle("show");
}
</script>
<script>
function myFunction3() {
  var popup = document.getElementById("myPopup3");
  popup.classList.toggle("show");
}
</script>
</body>
</html>
